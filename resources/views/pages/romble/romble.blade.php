@extends('main/app')
@section('title', 'Romble')
@section('rmb', 'active')
@section('head')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="/assets/css/select2.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables/datatables.min.css">
@endsection

@section('konten')      
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Daftar Rombongan Belajar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="#addRomble" data-toggle="modal" class="btn btn-info float-right mt-2"><i class="fe fe-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Wali Kelas</th>
                                            <th>Romble</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>Jumlah</th>
                                            <th class="text-right">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($romble as $r)                                            
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        @foreach ($walas->where('id', $r->walas) as $p)
                                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/ptk/{{$p->img}}" alt="User Image"></a>
                                                            <a href="profile.html">{{$p->nama}}</a>
                                                        @endforeach
                                                    </h2>
                                                </td>
                                                <td>{{$r->romble}}</td>
                                                
                                                <td>2019</td>
                                                
                                                <td>100</td>
                                                <td>3215</td>
                                                
                                                <td>
                                                    <a href="#editRomble{{$r->id}}" data-toggle="modal" class="btn btn-success btn-sm float-right mt-2 mr-2"><i class="fe fe-edit"></i></a>
                                                    <form action="/hapusRomble/{{$r->id}}" method="post"> @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm float-right mt-2 mr-2"><i class="fe fe-trash"></i></button>
                                                    </form>
                                                    <a href="/editRomble/{{$r->id}}" class="btn btn-info btn-sm float-right mt-2 mr-2"><i class="fe fe-user"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
            
        </div>			
    </div>
    <!-- /Page Wrapper -->

    <!-- Add Modal -->
    <div class="modal fade" id="addRomble" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Romble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/addRomble" method="POST"> @csrf
                        <div class="row form-row">
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select name="tingkat" class="select">
                                        <option>-- Pilih --</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select name="jurusan" class="select">
                                        <option>-- Pilih --</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Tata Boga">Tata Boga</option>
                                        <option value="Akuntansi KL">Akuntansi KL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas" class="select">
                                        <option>-- Pilih --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Wali Kelas</label>
                                    <select name="walas" class="select">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($walas as $w)
                                            <option value="{{$w->id}}">{{$w->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /ADD Modal -->
    @foreach ($romble as $r)
        
    <div class="modal fade" id="editRomble{{$r->id}}" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Romble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/editRomble/{{$r->id}}" method="POST"> @csrf @method('patch')
                        <div class="row form-row">
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select name="tingkat" class="select">
                                        <option value="{{$r->tingkat}}">{{$r->tingkat}}</option>
                                        <option>-- Pilih --</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select name="jurusan" class="select">
                                        <option value="{{$r->jurusan}}">{{$r->jurusan}}</option>
                                        <option>-- Pilih --</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Tata Boga">Tata Boga</option>
                                        <option value="Akuntansi KL">Akuntansi KL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas" class="select">
                                        <option value="{{$r->kelas}}">{{$r->kelas}}</option>
                                        <option>-- Pilih --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Wali Kelas</label>
                                    <select name="walas" class="select">
                                        @foreach ($walas->where('id', $r->walas) as $w)
                                            <option value="{{$w->id}}">{{$w->nama}}</option>
                                        @endforeach
                                        <option value="">-- Pilih --</option>
                                        @foreach ($walas as $w)
                                            <option value="{{$w->id}}">{{$w->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection

@section('script')
        <!-- Datatables JS -->
        <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/datatables.min.js"></script>
@endsection