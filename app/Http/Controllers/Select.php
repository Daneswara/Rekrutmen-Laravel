<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select extends Controller
{
        public function prov(){  
        $data = DB::select("SELECT * FROM provinsi");
        return json_encode($data);
    }
    public function kab($id_prov){  
        $data = DB::select("SELECT * FROM kabupaten WHERE id_prov = '$id_prov'");
        return json_encode($data);
    }
    public function kec($id_kab){  
        $data = DB::select("SELECT * FROM kecamatan WHERE id_kab = '$id_kab'");
        return json_encode($data);
    }
    public function kel($id_kec){  
        $data = DB::select("SELECT * FROM kelurahan WHERE id_kec = '$id_kec'");
        return json_encode($data);
    }
    public function kawin(){  
        $data = DB::select("SELECT * FROM mst_status_kawin");
        return json_encode($data);
    }
    public function sekolah(){  
        $data = DB::select("SELECT * FROM mst_sekolah");
        return json_encode($data);
    }
    public function agama(){  
        $data = DB::select("SELECT * FROM mst_agama");
        return json_encode($data);
    }
    public function kelamin(){  
        $data = DB::select("SELECT * FROM mst_kelamin");
        return json_encode($data);
    }
    public function lokasi(){  
        $data = DB::select("SELECT * FROM mst_lokasi");
        return json_encode($data);
    }
}
