<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourteam;
use Illuminate\Support\Facades\Log;

class ourteamController extends Controller
{
    public function Vourteam(){
        $dataOurteam = OurTeam::all();
        // dd($dataOurteam);
        return view('User.Homepage.curdourteam',['dataOurteam' => $dataOurteam]);

        // dd('Reached the controller method');
    }

    public function submitourteam(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'membername' => 'required|string',
            'membersdes' => 'required|string',
            'memberimage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $orgname = $request->file('memberimage')->getClientOriginalName();
        // Store the image in 'public/ourteamimage' and get the relative path
        $imagePath = $request->file('memberimage')->storeAs('image',$orgname,'public');
        // dd($imagePath);
        $relativeImagePath = str_replace('public/', '', $imagePath);
        
    
        // Save the record
        $record = new OurTeam;
        $record->membername = $validatedData['membername'];
        $record->membersdes = $validatedData['membersdes'];
        $record->memberimage = $relativeImagePath;
        $record->save();
        // dd($record);
    
        return redirect()->back()->with('success', 'Team member added successfully.');
    }
    
public function deleteMember($id)
{
    try {
        $member = OurTeam::find($id);

        if (!$member) {
            return redirect()->back()->with('error', 'Member not found');
        }

        $member->delete();

        return redirect()->back()->with('success', 'Member deleted successfully');
    } catch (\Exception $e) {
        Log::error('Error deleting member: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while deleting member');
    }
}

}
