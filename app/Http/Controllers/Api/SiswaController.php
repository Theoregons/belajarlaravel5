<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return response([
            'message' => 'Data Berhasil Ditampilkan',
            'data' => Siswa::all()
        ],200);
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);
         
        return response([
            'message' => 'Data Berhasil Dibuat',
            'data' => Siswa::create($validator)
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return response([
                'message' => 'Data Berhasil Ditampilkan',
                'data' => Siswa::findOrFail($id)
            ],200); 
        } catch (\Throwable $th) {
            return response([
                'message' => 'Data Tidak Ditemukan'
            ],400); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'message' => 'Data Berhasil Diubah',
            'data' => $data
        ],200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
            'message' => 'Data Berhasil Dihapus'
        ],200); 
    }
}
