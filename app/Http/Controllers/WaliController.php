<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;
use App\Mahasiswa;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::with('mahasiswa')->get();

        return view('wali.index', compact('wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mhs = Mahasiswa::all();

        return view('wali.create', compact('mhs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wali = new Wali;
        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->mhs;
        $wali->save();
        \Session::flash('flash_notification', [
            "level" => "success",
            "message" => "Berhasil menambah data <b>$wali->nama</b>"
            ]);

        return redirect()->route('wali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wali = Wali::findOrFail($id);
        $mhs = Mahasiswa::all();

        return view('wali.show', compact('mhs', 'wali'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wali = Wali::findOrFail($id);
        $mhs = Mahasiswa::all();

        return view('wali.edit', compact('mhs', 'wali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wali = Wali::findOrFail($id);

        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->mhs;
        $wali->save();
        \Session::flash('flash_notification', [
            "level" => "success",
            "message" => "Berhasil menambah data <b>$wali->nama</b>"
            ]);

        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = Wali::findOrFail($id)->delete();
        \Session::flash('flash_notification', [
            "level" => "danger",
            "message" => "Berhasil menghapus data <b></b>"
            ]);

        return redirect()->route('wali.index');
    }
}
