<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PengajuanCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuancuti = PengajuanCuti::all(); 
        return view('ReadCuti', ['pengajuancuti' => $pengajuancuti], compact('pengajuancuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('InputCuti');
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuancuti = new PengajuanCuti;
        $pengajuancuti->nama_karyawan= $request->nama_karyawan;
        $pengajuancuti->divisi = $request->divisi;
        $pengajuancuti->jeniscuti = $request->jeniscuti;
        $pengajuancuti->status = $request->status;
        $pengajuancuti->tanggalcuti = $request->tanggalcuti;

        $pengajuancuti->save();
        return redirect('ReadCuti');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengajuancuti = Pengajuancuti::findorFail($id);
        $validator = Validator::make($request->all(), [
            'nama_karyawan' => ['required'],
            'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            'jeniscuti' => ['required', 'in:Tahunan,Hamil,Haid,Sakit,Penting'],
            'status' =>['required', 'in:Setuju,Ditolak'],
            'tanggalcuti' =>['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $pengajuancuti->update($request->all());
            $response = [
                'message' => 'Data pengajuan cuti berhasil diupdate!',
                'data' => $pengajuancuti
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data Gagal di Perbarui' . $e->errorinfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delpengajuan = Pengajuancuti::findorFail($id);
        try {
            $delpengajuan->delete();
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
}
