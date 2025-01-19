<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\oncashcustomer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class oncashcontrollers extends Controller
{
    public function Voncash(){
        $foodtoday = Carbon::today()->toDateString();

    // Query the database to get the customer records for today
    $customerRecordsToday = Oncashcustomer::whereDate('created_at', $foodtoday)->get();

    return view('Admin.oncashcustomer.index', compact('foodtoday', 'customerRecordsToday'));
    }

    public function submitonch(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'foodname' => 'required|string',
            'price' => 'required|string', // Corrected the validation rule for date field
        ]);

        try {
            // Create a new instance of the MonthlyCustomer model and set the values
            $oncash = new oncashcustomer;
            $oncash->foodname = $request->input('foodname');
            $oncash->price = $request->input('price');

            // Save the data to the database
            $oncash->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while saving the data.']);
        }
}
}
