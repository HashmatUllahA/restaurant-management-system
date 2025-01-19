<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userhomeourmenu;
use App\Models\Ourteam;

class userhomecontroller extends Controller
{
    public function curduserhome(){
        $datamenu = userhomeourmenu::all();
        $ourteam = Ourteam::all();
        return view('User.Homepage.curdUserHome', compact('datamenu', 'ourteam'));
    }
    public function addmenu(Request $request){
        $validatedData = $request->validate([
            'foodname' => 'required|string',
            'foodprice' => 'required|string', // Corrected the validation rule for date field
            'explanation' => 'required|string',
        ]);

        try {
            // Create a new instance of the MonthlyCustomer model and set the values
            $datamenu = new userhomeourmenu;
            $datamenu->foodname = $request->input('foodname');
            $datamenu->foodprice = $request->input('foodprice');
            $datamenu->explanation = $request->input('explanation');

            // Save the data to the database
            $datamenu->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while saving the data.']);
        }
    }

    public function deletemenuitem($id)
    {
        try {
            $record = userhomeourmenu::findOrFail($id);

            // Delete the record
            $record->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }


}
