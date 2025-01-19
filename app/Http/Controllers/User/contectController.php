<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contect;
use Illuminate\Support\Facades\Session;
class contectController extends Controller
{
    public function storecontect(Request $request){
        $newContact = new contect();

        $newContact->name = $request->input('name');
        $newContact->email = $request->input('email');
        $newContact->Subject = $request->input('Subject');
        $newContact->phoneno = $request->input('phoneno');
        $newContact->message = $request->input('message');

        $newContact->save(); // Save the contact record

        // Set the flag indicating new contacts are available
        Session::increment('new_contacts_count', 1);

        return redirect()->back()->with('success', true);
    }


    public function getusercontect(){
        $today = \Carbon\Carbon::now()->format('Y-m-d'); // Get today's date in 'Y-m-d' format

        $usercontect = contect::whereDate('created_at', $today)->get();
        $newContactCounter = contect::firstOrNew([]);
        $newContactCount = $newContactCounter->count;

        return view('Admin.usercontect.seeUserContect', compact('usercontect', 'newContactCount'));
    }

    public function deletecontect($id)
{
    // Logic to delete the record with the given ID
    // For example:
    contect::findOrFail($id)->delete();

    return redirect()->back()->with('success', 'Record deleted successfully');
}
}
