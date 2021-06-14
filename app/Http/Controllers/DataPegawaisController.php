<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\datapegawai;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class DataPegawaisController extends Controller
{
    public function index()
    {
        $datapegawais = datapegawai::all(); 
        return view('ReadPegawai', ['datapegawais' => $datapegawais], compact('datapegawais'));
    }

    public function create()
    {
        return view('InputData');
    }

    public function store(Request $request)
    {
        $datapegawais = new datapegawai;
        $datapegawais->id = $request->id;
        $datapegawais->nama_pegawai= $request->nama_pegawai;
        $datapegawais->divisi_pegawai = $request->divisi_pegawai;
        $datapegawais->nama_pelatihan = $request->nama_pelatihan;
        $datapegawais->tanggal_pelatihan = $request->tanggal_pelatihan;
    
        $datapegawais->save();
        return redirect('/Read');
    }

    public function destroy($id)
    {
        $datapegawais = datapegawai::findorFail($id);
        try {
            $datapegawais->delete();
            $response = [
                'message' => 'Data Berhasil di Hapus!'
            ];
            return response()->json($response , Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed to delete data!' . $e->errorInfo
            ]);
        }
    }
    public function edit($id)
    {
        $datapegawais=datapegawai::findorfail($id);
        return view('/UpdatePegawai', compact('datapegawais'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $datapegawais=datapegawai::findorfail($id);
        $datapegawais->update($request->all());
        return redirect('/Read');
    }
   
}