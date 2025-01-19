<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
            {
                // Get today's date
                // $today = Carbon::today();
                // $currentYear = Carbon::now()->year;
                // // Query the database to get the count of customers for each month in the current year
                // $monthlyCustomersCount = Oncashcustomer::whereYear('created_at', $currentYear)
                // ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(price) as totalFoodPrice')
                //     ->groupBy('month')
                //     ->orderBy('month')
                //     ->get();
                //     //count the munthly miss curd customer

                //     $monthlycurdCustomersCount = AMonthlyCostFood::whereYear('created_at', $currentYear)
                //     ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(foodprice) as totalFoodPrice')
                //     ->groupBy('month')
                //     ->orderBy('month')
                //     ->get();
                //     $foodtoday = Carbon::today()->toDateString();
                //     // Query the database to get the count of each foodname for today
                //     $foodNameCounts = Oncashcustomer::whereDate('created_at', $foodtoday)
                //         ->select('foodname', DB::raw('COUNT(*) as count'))
                //         ->groupBy('foodname')
                //         ->get();
                //     // Query the database to get today's customers
                //     $totalCustomersToday = Oncashcustomer::whereDate('created_at', $foodtoday)->count();
                //     $totalmonthlycustomerToday = AMonthlyCostFood::whereDate('created_at', $foodtoday)->count();
                //     //sum of food price on cash customer
                //     $totalCashCustomerPrice = Oncashcustomer::sum('price');
                //     //sum of food price monthy miss curd customer
                //     $totalmisscusrdCustomerPrice = AMonthlyCostFood::sum('foodprice');
                //     //TOTAL Oncashcustomer + AMonthlyCostFood
                //     $Total = $totalmisscusrdCustomerPrice + $totalCashCustomerPrice;
                //     $TotalVisitors = $totalCustomersToday + $totalmonthlycustomerToday;
                //     //count monthy customer
                //     $customerCount = Monthlycustomer::count();
                //     // find the cost of today
                //         $totalCostToday = DB::table('costs')->whereDate('created_at', $today)->sum('costmoney');
                //         $totalCost = Cost::sum('costmoney');

                //         //monthy cost table
                //         $monthlycostCount = Cost::whereYear('created_at', $currentYear)
                //         ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(costmoney) as totalcostmoney')
                //         ->groupBy('month')
                //         ->orderBy('month')
                //         ->get();

                        return view('Admin.AdminDishboard');
                        //     'totalCustomersToday' => $totalCustomersToday,
                        //     'monthlyCustomersCount' => $monthlyCustomersCount,
                        //     'foodNameCounts' => $foodNameCounts,
                        //     'foodtoday' => $foodtoday,
                        //     'totalmonthlycustomerToday' => $totalmonthlycustomerToday,
                        //     'monthlycurdCustomersCount' => $monthlycurdCustomersCount,
                        //     'totalCashCustomerPrice' => $totalCashCustomerPrice,
                        //     'totalmisscusrdCustomerPrice' => $totalmisscusrdCustomerPrice,
                        //     'Total' => $Total,
                        //     'TotalVisitors' => $TotalVisitors,
                        //     'customerCount' => $customerCount,
                        //     'totalCostToday' => $totalCostToday,
                        //     'totalCost' => $totalCost,
                        //     'monthlycostCount' => $monthlycostCount,
                        //     'currentYear' => $currentYear, // Pass the $currentYear variable to the view
                        // ]);
                    }
}
