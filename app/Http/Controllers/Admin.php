<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function index()
    {
       $job = DB::select("SELECT * FROM job");
        $result  = array('job' => $job);
        return view('admin/index', $result);
    }
}
