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
        $job = array();
        $job_ = DB::table('job')->where('is_publish', 't')->get();
        $fungsi = DB::table('mst_fungsi')->get();
        $lokasi = DB::table('mst_lokasi')->get();
        foreach ($job_ as $value) {
            array_push($job, array(
                'judul' => $value->judul,
                'deskripsi' => $value->deskripsi,
                'syarat' => $value->syarat,
                'fungsi_id' => $value->fungsi_id,
                'lokasi' => DB::table('mst_lokasi')->where('id', $value->lokasi)->value("lokasi"),
                'url_icon' => url('/')."/".$value->url_icon,
                'url_icon_ori' => $value->url_icon,
            ));
        }
        $result  = array(
            'job' => $job,
            'fungsi' => $fungsi,
            'lokasi' => $lokasi,
        );
        return view('index', $result);
    }
}
