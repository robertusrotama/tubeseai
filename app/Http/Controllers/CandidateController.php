<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $candidate = Candidate::orderBy('id','DESC')->get();
        $response =[
            'message' => 'List Candidate based on ID (DESC)',
            'data' => $candidate
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nama_kandidat' => ['required'],
            // 'nik' => ['required'],
            'nomor_telp' => ['required'],
            'alamat' => ['required'],
            'experience' => ['required'],
            'education' => ['required'],
            // 'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            // 'jeniscuti' => ['required', 'in:Tahunan,Hamil,Haid,Sakit,Penting'],
            'status' =>['required', 'in:Lolos,Ditolak'],
            // 'tanggalcuti' =>['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $candidate = Candidate::create($request->all());
            $response = [
                'message' => 'Data kandidat berhasil disimpan!',
                'data' => $candidate
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data Gagal di Simpan ' . $e->errorinfo
            ]);
        }
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
        $candidate = Candidate::findorFail($id);
        $response = [
            'message' => 'Show Candidates by ID',
            'data' => $candidate
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
        //
        $candidate = Candidate::findorFail($id);
        $validator = Validator::make($request->all(), [
            'nama_kandidat' => ['required'],
            'nomor_telp' => ['required'],
            'alamat' => ['required'],
            'experience' => ['required'],
            'education' => ['required'],
            // 'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            // 'jeniscuti' => ['required', 'in:Tahunan,Hamil,Haid,Sakit,Penting'],
            'status' =>['required', 'in:Lolos,Ditolak'],
            // 'tanggalcuti' =>['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $candidate->update($request->all());
            $response = [
                'message' => 'Data pengajuan cuti berhasil diupdate!',
                'data' => $candidate
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
        //
        $delcandidate = Candidate::findorFail($id);
        try {
            $delcandidate->delete();
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
