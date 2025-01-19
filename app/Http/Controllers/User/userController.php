<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userhomeourmenu;
use App\Models\Ourteam;
use App\Models\Gallery;
use App\Models\Quickorde;
use App\Models\allmenu;

class userController extends Controller
{
    public function about(){
        return view('User.about');
    }
    //user order

    public function userhome(){
        $datamenu = userhomeourmenu::all();
        $ourteam = Ourteam::all();
        // return view('User.Homepage.curdUserHome', compact('datamenu', 'ourteam'));
        return view('User.userhome',  compact('datamenu', 'ourteam'));
    }

    public function booknow(){
        return view('User.booknow');
    }
    public function bolgright(){
        return view('User.bolgright');
    }
    public function bolglift(){
        return view('User.bolglift');
    }
    public function bloggrid(){
        return view('User.bloggrid');
    }
    public function blogdetail(){
        return view('User.blogdetail');
    }
    public function menu(){
        $allmenudeta = allmenu::all();
        return view('User.menu' , compact('allmenudeta'));
    }
    public function contect(){
        return view('User.contect');
    }
    // public function checklayout(){
    //     return view('User.check');
    // }
    public function gallery(){
        $gallerydata = Gallery::all();
        return view('User.gallery',compact('gallerydata'));
    }
    public function ourteam(){
        $ourteam = Ourteam::all();
        // dd($ourteam);
        return view('User.our-team',compact( 'ourteam'));
    }
}
