<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\datapelatihan;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB; 

class DataPelatihansController extends Controller
{
    //
    public function index()
    {
        $datapelatihans = datapelatihan::all(); 
        return view('DeletePelatihan', ['datapelatihans' => $datapelatihans]);
    }
    public function create()
    {
        return view('InputPelatihan');
    }

    public function store(Request $request)
    {
        $datapelatihans = new datapelatihan;
        $datapelatihans->id = $request->id;
        $datapelatihans->nama_pelatihan= $request->nama_pelatihan;
        $datapelatihans->tanggal_pelatihan = $request->tanggal_pelatihan;
        $datapelatihans->waktu_pelatihan = $request->waktu_pelatihan;
        $datapelatihans->tempat_pelatihan = $request->tempat_pelatihan;
        $datapelatihans->jumlah_pegawai= $request->jumlah_pegawai;
        $datapelatihans->Marketing = $request->Marketing;
        $datapelatihans->HR = $request->HR;
        $datapelatihans->Finance = $request->Finance;
        $datapelatihans->Operasional= $request->Operasional;
        $datapelatihans->penyelenggara_pelatihan = $request->penyelenggara_pelatihan;
        $datapelatihans->anggaran_biaya = $request->anggaran_biaya;
        $datapelatihans->status = $request->status;
    
        $datapelatihans->save();
        return redirect('/DeletePelatihan')->with('status', 'Data Pelatihan Berhasil Ditambahkan!');
    }
    public function destroy(datapelatihan $datapelatihans)
    {
        datapelatihan::destroy($datapelatihans->id);
        return redirect('DeletePelatihan')->with('status', 'Data Pelatihan Berhasil Dihapus!');        
    }

    public function edit($id)
    {
        $datapelatihans=datapelatihan::findorfail($id); 
        return view('/UpdatePelatihan', compact('datapelatihans'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $datapelatihans=datapelatihan::findorfail($id);
        $datapelatihans->update($request->all());
        return redirect('DeletePelatihan');
    }
   
}