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
        $candidate = Candidate::all(); 
        return view('DataPelamar', ['candidate' => $candidate], compact('candidate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('InputPelamar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $candidate = new Candidate;
        $candidate->nama_kandidat= $request->nama_kandidat;
        $candidate->nomor_telp = $request->nomor_telp;
        $candidate->alamat = $request->alamat;
        $candidate->experience = $request->experience;
        $candidate->education = $request->education;
        $candidate->status = $request->status;

        $candidate->save();
        return redirect('ReadPelamar');
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
