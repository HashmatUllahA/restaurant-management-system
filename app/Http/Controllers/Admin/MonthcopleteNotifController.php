<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AMonthlyCostFood;
use Carbon\Carbon;
class MonthcopleteNotifController extends Controller
{
    public function completeMonth(Request $request)
    {
        $customerId = $request->input('customer_id');

        $monthlyCostFood = AMonthlyCostFood::where('customerid', $customerId)
            ->whereNull('completed_at')
            ->first();
            if (empty($customerId)) {
                return response()->json(['message' => 'No user ID provided'], 200);
            }
        if ($monthlyCostFood) {
            $currentMonth = Carbon::now()->month;
            $createdMonth = Carbon::parse($monthlyCostFood->created_at)->month;

            if ($currentMonth == $createdMonth) {
                $monthlyCostFood->completed_at = now();
                $monthlyCostFood->save();

                return response()->json(['message' => 'User has completed a month'], 200);
            } else {
                return response()->json(['message' => 'User has not yet completed a month'], 200);
            }
        }

        return response()->json(['message' => 'No monthly cost found for the user'], 404);
    }
}
