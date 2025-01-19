<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\allmenu;
class allmenuController extends Controller
{
    public function vallmenu(){
        $allmenudata = allmenu::all();
        return view('User.Homepage.curdAllMenu', compact('allmenudata'));
    }
    public function allmenustore(Request $request)
    {
        $food = new allmenu();
        $food->foodname = $request->input('foodname');
        $food->explanation = $request->input('explanation');
        $food->foodprice = $request->input('foodprice');
        $food->eatedtime = $request->input('eatedtime');
        $food->save();

        return redirect()->back()->with('success', true);

    }

    public function deleteallmenu($id)
{
    $allmenu = allmenu::find($id);

    if (!$allmenu) {
        return redirect()->back()->with('error', 'Food not found');
    }

    $allmenu->delete();

    return redirect()->back()->with('success', 'Food deleted successfully');
}
}
