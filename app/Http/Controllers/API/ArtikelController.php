<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ArtikelController extends Controller
{
    public function index()
    {
        $data = ArtikelModel::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $valdiator = Validator::make($request->all(), [
            'tanggal' => 'required',
            'gambar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($valdiator->fails()) {
            return response()->json([
                'message' => 'check your validation',
                'errors' => $valdiator->errors()
            ], Response::HTTP_NOT_ACCEPTABLE);
        }

        $validated = $valdiator->validated();


        try {
            $data = new ArtikelModel($validated);
            $data->tanggal = $request->input('tanggal');
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = $file->getClientOriginalName();
                $file->move('uploads/artikel/img', $filename);
                $data->gambar = $filename;
                $data->judul = $request->input('judul');
                $data->deskripsi = $request->input('deskripsi');
            }
            $data->save();
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'failed to input data',
                'errors' => $th->getMessage(),
            ]);
        }

        return response()->json([
            'message' => 'success create',
            'data' => [
                'id' => $data->id,
                'data' => $data
            ]
        ], Response::HTTP_OK);
    }

    public function delete($id)
    {
        $data = ArtikelModel::findOrfail($id);
        $data->delete();
        return response()->json([
            'message' => 'delete success'
        ]);
    }
}
