<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MapelRequest;
use App\Models\Mapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Mapel::all();

        return view('mapel.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Mapel;
        return view('mapel.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapelRequest $request)
    {
        $model = new Mapel;
        $model->kode_mapel = $request->kode_mapel;
        $model->nama_mapel = $request->nama_mapel;
        $model->kode_jurusan = $request->kode_jurusan;
        $model->nama_jurusan = $request->nama_jurusan;
        $model->save();

        return redirect('mapel')->with('success', "data berhasil di simpan");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Mapel::find($id);
        return view('mapel.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapelRequest $request, $id)
    {
        $model = Mapel::find($id);
        $model->kode_mapel = $request->kode_mapel;
        $model->nama_mapel = $request->nama_mapel;
        $model->kode_jurusan = $request->kode_jurusan;
        $model->nama_jurusan = $request->nama_jurusan;
        $model->save();

        return redirect('mapel')->with('success', "data berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Mapel::find($id);
        $model->delete();
        return redirect('mapel')->with('success', "data berhasil di hapus");
    }
}
