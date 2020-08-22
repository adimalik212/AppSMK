<?php

namespace App\Http\Controllers;

use App\romble;
use App\ptk;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class rombles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $romble = romble::all();
        $walas = ptk::all();
        return view('pages/romble/romble', compact('walas', 'romble'));
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
    public function store(Request $request, romble $romble)
    {
        $this->validate($request, [
            'tingkat' => 'required|string',
            'jurusan' => 'required|string',
            'kelas' => 'required|string',
            'walas' => 'required|string',
        ]);
        if ($request->jurusan == 'Multimedia') {
            $j = 'MM';
        }elseif ($request->jurusan == 'Tata Boga') {
            $j = 'TB';
        }else {
            $j = 'AKL';
        };

        $id = Uuid::uuid4();
        $data = array(
            'id' => $id,
            'tingkat' => $request->tingkat,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'romble' => $request->tingkat.' '.$j.' '.$request->kelas,
            'walas' => $request->walas,
        );

        romble::create($data);
        return redirect('romble'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\romble  $romble
     * @return \Illuminate\Http\Response
     */
    public function show(romble $romble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\romble  $romble
     * @return \Illuminate\Http\Response
     */
    public function edit(romble $romble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\romble  $romble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, romble $romble)
    {
        $this->validate($request, [
            'tingkat' => 'required|string',
            'jurusan' => 'required|string',
            'kelas' => 'required|string',
            'walas' => 'required|string',
        ]);
        if ($request->jurusan == 'Multimedia') {
            $j = 'MM';
        }elseif ($request->jurusan == 'Tata Boga') {
            $j = 'TB';
        }else {
            $j = 'AKL';
        };

        $data = array(
            'tingkat' => $request->tingkat,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'romble' => $request->tingkat.' '.$j.' '.$request->kelas,
            'walas' => $request->walas,
        );

        romble::where('id', $romble->id)->update($data);
        return redirect('romble'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\romble  $romble
     * @return \Illuminate\Http\Response
     */
    public function destroy(romble $romble)
    {
        romble::where('id', $romble->id)->delete();
        return redirect('romble'); 
    }
}
