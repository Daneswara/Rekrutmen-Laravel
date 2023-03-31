<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index()
    {
        // if (Auth::check()) {
        //     $job = DB::table('job')->get();
        //     $result  = array('job' => $job);
        //     return view('index', $result);
        // }else{
        //     $job = DB::table('job')->get();
        //     $result  = array('job' => $job);
        //     return view('index');
        // }
        
        $job = DB::table('job')->get();
        $result  = array('job' => $job);
        return view('index', $result);
    }
}
