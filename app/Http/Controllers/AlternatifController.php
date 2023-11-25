<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtAlternatif = Alternatif::where('nama_alternatif', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $dtAlternatif = Alternatif::all();
        }
        // $dtPengguna = Pengguna::all();
        return view('Alternatif.data_alternatif', compact('dtAlternatif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alternatif.create_alternatif');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Alternatif::create([
            'nama_alternatif' => $request->nama_alternatif,
            'waktu_tempuh' => $request->waktu_tempuh,
            'jumlah_permintaan' => $request->jumlah_permintaan,
            'biaya' => $request->biaya,
            'jarak' => $request->jarak
        ]);

        return redirect('data_alternatif')->with('success', 'Data Berhasil Tersimpan!');
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
        $dtAlternatif = Alternatif::findorfail($id);
        return view('edit_alternatif', compact('dtAlternatif'));
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
        $dtAlternatif = Alternatif::findorfail($id);
        $dtAlternatif->update($request->all());
        return redirect('data_alternatif')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtAlternatif = Alternatif::findorfail($id);
        $dtAlternatif->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
