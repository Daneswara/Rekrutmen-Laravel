<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Users extends Controller
{
    public function register_submit(Request $request)
    {

        // if (!$this->validate($request,[
        //     'username' => [
        //         'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 Karakter',
        //             'max_length' => '{field} Maksimal 20 Karakter',
        //             'is_unique' => 'Username sudah digunakan sebelumnya'
        //         ]
        //     ],
        //     'password' => [
        //         'rules' => 'required|min_length[6]|max_length[50]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 Karakter',
        //             'max_length' => '{field} Maksimal 50 Karakter',
        //         ]
        //     ],
        //     'password_conf' => [
        //         'rules' => 'matches[password]',
        //         'errors' => [
        //             'matches' => 'Konfirmasi Password tidak sesuai dengan password',
        //         ]
        //     ],
        //     'fullname' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 Karakter',
        //             'max_length' => '{field} Maksimal 100 Karakter',
        //         ]
        //     ],
        //     'email' => [
        //         'rules' => 'required|min_length[4]|max_length[50]|is_unique[users.email]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 Karakter',
        //             'max_length' => '{field} Maksimal 50 Karakter',
        //             'is_unique' => 'Email sudah digunakan sebelumnya'
        //         ]
        //     ],
        //     'phone' => [
        //         'rules' => 'required|min_length[10]|is_unique[users.phone]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 10 Karakter',
        //             'is_unique' => 'Nomor telephone sudah digunakan sebelumnya'
        //         ]
        //     ],
        // ])) {
        //     return redirect()->Back()->withInput()->withErrors($validator); 
        // }
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:4|max:20|unique:users',
            'password' => 'required|string|min:6|max:50|confirmed',
            'fullname' => 'required|string|min:4|max:100',
            'email' => 'required|string|min:4|max:50|unique:users',
            'phone' => 'required|min:10|unique:users',
       ],[
            'required' => ':attribute Harus diisi',
            'unique' => ':attribute tidak boleh sama',
            'confirmed' => ':attribute harus sama',
            'username.min' => ':attribute minimal 4 huruf',
            'username.max' => ':attribute maksimal 20 huruf',
            'password.min' => 'panjang :attribute minimal 6',
            'password.max' => 'panjang :attribute maksimal 50',
            'fullname.min' => ':attribute minimal 4 huruf',
            'fullname.max' => ':attribute maksimal 100 huruf',
            'email.min' => ':attribute minimal 4 huruf',
            'email.max' => ':attribute maksimal 50 huruf',
            'phone.min' => ':attribute minimal 10 angka',
            // 'phone.integer' => ':attribute harus angka',
       ]);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator); 
        }else{
            Session::flash('message','Berhasil mendaftar');
            $telp = preg_replace("/[^0-9]/", "", $request->input('phone'));
            $telp = preg_replace('/^0/', '62', $telp);
            $telp = preg_replace('/^\+62/', '62', $telp);
            $telp = preg_replace('/^8/', '628', $telp);
            DB::table('users')->insert([
                'username' => $request->input('username'),
                'password' => password_hash($request->input('password'), PASSWORD_BCRYPT),
                'fullname' => $request->input('fullname'),
                'phone' => $telp,
                'role_id' => 3,
                'is_active' => TRUE,
                'email' => $request->input('email'),
                'iplogin' => $this->getIPAddress(),
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]);
        }
        return redirect()->to('/');
    }
    public function login_submit(Request $req){
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
                'role_id' => $dataUser->role_id,
                'logged_in' => TRUE
            ]);

            DB::table("users")->where('username', $username)->update([
                'iplogin' => $this->getIPAddress(),
                "last_login" => date("Y-m-d H:i:s"),
            ]);
            if (session('role_id')==1) {
                return redirect('/admin');
            }else{
                return redirect('/profile');
            }
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
    public function actionlogout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
 
        $req->session()->regenerateToken();
        return redirect('/');
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
    function login() {
        return view('auth/login');
    }
}
