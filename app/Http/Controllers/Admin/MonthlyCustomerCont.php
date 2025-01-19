<?php

namespace App\Http\Controllers\Admin;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\monthlycustomer;
use App\Models\monthlyfood;
use App\Models\AMonthlyCostFood;
use App\Models\AdvanceReceived;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class MonthlyCustomerCont extends Controller
{
    public function vmonthlyForm(){
        $record = monthlycustomer::all();
        $findmonth = AMonthlyCostFood::all();
        // dd($findmonth);
        return view('Admin.monthlyCustomer',compact('record','findmonth'));
    }
    public function monthlyCustomer(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'Customerid' => 'required|string',
            'Customername' => 'required|string',
            'Customermobile' => 'required|string',
            'CustomerComName' => 'required|string',
            'CustomerBidg' => 'required|string',
            'CustomerRoomno' => 'required|string',
            'CustomerAdvance' => 'required|string',
            'date' => 'required|date', // Corrected the validation rule for date field
        ]);

        try {
            // Create a new instance of the MonthlyCustomer model and set the values
            $monthlyCustomer = new MonthlyCustomer;
            $monthlyCustomer->Customerid = $request->input('Customerid');
            $monthlyCustomer->Customername = $request->input('Customername');
            $monthlyCustomer->Customermobile = $request->input('Customermobile');
            $monthlyCustomer->CustomerComName = $request->input('CustomerComName');
            $monthlyCustomer->CustomerBidg = $request->input('CustomerBidg');
            $monthlyCustomer->CustomerRoomno = $request->input('CustomerRoomno');
            $monthlyCustomer->CustomerAdvance = $request->input('CustomerAdvance');
            $monthlyCustomer->date = $request->input('date');

            // Save the data to the database
            $monthlyCustomer->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while saving the data.']);
        }
    }

            public function getExamDetail($id)
        {
            $record = monthlycustomer::findOrFail($id);
            return response()->json($record);
        }
        //update  monthly customar
        public function updatemonthy(Request $request)
            {
                $id = $request->input('Customerid');
                $record = monthlycustomer::findOrFail($id);

                // Update the fields with the new values
                $record->Customername = $request->input('Customername');
                $record->Customermobile = $request->input('Customermobile');
                $record->CustomerComName = $request->input('CustomerComName');
                $record->CustomerBidg = $request->input('CustomerBidg');
                $record->CustomerRoomno = $request->input('CustomerRoomno');
                $record->CustomerAdvance = $request->input('CustomerAdvance');
                $record->date = $request->input('date');
                // Add other fields to update

                // Save the updated record
                $record->save();

                // Return a success response
                return response()->json(['success' => true]);
            }
//delete monthly record
            public function deleteMonthlyRecord($id)
            {
                $record = MonthlyCustomer::findOrFail($id);

                // Delete the record
                $record->delete();

                // Return a success response
                return response()->json(['success' => true]);
            }

            //post dat form monthly customer food
            public function addFood(Request $request)
            {
                $record = monthlycustomer::all();
                $findmonth = AMonthlyCostFood::all();
                $data = new AMonthlyCostFood;
                $data->customerid = $request->input('customerid');
                $data->food = $request->input('food');
                $data->foodprice = $request->input('foodprice');
                $data->created_at = Carbon::now();
                $data->save();

                    return view('Admin.monthlyCustomer',compact('record','findmonth') );

            }
            public function getCustomerData($customerId)
{

    $customer = DB::table('monthlycustomers')

    ->join('a_monthly_cost_food', 'monthlycustomers.Customerid', '=', 'a_monthly_cost_food.customerid')
    ->leftJoin('advance_receiveds', 'monthlycustomers.Customerid', '=', 'advance_receiveds.customerid')
    ->where('monthlycustomers.Customerid', $customerId)
    // ->whereMonth('monthlycustomers.date', $month)
        ->groupBy(
            'monthlycustomers.Customerid',
            'monthlycustomers.Customername',
            'monthlycustomers.Customermobile',
            'monthlycustomers.CustomerComName',
            'monthlycustomers.CustomerBidg',
            'monthlycustomers.CustomerRoomno',
            'monthlycustomers.CustomerAdvance',
            'monthlycustomers.date',
            'monthlycustomers.created_at',
            'a_monthly_cost_food.Customerid',
            'a_monthly_cost_food.food',
            'a_monthly_cost_food.foodprice',
            'a_monthly_cost_food.id',
            'a_monthly_cost_food.created_at',
            'advance_receiveds.Customerid',
            'advance_receiveds.Advance',
            'advance_receiveds.Received'
        )
        ->select(
            'monthlycustomers.Customerid',
            'a_monthly_cost_food.customerid AS cost_food_customerid', // Include the customerId from a_monthly_cost_food
            'monthlycustomers.Customername',
            'monthlycustomers.Customermobile',
            'monthlycustomers.CustomerComName',
            'monthlycustomers.CustomerBidg',
            'monthlycustomers.CustomerRoomno',
            'monthlycustomers.CustomerAdvance',
            'monthlycustomers.date',
            'monthlycustomers.created_at',
            'a_monthly_cost_food.food',
            'a_monthly_cost_food.foodprice',
            'a_monthly_cost_food.id',
            'a_monthly_cost_food.created_at',
            'advance_receiveds.Advance',
            'advance_receiveds.Received',
            DB::raw('SUM(a_monthly_cost_food.foodprice) AS totalFoodPrice'),
            DB::raw('MAX(advance_receiveds.Received) AS Received')
        )
        ->get();

    $totalFoodPrice = $customer->sum('foodprice');
    $totalrecived = $customer->sum('Received');
    $recordrecived = AdvanceReceived::where('customerid', $customerId)->get();
    $foodrecord = AMonthlyCostFood::where('customerid', $customerId)->get();
//find the months
// End finding months

return view('Admin.GetCustomerRecord', [
    'customer' => $customer,
    'totalFoodPrice' => $totalFoodPrice,
    'totalrecived' => $totalrecived,
    'recordrecived' => $recordrecived,
    'foodrecord' => $foodrecord,

    // Pass the $foodrecord variable directly to the view
    // 'record' => $record,
]);

}

            public function ReceivedMoney(Request $request) {
                $customerId = $request->input('Customerid');
                $AnDdata = AdvanceReceived::where('customerid', $customerId)->get();

                $data = new AdvanceReceived;
                $data->customerid = $customerId; // Correctly set the customerid field
                $data->Received = $request->input('Received');
                $data->save();

                $record = monthlycustomer::all(); // Retrieve the $record data

                return view('Admin.monthlyCustomer', compact('record', 'AnDdata'));
            }



            public function deleteCustomer($customerId)
            {
                DB::beginTransaction();

                try {
                    // $deletedFromMonthlyCustomer = MonthlyCustomer::where('customerId', $customerId)->delete();

        $deletedFromAdvanceReceived = AdvanceReceived::where('customerId', $customerId)->delete();
        $deletedFromAMonthlyCostFood = AMonthlyCostFood::where('customerId', $customerId)->delete();

        if ($deletedFromAdvanceReceived && $deletedFromAMonthlyCostFood) {
            DB::commit();

            $customer = DB::table('monthlycustomers');
            $recordrecived = AdvanceReceived::where('customerid', $customerId)->get();

            return view('Admin.monthlyCustomer', [
                'customer' => $customer,
                'recordrecived' => $recordrecived->isEmpty() ? null : $recordrecived,
            ]);
                    } else {
                        DB::rollback();
                        // return response()->json(['message' => 'Records deletion failed'], 500);
                        echo '<script>alert("First receive money and then delete.");</script>';
                    }
                } catch (Exception $e) {
                    DB::rollback();
                    return response()->json(['message' => 'An error occurred while processing the request'], 500);
                }
            }

            //download monthly miss card record
            public function downloadPdf()
            {
                $record = monthlycustomer::all();
                $findmonth = AMonthlyCostFood::all();

                // Pass the data to the Blade view
                $pdf = PDF::loadView('Admin.monthlyCustomer', compact('record', 'findmonth'));

                // Generate the PDF and return it for download
                return $pdf->download('monthly_customer_report.pdf');
            }

}
