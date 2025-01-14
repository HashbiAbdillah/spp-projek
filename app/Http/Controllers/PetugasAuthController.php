<?php

namespace App\Http\Controllers;

use GuzzleHttp\PrepareBodyMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pwtugas;

class PetugasAuthController extends Controller
{
    public function LoginForm()
    {
        return view('login.login');
    }

    public function submitLoginForm(Request $request) 
    {

    }

    public function daftarform()
    {
        return view('petugas.daftar');
    }

        public function daftarsubmit(Request $request) 
    {
        $pwtugas = new pwtugas();
        $pwtugas->id_petugas = $request->id;
        $pwtugas->username = $request->username;
        $pwtugas->nama_petugas = $request->name;
        $pwtugas->password = $request->password;
        $pwtugas->level = $request->level;
        $pwtugas->save();
        // dd($pwtugas);
        return redirect()->route('petugas.listpetugas');


    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
