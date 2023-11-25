<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtPengguna = Pengguna::where('nama_lengkap', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $dtPengguna = Pengguna::all();
        }
        // $dtPengguna = Pengguna::all();
        return view('Pengguna.data_pengguna', compact('dtPengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengguna.create_pengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Pengguna::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'no_telp' => $request->no_telp,
            'jabatan' => $request->jabatan
        ]);

        return redirect('data_pengguna')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtPengguna = Pengguna::findorfail($id);
        return view('edit_pengguna', compact('dtPengguna'));
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
        $dtPengguna = Pengguna::findorfail($id);
        $dtPengguna->update($request->all());
        return redirect('data_pengguna')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPengguna = Pengguna::findorfail($id);
        $dtPengguna->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
