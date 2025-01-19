<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Cost;
use App\Models\Oncashcustomer;
use App\Models\AMonthlyCostFood;
use App\Models\Monthlycustomer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\contect;
use App\Models\userhomeourmenu;
use App\Models\Ourteam;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datamenu = userhomeourmenu::all();
        $ourteam = Ourteam::all();
        // return view('User.Homepage.curdUserHome', compact('datamenu', 'ourteam'));
        return view('User.userhome',  compact('datamenu', 'ourteam'));
    }

    public function adminhome()
    {
        // 'Get today's date
        $today = Carbon::today();
        $currentYear = Carbon::now()->year;
        // Query the database to get the count of customers for each month in the current year
        $monthlyCustomersCount = Oncashcustomer::whereYear('created_at', $currentYear)
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(price) as totalFoodPrice')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
            //count the munthly miss curd customer

            $monthlycurdCustomersCount = AMonthlyCostFood::whereYear('created_at', $currentYear)
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(foodprice) as totalFoodPrice')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
            $foodtoday = Carbon::today()->toDateString();
            // Query the database to get the count of each foodname for today
            $foodNameCounts = Oncashcustomer::whereDate('created_at', $foodtoday)
                ->select('foodname', DB::raw('COUNT(*) as count'))
                ->groupBy('foodname')
                ->get();
            // Query the database to get today's customers
            $totalCustomersToday = Oncashcustomer::whereDate('created_at', $foodtoday)->count();
            $totalmonthlycustomerToday = AMonthlyCostFood::whereDate('created_at', $foodtoday)->count();
            //sum of food price on cash customer
            $totalCashCustomerPrice = Oncashcustomer::sum('price');
            //sum of food price monthy miss curd customer
            $totalmisscusrdCustomerPrice = AMonthlyCostFood::sum('foodprice');
            //TOTAL Oncashcustomer + AMonthlyCostFood
            $Total = $totalmisscusrdCustomerPrice + $totalCashCustomerPrice;
            $TotalVisitors = $totalCustomersToday + $totalmonthlycustomerToday;
            //count monthy customer
            $customerCount = Monthlycustomer::count();
            // find the cost of today
                $totalCostToday = DB::table('costs')->whereDate('created_at', $today)->sum('costmoney');
                $totalCost = Cost::sum('costmoney');

                //monthy cost table
                $monthlycostCount = Cost::whereYear('created_at', $currentYear)
                ->selectRaw('MONTH(created_at) as month, COUNT(*) as count, SUM(costmoney) as totalcostmoney')
                ->groupBy('month')
                ->orderBy('month')
                ->get();
                $newContactCounter = contect::firstOrNew([]);
                $newContactCount = $newContactCounter->count;
                return view('Admin.AdminDishboard',[
                    'totalCustomersToday' => $totalCustomersToday,
                    'monthlyCustomersCount' => $monthlyCustomersCount,
                    'foodNameCounts' => $foodNameCounts,
                    'foodtoday' => $foodtoday,
                    'totalmonthlycustomerToday' => $totalmonthlycustomerToday,
                    'monthlycurdCustomersCount' => $monthlycurdCustomersCount,
                    'totalCashCustomerPrice' => $totalCashCustomerPrice,
                    'totalmisscusrdCustomerPrice' => $totalmisscusrdCustomerPrice,
                    'Total' => $Total,
                    'TotalVisitors' => $TotalVisitors,
                    'customerCount' => $customerCount,
                    'totalCostToday' => $totalCostToday,
                    'totalCost' => $totalCost,
                    'monthlycostCount' => $monthlycostCount,
                    'currentYear' => $currentYear,
                    'newContactCount'=>$newContactCount,// Pass the $currentYear variable to the view
                ]);
            }
            private function getMonths()
            {
                // Get all the unique months present in the oncashcustomers table
                return Oncashcustomer::selectRaw('MONTH(created_at) as month')
                    ->groupBy('month')
                    ->pluck('month')
                    ->toArray();
            }
            //view monthly costs
            public function viewMonthlyCosts($year, $month)
        {
            $startDate = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
            $endDate = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

            $monthlyCosts = Cost::whereBetween('created_at', [$startDate, $endDate])->get();
            $totalCostMoney = $monthlyCosts->sum('costmoney');
            return view('Admin.Costs.monthly_costs', compact('monthlyCosts', 'year', 'month','totalCostMoney'));

    }
                //view monthly costs
                public function viewMonthlycurd($year, $month)
                {
                    $startDate = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
                    $endDate = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

                    $monthlyCosts = AMonthlyCostFood::whereBetween('created_at', [$startDate, $endDate])->get();
                    $totalcurdMoney = $monthlyCosts->sum('foodprice');
                    return view('Admin.monthly_curd', compact('monthlyCosts', 'year', 'month','totalcurdMoney'));

            }
                //monthly record on cahs customer
            public function viewMonthlycash($year, $month)
                {
                    $startDate = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
                    $endDate = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

                    $monthlyCosts = Oncashcustomer::whereBetween('created_at', [$startDate, $endDate])->get();
                    $totalcurdMoney = $monthlyCosts->sum('price');
                    return view('Admin.oncashcustomer.monthly_onCash', compact('monthlyCosts', 'year', 'month','totalcurdMoney'));

            }
}
