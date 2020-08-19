@extends('main/app')
@section('title', 'Edit PTK')
@section('ptk', 'active')
@section('head')
    <link rel="stylesheet" href="/assets/css/select2.min.css">
@endsection

@section('konten')      
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Edit Tenaga Pendidik</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/ptk">PTK</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Tenaga Pendidik</h4>
                            <form action="/editPtk/{{$guru->id}}" method="POST"> @csrf @method('patch')
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama" value="{{$guru->nama}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <select name="gender" id="" class="select">
                                                    @php
                                                        if ($guru->gender == 'L') {
                                                            $jk = 'Laki-laki';
                                                        } else {
                                                            $jk = 'Perempuan';
                                                        }
                                                        
                                                    @endphp
                                                    <option value="{{$guru->gender}}">{{$jk}}</option>
                                                    <option >-- Pilih --</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tempat" value="{{$guru->tempat}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tanggal" value="{{$guru->tanggal}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Ibu Kandung</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="ibu" value="{{$guru->ibu}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NIK</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nik" value="{{$guru->nik}}" maxlength="16" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nomor HP</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="hp" value="{{$guru->hp}}" maxlength="12" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">e-mail</label>
                                            <div class="col-lg-9">
                                                <input type="email" name="email" value="{{$guru->email}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="alamat" value="{{$guru->alamat}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Desa</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="desa" value="{{$guru->desa}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kecamatan</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="kec" value="{{$guru->kec}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kabupaten</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="kab" value="{{$guru->kab}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Provinsi</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="prov" value="{{$guru->prov}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">TMT</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tmt" value="{{$guru->tmt}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info"><i class="fe fe-download"></i> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>			
    </div>
    <!-- /Page Wrapper -->
@endsection

@section('script')
    <script src="/assets/js/select2.min.js"></script>
@endsection