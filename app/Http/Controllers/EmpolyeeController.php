<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class EmpolyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = Employee::orderBy('id','DESC')->get();
        $response =[
            'message' => 'List Employees based on ID (DESC)',
            'data' => $employee
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
            'nama_karyawan' => ['required'],
            // 'nik' => ['required'],
            'nik' => ['required'],
            'jenis_kelamin' => ['required' , 'in:Laki-Laki, Perempua'],
            'divisi' => ['required'],
            'alamat' => ['required'],
            'nomor_telp' => ['required'],
            // 'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            // 'jeniscuti' => ['required', 'in:Tahunan,Hamil,Haid,Sakit,Penting'],
            'status' =>['required', 'in:Aktif, TidakAktif'],
            'tanggal_masuk' =>['required'],
            // 'tanggalcuti' =>['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $employee = Employee::create($request->all());
            $response = [
                'message' => 'Data karyawan berhasil disimpan!',
                'data' => $employee
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
        $employee = Employee::findorFail($id);
        $response = [
            'message' => 'Show Employee by ID',
            'data' => $employee
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
        $employee = Employee::findorFail($id);
        $validator = Validator::make($request->all(), [
            'nama_karyawan' => ['required'],
            'nik' => ['required'],
            'jenis_kelamin' => ['required'],
            'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            'alamat' => ['required'],
            'nomor_telp' => ['required'],
            'status' =>['required', 'in:Aktif,Non-Aktif'],
            'tanggal_masuk' => ['required']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $employee = Employee::create($request->all());
            $response = [
                'message' => 'Data Karyawan berhasil disimpan!',
                'data' => $employee
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data Gagal di Simpan ' . $e->errorinfo
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
        $delemployee = Employee::findorFail($id);
        try {
            $delemployee->delete();
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
