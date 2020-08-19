<?php

namespace App\Http\Controllers;

use App\ptk;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as image;

class ptks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = ptk::all();
        return view('pages/ptk/ptk', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/ptk/addPtk');
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
            'hp' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'desa' => 'required|string',
            'kec' => 'required|string',
            'kab' => 'required|string',
            'prov' => 'required|string',
            'tmt' => 'required|string',
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
            'hp' => $request->hp,
            'email' => $request->email,
            'alamat' => ucwords($request->alamat),
            'desa' => ucwords($request->desa),
            'kec' => ucwords($request->kec),
            'kab' => ucwords($request->kab),
            'prov' => ucwords($request->prov),
            'tmt' => $request->tmt,
        );

        ptk::create($data);
        return redirect('ptk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ptk  $ptk
     * @return \Illuminate\Http\Response
     */
    public function show(ptk $ptk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ptk  $ptk
     * @return \Illuminate\Http\Response
     */
    public function edit(ptk $ptk)
    {
        $guru = ptk::where('id', $ptk->id)->first();
        return view('pages/ptk/editPtk', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ptk  $ptk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ptk $ptk)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tempat' => 'required|string',
            'tanggal' => 'required|string',
            'ibu' => 'required|string',
            'nik' => 'required|string',
            'hp' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'desa' => 'required|string',
            'kec' => 'required|string',
            'kab' => 'required|string',
            'prov' => 'required|string',
            'tmt' => 'required|string',
        ]);

        $data = array(
            'nama' => ucwords($request->nama),
            'gender' => $request->gender,
            'tempat' => ucwords($request->tempat),
            'tanggal' => $request->tanggal,
            'ibu' => ucwords($request->ibu),
            'nik' => $request->nik,
            'hp' => $request->hp,
            'email' => $request->email,
            'alamat' => ucwords($request->alamat),
            'desa' => ucwords($request->desa),
            'kec' => ucwords($request->kec),
            'kab' => ucwords($request->kab),
            'prov' => ucwords($request->prov),
            'tmt' => $request->tmt,
        );

        ptk::where('id', $ptk->id)->update($data);
        return redirect('ptk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ptk  $ptk
     * @return \Illuminate\Http\Response
     */
    public function editImg(Request $request, ptk $ptk)
    {
        if (! $request->img == '') {
            $image_path = "assets/img/ptk/".$ptk->img;
            if (file_exists($image_path)) {
                @unlink($image_path);
                $file=$request->file('img');
                $name = rand() . '.' . $file->getClientOriginalExtension();
        
                $thumbnailpath = public_path('assets/img/ptk/'.$name);
                $img = Image::make($file)->resize(500, 500, function($contan){ $contan->aspectRatio();});
                $img->save($thumbnailpath);

                $data = array(
                    'img' => $name,
                );
            }else {
                $file=$request->file('img');
                $name = rand() . '.' . $file->getClientOriginalExtension();
        
                $thumbnailpath = public_path('assets/img/ptk/'.$name);
                $img = Image::make($file)->resize(500, 500, function($contan){ $contan->aspectRatio();});
                $img->save($thumbnailpath);

                $data = array(
                    'img' => $name,
                );
            }
        } else {
            $name = $ptk->img;

            $data = array(
                'img' => $name,
            );
        }

        ptk::where('id', $ptk->id)->update($data);
        return redirect('ptk');
    }

    public function destroy(ptk $ptk)
    {
        ptk::where('id', $ptk->id)->delete();
        return redirect('ptk');
    }
}
