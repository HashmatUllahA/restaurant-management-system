<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quickorde;
use App\Models\Ourteam;
use Illuminate\Support\Facades\Session;

use App\Models\userhomeourmenu;

class OrderController extends Controller
{
    public function submitorder(Request $request)
    {
        $datamenu = userhomeourmenu::all();
        $ourteam = Ourteam::all();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobilenumber' => 'required|string|max:20',
            'Address' => 'required|string|max:255',
            'fooditeams' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
        ]);

        $record = new Quickorde;
        $record->name = $validatedData['name'];
        $record->email = $validatedData['email'];
        $record->mobilenumber = $validatedData['mobilenumber'];
        $record->Address = $validatedData['Address'];
        $record->fooditeams = $validatedData['fooditeams'];
        $record->message = $validatedData['message'];

        $record->save();
        Session::increment('new_order_count', 1);
        return redirect()->back()->with('success', true);
    }
    //admin can see the order
    public function chekorder()
{
    $today = now()->format('Y-m-d'); // Get today's date in the format 'YYYY-MM-DD'
    $order = Quickorde::whereDate('created_at', $today)->get();
    return view('Admin.ORDER.checkorder', compact('order'));
}

    public function deleteOrder($id)
    {
        $order = Quickorde::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
}
