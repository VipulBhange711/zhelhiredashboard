<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MyController extends Controller
{
    public function home(){
        return view('uiPages.index');
    }
    public function contact(){
        return view('uiPages.contact-us');
    }
    public function services(){
        return view('uiPages.our-services');
    }
    public function about(){
        return  view('uiPages.about-us');
    }
    public function vip(){
        $table = DB::table('testdb')->get();
        return  $table;
    }
}
