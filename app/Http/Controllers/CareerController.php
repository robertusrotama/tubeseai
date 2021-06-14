<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career= Career::all(); 
        return view('DataPangkat', ['career' => $career], compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('InputPangkat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career;
        $career->nama_karyawan= $request->nama_karyawan;
        $career->divisi = $request->divisi;
        $career->pangkat = $request->pangkat;
        $career->berkas = $request->berkas;
        $career->pelatihan = $request->pelatihan;

        $career->save();
        return redirect('DataPangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::findorFail($id);
        $response = [
            'message' => 'Show Something by ID',
            'data' => $career
        ];
        return response()->json($response,Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $career = Career::findorFail($id);
        $validator = Validator::make($request->all(), [
            'nama_karyawan' => ['required'],
            'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            'pangkat' => ['required','in:Newbie,Junior,Senior'],
            'berkas' => ['required','in:lengkap,kurang'],
            'pelatihan' => ['required','in:yes,no'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $career->update($request->all());
            $response = [
                'message' => 'Pangkat diupdate!',
                'data' => $career
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
        $hapuscareer = Career::findorFail($id);
        try {
            $hapuscareer->delete();
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
