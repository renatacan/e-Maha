<?php

namespace App\Http\Controllers;
use App\Mahasiswa;

use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'succes' => true,
            'message' => 'Berhasil',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs){
            return response()->json([
                'succes' => true,
                'message' => 'Success'
            ], 200);
        }
        else {
            return response()->json([
                'succes' => false,
                'message' => 'Not Success'
            ], 400);
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'succes' => true,
                'message' => 'Success'
            ], 200);
        }
        else
        {
            return response()->json([
                'succes' => false,
                'message' => 'Not Success'
            ], 400);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if($mhs)
        {
            return response()->json([
                'succes' => true,
                'message' => 'Success'
            ], 200);
        }
        else
        {
            return response()->json([
                'succes' => false,
                'message' => 'Not Success'
            ], 400);
        }
    }
}

//http://127.0.0.1:8000/api/mahasiswa/read