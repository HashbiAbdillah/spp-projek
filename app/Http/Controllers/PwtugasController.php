<?php

namespace App\Http\Controllers;

use App\Models\pwtugas;
use Illuminate\Http\Request;

class PwtugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilpetugas()
    {
        $pwtugas = pwtugas::all();
        return view('petugas.listpetugas', compact('pwtugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pwtugas $pwtugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editpetugas(pwtugas $id_petugas)
    {
        return view('petugas.editpetugas',  compact('id_pwtugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pwtugas $pwtugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pwtugas $pwtugas)
    {
        //
    }
}
