<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;
use Carbon\Carbon;
use App\Models\monthlycustomer;
use Illuminate\Support\Facades\DB;
class CostController extends Controller

{
    public function Vcosts(){
        $costtoday = Carbon::today();
    $costData = Cost::whereDate('created_at', $costtoday)->get();
        return view('Admin.Costs.costsindex',compact('costData'));
    }
    public function submitcosts(Request $request){
        $validatedData = $request->validate([
            'details' => 'required|string',
            'costmoney' => 'required|string', // Corrected the validation rule for date field
        ]);

        try {
            // Create a new instance of the MonthlyCustomer model and set the values
            $costs = new Cost;
            $costs->details = $request->input('details');
            $costs->costmoney = $request->input('costmoney');

            // Save the data to the database
            $costs->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while saving the data.']);
        }
    }
            public function getExamDetail($id)
        {
            $record = Cost::findOrFail($id);
            return response()->json($record);
        }

        public function updateCost(Request $request)
        {
            $id = $request->input('id');
            $record = Cost::findOrFail($id);

            // Update the fields with the new values
            $record->details = $request->input('details');
            $record->costmoney = $request->input('costmoney');

            // Save the updated record
            $record->save();

            // Return a success response
            return response()->json(['success' => true]);
        }

        public function deleteMonthlyRecord($id)
{
    try {
        // Find the record by ID
        $record = Cost::findOrFail($id);

        // Delete the record
        $record->delete();

        // Return a success response
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        // Return an error response if something goes wrong
        return response()->json(['success' => false, 'message' => 'Failed to delete the record.']);
    }
}
        //view monthly cost
        public function viewMonthlyCosts($year, $month)
        {
            $startDate = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
            $endDate = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

            $monthlyCosts = Cost::whereBetween('created_at', [$startDate, $endDate])->get();

            return view('Admin.Costs.monthly_costs', compact('monthlyCosts', 'year', 'month'));

    }
}
