<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = Salary::all(); 
        return view('DataGaji', ['salary' => $salary], compact('salary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('InputGaji');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Salary;
        $salary->nama_karyawan= $request->nama_karyawan;
        $salary->divisi = $request->divisi;
        $salary->pangkat = $request->pangkat;
        $salary->jam_kerja = $request->jam_kerja;

        $salary->save();
        return redirect('DataGaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salary = Salary::findorFail($id);
        $response = [
            'message' => 'Show Something by ID',
            'data' => $salary
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
        $salary = Salary::findorFail($id);
        $validator = Validator::make($request->all(), [
            'nama_karyawan' => ['required'],
            'divisi' => ['required', 'in:HR,Finnance,Marketing,Operasional'],
            'pangkat' => ['required','in:Newbie,Junior,Senior'],
            'jam_kerja' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $salary->update($request->all());
            $response = [
                'message' => 'Data gaji berhasil diupdate!',
                'data' => $salary
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
        $hapussalary = Salary::findorFail($id);
        try {
            $hapussalary->delete();
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
