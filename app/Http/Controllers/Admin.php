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
    public function save_job()
    {
        try {
            if (!is_dir('assets/file_icon/')) {
                mkdir('./assets/file_icon/', 0777, TRUE);
            }
            $target_dir = "assets/file_icon/";
            $target_file = $target_dir . time() . basename($_FILES["file_icon"]["name"]);
            $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["file_icon"]["tmp_name"], $target_file)) {
                $data = array(
                    "divisi_id"=>1,
                    "staf_ahli"=>1,
                    "judul"=>$_POST['judul'],
                    "deskripsi"=>$_POST['deskripsi'],
                    "syarat"=>$_POST['deskripsi'],
                    "period"=>date('Ym'),
                    "jumlah_tahap"=>3,
                    "tahap"=>3,
                    "created_at"=>date('Y-m-d G:i:s'),
                    "updated_at"=>date('Y-m-d G:i:s'),
                    "url_icon"=>$target_file,
                    "lokasi"=>$_POST['lokasi'],
                    "is_publish"=>$_POST['is_publish'],
                    'change_by' => session('user_id')
                );
                DB::table('job')->insert($data);
                $result = "Sukses Save";
            } else {
                $result = "Gagal Save";
            }
        } catch (\Throwable $th) {
            $result = "Gagal Save" . $th;
        }
        $res = array('result' => $result);
        return (json_encode($res));
    }
}
