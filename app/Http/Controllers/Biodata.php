<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Biodata extends Controller
{
        public function profile_submit()
    {
        echo "Hallo";
    }
    public function profile()
    {
        // session()->remove('user_id');
        $data = array();
        $user_id = 3;
        // $user_id = session('user_id');
        $users = DB::select("SELECT u.fullname, u.phone, u.email, u.url_photo, b.* FROM users u join biodata b on b.user_id = u.user_id where u.user_id = '$user_id' ");
        if ($users) {
            foreach ($users as $value) {
                $data = array(
                    "user_id" => $value->user_id,
                    "fullname" => $value->fullname,
                    "shortname" => $value->shortname,
                    "tempat_lahir" => $value->tempat_lahir,
                    "tanggal_lahir" => $value->tanggal_lahir,
                    "agama" => $value->agama,
                    "url_photo" => $value->url_photo,
                    "status_perkawinan" => $value->status_perkawinan,
                    "jenis_kelamin" => $value->jenis_kelamin,
                    "alamat_dom" => $value->alamat_dom,
                    "alamat_now" => $value->alamat_now,
                    "no_ktp" => $value->no_ktp,
                    "file_ktp" => $value->file_ktp,
                    "file_skck" => $value->file_skck,
                    "created_at" => $value->created_at,
                    "updated_at" => $value->updated_at,
                    "prov_dom" => $value->prov_dom,
                    "kab_dom" => $value->kab_dom,
                    "kecamatan_dom" => $value->kecamatan_dom,
                    "kelurahan_dom" => $value->kelurahan_dom,
                    "kode_pos_dom" => $value->kode_pos_dom,
                    "prov_now" => $value->prov_now,
                    "kab_now" => $value->kab_now,
                    "kecamatan_now" => $value->kecamatan_now,
                    "kelurahan_now" => $value->kelurahan_now,
                    "kode_pos_now" => $value->kode_pos_now,
                    "file_resume" => $value->file_resume,
                    "bio" => $value->bio,
                    "email" => $value->email,
                    "phone" => $value->phone,
                    "pendidikan" => DB::select("SELECT * FROM riwayat_pendidikan where user_id = '$user_id' "),
                    "pekerjaan" => DB::select("SELECT * FROM riwayat_pekerjaan where user_id = '$user_id' "),
                );
            }
        } else {
            $users = DB::select("SELECT u.fullname, u.phone, u.email, u.user_id FROM users u where u.user_id = '$user_id' ");
            foreach ($users as $value) {
                $data = array(
                    "user_id" => $value->user_id,
                    "fullname" => $value->fullname,
                    "shortname" => "",
                    "tempat_lahir" => "",
                    "tanggal_lahir" => "",
                    "url_photo" => "",
                    "agama" => "",
                    "status_perkawinan" => "",
                    "jenis_kelamin" => "",
                    "alamat_dom" => "",
                    "alamat_now" => "",
                    "no_ktp" => "",
                    "file_ktp" => "",
                    "created_at" => "",
                    "updated_at" => "",
                    "prov_dom" => "",
                    "kab_dom" => "",
                    "kecamatan_dom" => "",
                    "kelurahan_dom" => "",
                    "kode_pos_dom" => "",
                    "prov_now" => "",
                    "kab_now" => "",
                    "kecamatan_now" => "",
                    "kelurahan_now" => "",
                    "kode_pos_now" => "",
                    "file_resume" => "",
                    "file_skck" => "",
                    "bio" => "",
                    "email" => $value->email,
                    "phone" => $value->phone,
                    "pendidikan" => array(),
                    "pekerjaan" => array(),
                );
            }
        }
        // echo json_encode($data);
        // die();
        return view('pelamar/profile', $data);
    }
    public function add_pendidikan()
    {
        try {
            if (!is_dir('assets/file_ijazah/')) {
                mkdir('./assets/file_ijazah/', 0777, TRUE);
            }
            $target_dir = "assets/file_ijazah/";
            $target_file = $target_dir . time() . basename($_FILES["file_ijazah"]["name"]);
            $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["file_ijazah"]["tmp_name"], $target_file)) {
                $data = array(
                    'id_sekolah' => $_POST['id_sekolah'],
                    'sekolah' => $_POST['sekolah'],
                    'jurusan' => $_POST['jurusan'],
                    'nilai' => $_POST['nilai'],
                    'user_id' => session('user_id'),
                    'masuk' => $_POST['from_pendidikan'],
                    'keluar' => $_POST['to_pendidikan'],
                    "file_ijazah" => $target_file,
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                );
                $insert = $this->db()->table('riwayat_pendidikan')->insert($data);
                $result = "Sukses Insert Pendidikan";
            } else {

                $result = "Gagal Insert Pendidikan";
            }
        } catch (\Throwable $th) {
            $result = "Gagal Insert Pendidikan";
        }
        $res = array('result' => $result);
        return (json_encode($res));
    }
    public function save_avatar()
    {
        try {

            if (!is_dir('assets/avatar_file/')) {
                mkdir('./assets/avatar_file/', 0777, TRUE);
            }
            $target_dir = "assets/avatar_file/";
            $target_file = $target_dir . time() . basename($_FILES["avatar_file"]["name"]);
            $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["avatar_file"]["tmp_name"], $target_file)) {
                $data = array(
                    'change_by' => session('user_id'),
                    "url_photo" => $target_file,
                    "updated_at" => date("Y-m-d H:i:s")
                );

                $this->db()->table('users')->where('username', session('username'))->update($data);
                $result = "Sukses Save Avatar";
            } else {

                $result = "Gagal Save Avatar";
            }
        } catch (\Throwable $th) {
            $result = "Gagal Save Avatar" . $th;
        }
        $res = array('result' => $result);
        return (json_encode($res));
    }
    public function add_pekerjaan()
    {
        // if (!is_dir('assets/file_ijazah//')) {
        //     mkdir('.assets/file_ijazah/', 0777, TRUE);
        // }
        try {
            $data = array(
                'nama_pekerjaan' => $_POST['nama_pekerjaan'],
                'jabatan' => $_POST['jabatan'],
                'pengalaman' => $_POST['pengalaman'],
                'user_id' => session('user_id'),
                'masuk' => $_POST['from_pekerjaan'],
                'keluar' => $_POST['to_pekerjaan'],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $insert = $this->db()->table('riwayat_pekerjaan')->insert($data);
            $result = "Sukses Insert pekerjaan";
        } catch (\Throwable $th) {
            $result = "Gagal Insert pekerjaan" . $th;
        }
        $res = array('result' => $result);
        return (json_encode($res));
    }
    public function save_biodata(Request $req)
    {
        $result = "Sukses Input Biodata";
        $into = 1;
        try {
            $telp = preg_replace("/[^0-9]/", "", $req->input('phone'));
            $telp = preg_replace('/^0/', '62', $telp);
            $telp = preg_replace('/^\+62/', '62', $telp);
            $telp = preg_replace('/^8/', '628', $telp);
            if (($_POST['file_ktp_current']) == "ada") {
                if (!is_dir('assets/file_ktp/')) {
                    mkdir('./assets/file_ktp/', 0777, TRUE);
                }
                $target_dir = "assets/file_ktp/";
                $target_file = $target_dir . time() . basename($_FILES["file_ktp"]["name"]);
                $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (move_uploaded_file($_FILES["file_ktp"]["tmp_name"], $target_file)) {
                    $data_bio = array(
                        'file_ktp' => $target_file,
                        "updated_at" => date("Y-m-d H:i:s")
                    );
                    $this->db()->table('biodata')->where('user_id', session('user_id'))->update($data_bio);
                } else {

                    $result = "Gagal Insert KTP";
                }
            }
            if (($_POST['file_resume_current']) == "ada") {
                if (!is_dir('assets/file_resume/')) {
                    mkdir('./assets/file_resume/', 0777, TRUE);
                }
                $target_dir = "assets/file_resume/";
                $target_file = $target_dir . time() . basename($_FILES["file_resume"]["name"]);
                $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (move_uploaded_file($_FILES["file_resume"]["tmp_name"], $target_file)) {
                    $data_bio = array(
                        'file_resume' => $target_file,
                        "updated_at" => date("Y-m-d H:i:s")
                    );
                    $this->db()->table('biodata')->where('user_id', session('user_id'))->update($data_bio);
                } else {

                    $result = "Gagal Insert KTP";
                }
            }
            if (($_POST['file_skck_current']) == "ada") {
                if (!is_dir('assets/file_skck/')) {
                    mkdir('./assets/file_skck/', 0777, TRUE);
                }
                $target_dir = "assets/file_skck/";
                $target_file = $target_dir . time() . basename($_FILES["file_skck"]["name"]);
                $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (move_uploaded_file($_FILES["file_skck"]["tmp_name"], $target_file)) {
                    $data_bio = array(
                        'file_skck' => $target_file,
                        "updated_at" => date("Y-m-d H:i:s")
                    );
                    $this->db()->table('biodata')->where('user_id', session('user_id'))->update($data_bio);
                } else {
                    $result = "Gagal Insert KTP";
                }
            }

            // $data_bio = array(
            //     "user_id" => session('user_id'),
            //     "fullname" => $_POST['fullname'],
            //     "shortname" => null,
            //     "tempat_lahir" => $_POST['tempat_lahir'],
            //     "tanggal_lahir" => $_POST['tanggal_lahir'],
            //     "agama" => $_POST['agama'],
            //     "status_perkawinan" => $_POST['status_perkawinan'],
            //     "jenis_kelamin" => $_POST['jenis_kelamin'],
            //     "alamat_dom" => null,
            //     "alamat_now" => null,
            //     "no_ktp" => null,
            //     "updated_at" => date("Y-m-d H:i:s"),
            //     "prov_dom" => $_POST['prov_dom'],
            //     "kab_dom" => $_POST['kab_dom'],
            //     "kecamatan_dom" => $_POST['kecamatan_dom'],
            //     "kelurahan_dom" => $_POST['kelurahan_dom'],
            //     "kode_pos_dom" => null,
            //     "prov_now" => null,
            //     "kab_now" => null,
            //     "kecamatan_now" => null,
            //     "kelurahan_now" => null,
            // );
            // if ($req->input('password') == '-') {
            //     $data_user = array(
            //         'fullname' => $_POST['fullname'],
            //         'email' => $_POST['email'],
            //         'phone' => $telp,
            //         "updated_at" => date("Y-m-d H:i:s"),
            //     );
            //     $this->db()->table('users')->where('username', session('username'))->update($data_user);
            //     $this->db()->table('biodata')->where('user_id', session('user_id'))->update($data_bio);
            // } else {
            //     $data_user = array(
            //         'fullname' => $_POST['fullname'],
            //         'email' => $_POST['email'],
            //         'phone' => $telp,
            //         'password' => password_hash($req->input('password'), PASSWORD_BCRYPT),
            //         "updated_at" => date("Y-m-d H:i:s"),
            //     );
            //     $this->db()->table('users')->where('username', session('username'))->update($data_user);
            //     $this->db()->table('biodata')->where('user_id', session('user_id'))->update($data_bio);
            // }
        } catch (\Throwable $th) {
            $result = "Gagal Insert Biodata" . $th;
        }
        $res = array('result' => $result);
        return (json_encode($res));
    }
    public function res()
    {
        $mst_sekolah = DB::select(DB::raw("SELECT * FROM mst_sekolah"));

        return view('index', $mst_sekolah);
    }
    public function login_submit(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        // $dataUser = $this->db()->table('users')->where("username", $username)->getFirstRow();
        // $data = [
        //     'email' => $req->input('email'),
        //     'password' => $req->input('password'),
        // ];
        if (Auth::Attempt(['username' => $username, 'password' => $password, 'is_active' => 1])) {
            $dataUser = DB::table("users")->where('username', $username)->first();
            session([
                'username' => $dataUser->username,
                'fullname' => $dataUser->fullname,
                'user_id' => $dataUser->user_id,
                'logged_in' => TRUE
            ]);

            DB::table("users")->where('username', $username)->update([
                'iplogin' => $this->getIPAddress(),
                "last_login" => date("Y-m-d H:i:s"),
            ]);
            return redirect('/profile');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
        // $dataUser = DB::table("users")->where('username', $username)->first();
        // if ($dataUser) {
        //     if (password_verify($password, $dataUser->password)) {
        //         session([
        //             'username' => $dataUser->username,
        //             'fullname' => $dataUser->fullname,
        //             'user_id' => $dataUser->user_id,
        //             'logged_in' => TRUE
        //         ]);

        //         DB::table("users")->where('username', $username)->update([
        //             'iplogin' => $this->getIPAddress(),
        //             "last_login" => date("Y-m-d H:i:s"),
        //         ]);
        //         return redirect('/profile');
        //     } else {
        //         Session::flash('error', 'Email atau Password Salah');
        //         return redirect('/');
        //     }
        // } else {
        //     Session::flash('error', 'Data Tidak ditemukan');
        //     return redirect('/');
        // }
        // return redirect('/');
    }
    public function getIPAddress()
    {
        //whether ip is from the share internet  
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address  
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
