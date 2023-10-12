<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Jurusan::all();
        return View('jurusan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Jurusan;
        return view('jurusan.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Jurusan;
        $model->kode_jurusan = $request->kode_jurusan;
        $model->nama_jurusan = $request->nama_jurusan;
        $model->tingkat = $request->tingkat;
        $model->save();

        return redirect('jurusan')->with('success',"data berhasil di simpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Jurusan::find($id);
        return view('jurusan.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Jurusan::find($id);
        $model->kode_jurusan = $request->kode_jurusan;
        $model->nama_jurusan = $request->nama_jurusan;
        $model->tingkat = $request->tingkat;
        $model->save();

        return redirect('jurusan')->with('success', "data berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Jurusan::find($id);
        $model->delete();
        return redirect('jurusan')->with('success', "data berhasil di hapus");
    }
}
