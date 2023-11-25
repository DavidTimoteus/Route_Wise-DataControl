<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtKriteria = Kriteria::where('nama_kriteria', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $dtKriteria = Kriteria::all();
        }
        // $dtPengguna = Pengguna::all();
        return view('Kriteria.Data_Kriteria', compact('dtKriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kriteria.create_kriteria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kriteria::create([
            'nama_kriteria' => $request->nama_kriteria,
            'bobot' => $request->bobot,
            'jenis_kriteria' => $request->jenis_kriteria,
        ]);

        return redirect('Data_Kriteria')->with('success', 'Data Berhasil Tersimpan!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtKriteria = Kriteria::findorfail($id);
        return view('edit_kriteria', compact('dtKriteria'));
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
        $dtKriteria = Kriteria::findorfail($id);
        $dtKriteria->update($request->all());
        return redirect('Data_Kriteria')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtKriteria = Kriteria::findorfail($id);
        $dtKriteria->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
