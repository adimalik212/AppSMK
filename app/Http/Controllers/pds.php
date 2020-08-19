<?php

namespace App\Http\Controllers;

use App\pd;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as image;

class pds extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/pd/pd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/pd/addPd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tempat' => 'required|string',
            'tanggal' => 'required|string',
            'ibu' => 'required|string',
            'nik' => 'required|string',
            'nisn' => 'required|string',
            'asal' => 'required|string',
            'hp' => 'required|string',
            'ket' => 'required|string',
            'alamat' => 'required|string',
            'desa' => 'required|string',
            'kec' => 'required|string',
            'kab' => 'required|string',
            'prov' => 'required|string',
            'tms' => 'required|string',
        ]);
        $id = Uuid::uuid4();
        $data = array(
            'id' => $id,
            'nama' => ucwords($request->nama),
            'gender' => $request->gender,
            'tempat' => ucwords($request->tempat),
            'tanggal' => $request->tanggal,
            'ibu' => ucwords($request->ibu),
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'asal' => $request->asal,
            'hp' => $request->hp,
            'ket' => $request->ket,
            'alamat' => ucwords($request->alamat),
            'desa' => ucwords($request->desa),
            'kec' => ucwords($request->kec),
            'kab' => ucwords($request->kab),
            'prov' => ucwords($request->prov),
            'tms' => $request->tms,
        );

        pd::create($data);
        return redirect('pd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pd  $pd
     * @return \Illuminate\Http\Response
     */
    public function show(pd $pd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pd  $pd
     * @return \Illuminate\Http\Response
     */
    public function edit(pd $pd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pd  $pd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pd $pd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pd  $pd
     * @return \Illuminate\Http\Response
     */
    public function destroy(pd $pd)
    {
        //
    }
}
