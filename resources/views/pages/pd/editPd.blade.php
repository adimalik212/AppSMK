@extends('main/app')
@section('title', 'Edit PD')
@section('pd', 'active')
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
                        <h3 class="page-title">Edit Peserta Didik</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/pd">PD</a></li>
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
                            <h4 class="card-title">Data Peserta Didik</h4>
                            <form action="/editPd/{{$p->id}}" method="POST"> @csrf @method('patch')
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama" value="{{$p->nama}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <select name="gender" id="" class="select">
                                                    @php
                                                        if ($p->gender == 'L') {
                                                            $jk = 'Laki-laki';
                                                        } else {
                                                            $jk = 'Perempuan';
                                                        }
                                                        
                                                    @endphp
                                                    <option value="{{$p->gender}}">{{$jk}}</option>
                                                    <option >-- Pilih --</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tempat" value="{{$p->tempat}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tanggal" value="{{$p->tanggal}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Ibu Kandung</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="ibu" value="{{$p->ibu}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NIK</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nik" value="{{$p->nik}}" maxlength="16" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NISN</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nisn" value="{{$p->nisn}}" maxlength="10" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Asal Sekolah</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="asal" value="{{$p->asal}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nomor HP</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="hp" value="{{$p->hp}}" maxlength="12" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Keterangan</label>
                                            <div class="col-lg-9">
                                                <select class="select" name="ket">
                                                    <option value="{{$p->ket}}">{{$p->ket}}</option>
                                                    <option>-- Pilih --</option>
                                                    <option value="Baru">Baru</option>
                                                    <option value="Pindahan">Pindahan</option>
                                                </select>
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
                                                <input type="text" name="alamat" value="{{$p->alamat}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Desa</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="desa" value="{{$p->desa}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kecamatan</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="kec" value="{{$p->kec}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kabupaten</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="kab" value="{{$p->kab}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Provinsi</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="prov" value="{{$p->prov}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">TMS</label>
                                            <div class="col-lg-9">
                                                <input type="date" name="tms" value="{{$p->tms}}" class="form-control">
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