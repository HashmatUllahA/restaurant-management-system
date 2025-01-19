<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quickorde;

class quickorderController extends Controller
{
    // public function submitorder(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'mobilenumber' => 'required|string|max:20',
    //         'Address' => 'required|string|max:255',
    //         'fooditeams' => 'required|string|max:255',
    //         'message' => 'nullable|string|max:255',
    //     ]);

    //     $record = new Quickorde;
    //     $record->name = $validatedData['name'];
    //     $record->email = $validatedData['email'];
    //     $record->mobilenumber = $validatedData['mobilenumber'];
    //     $record->Address = $validatedData['Address'];
    //     $record->fooditeams = $validatedData['fooditeams'];
    //     $record->message = $validatedData['message'];

    //     $record->save();

    //     return redirect()->route('submitorder')->with('success', 'Order submitted successfully!');
    // }
}
