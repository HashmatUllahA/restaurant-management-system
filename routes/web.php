<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MonthlyCustomerCont;
use App\Http\Controllers\Admin\MonthcopleteNotifController;
use App\Http\Controllers\Admin\AdvanceReceivedContr;
use App\Http\Controllers\Admin\oncashcontrollers;
use App\Http\Controllers\Admin\CostController;
use App\Http\Controllers\Admin\quickorderController;
use App\Http\Controllers\User\userhomecontroller;
use App\Http\Controllers\User\ourteamController;
use App\Http\Controllers\User\contectController;
use App\Http\Controllers\Admin\OrderController;

//user controller
use App\Http\Controllers\User\userController;
use App\Http\Controllers\User\gallerycontroller;
use App\Http\Controllers\User\allmenuController;
use App\Http\Controllers\Auth\ForgotPasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes(['verify' => true]); // Include 'verify' if you want email verification


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    // Admin routes here
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home');
    Route::get('/vmonthlyForm', [MonthlyCustomerCont::class, 'vmonthlyForm']);
    Route::post('/monthlyCustomer', [MonthlyCustomerCont::class, 'monthlyCustomer'])->name('monthlyCustomer');
    Route::get('/get-Exam-Detail/{id}', [MonthlyCustomerCont::class, 'getExamDetail'])->name('getExamDetail');
    Route::post('/updatemonthy', [MonthlyCustomerCont::class, 'updatemonthy'])->name('updatemonthy');
    Route::delete('/delete-monthly-record/{id}', [MonthlyCustomerCont::class, 'deleteMonthlyRecord'])->name('deleteMonthlyRecord');
    //add food of the monthly customer
    Route::post('/addfood', [MonthlyCustomerCont::class, 'addFood'])->name('addFood');
    Route::get('/getcustomerdata/{customerId}', [MonthlyCustomerCont::class, 'getCustomerData'])->name('getCustomerData');

    Route::post('/receivedMoney', [MonthlyCustomerCont::class, 'ReceivedMoney'])->name('ReceivedMoney');
    Route::delete('/delete-customer/{id}', [MonthlyCustomerCont::class, 'deleteCustomer'])->name('delete-customer');
    //download monthly miss card record
    Route::get('/download-pdf', [MonthlyCustomerCont::class, 'downloadPdf'])->name('downloadPdf');

    //customer on cash
    Route::get('/Voncash', [oncashcontrollers::class, 'Voncash']);
    Route::post('/submitonch', [oncashcontrollers::class, 'submitonch'])->name('submitoncash');
    //Custs of the resturent
    Route::get('/Vcosts', [CostController::class, 'Vcosts']);
    Route::post('/Vcosts', [CostController::class, 'submitcosts'])->name('submitcosts');
    Route::get('/get-Exam-Detail/{id}', [CostController::class, 'getExamDetail'])->name('getExamDetail');
    // Route for adding a new cost record
    Route::post('/update-cost',[CostController::class, 'updateCost'])->name('updateCost');
    Route::delete('/delete-monthly-record/{id}', [CostController::class, 'deleteMonthlyRecord'])->name('deleteMonthlyRecord');
    //view monthly cost
    Route::get('/costs/month/{year}/{month}', [HomeController::class, 'viewMonthlyCosts'])->name('viewMonthlyCosts');
    //view monthly miss curd customer
    Route::get('/curd/month/{year}/{month}', [HomeController::class, 'viewMonthlycurd'])->name('viewMonthlycurd');
    //view monthly on cash customer
    Route::get('/cash/month/{year}/{month}', [HomeController::class, 'viewMonthlycash'])->name('viewMonthlycash');

    //curd user home page  menu
    Route::get('/curduserhome', [userhomecontroller::class,'curduserhome']);
    Route::post('/addmenu', [userhomecontroller::class, 'addmenu'])->name('submitmenu');
    Route::delete('/delete-menu-item/{id}', [userhomecontroller::class, 'deletemenuitem'])->name('deletemenuitem');
    //curd our team
    Route::get('/Vourteam', [ourteamController::class, 'Vourteam']);
    Route::post('/sourteam', [ourteamController::class, 'submitourteam'])->name('submitourteam');
    Route::delete('/delete-member/{id}', [ourteamController::class, 'deleteMember'])->name('deleteMember');
    //curd Gallery Pictures
    Route::get('/Vgallery', [gallerycontroller::class, 'Vgallery']);
    Route::post('/submitgallery', [gallerycontroller::class, 'submitgallery'])->name('submitgallery');
    Route::delete('/delete-gallery/{id}', [GalleryController::class, 'deletegallery'])->name('deletegallery');
    //curd all menu
    Route::get('/vallmenu', [allmenuController::class, 'vallmenu']);
    Route::post('/storeallmenu', [allmenuController::class,'allmenustore'])->name('storeallmenu');
    Route::delete('/deleteallmenu/{id}', [allmenuController::class, 'deleteallmenu'])->name('delete.food');
    //admin see user contect
    Route::get('/seecontect', [contectController::class,'getusercontect']);
    Route::delete('/delete/contect/{id}', [contectController::class,'deletecontect'])->name('delete.contect');
//admin check the order
    Route::get('/checkorder', [OrderController::class,'chekorder'])->name('checkorder');;
    Route::delete('delete/order/{id}', [OrderController::class,'deleteOrder'])->name('delete.order');







});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//user routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [userController::class,'about']);
Route::get('/userhome', [userController::class,'userhome']);
Route::get('/booknow', [userController::class,'booknow']);
Route::get('/bolgright', [userController::class,'bolgright']);
Route::get('/bolglift', [userController::class,'bolglift']);
Route::get('/bloggrid', [userController::class,'bloggrid']);
Route::get('/blogdetail', [userController::class,'blogdetail']);
Route::get('/menu', [userController::class,'menu']);
Route::get('/contect', [userController::class,'contect']);
Route::get('/check', [userController::class,'checklayout']);
Route::get('/gallery', [userController::class,'gallery']);
Route::get('/ourteam', [userController::class,'ourteam']);
Route::get('/test', [GalleryController::class,'test']);
// user order
Route::post('/submitorder', [OrderController::class, 'submitorder'])->name('submitorder');
Route::post('/storecontect', [contectController::class,'storecontect'])->name('storecontect');

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');
