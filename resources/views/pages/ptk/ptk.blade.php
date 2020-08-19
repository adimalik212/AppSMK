@extends('main/app')
@section('title', 'PTK')
@section('ptk', 'active')
@section('head')
    <!-- Datatables CSS -->
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
                        <h3 class="page-title">Daftar Tenaga Pendidik</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="/addPtk" class="btn btn-info float-right mt-2"><i class="fe fe-plus"></i></a>
                        <a href="/addPtk" class="btn btn-primary float-right mt-2 mr-2"><i class="fe fe-upload"></i></a>
                        <a href="/addPtk" class="btn btn-success float-right mt-2 mr-2"><i class="fe fe-download"></i></a>
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
                                            <th>Nama PTK</th>
                                            <th>L/P</th>
                                            <th>Kelahiran</th>
                                            <th>Kontak</th>
                                            <th>e-mail</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guru as $g)
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        @if ($g->img == null)
                                                            <a href="#editImg" data-toggle="modal" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/assets/img/ptk/doctor-thumb-01.jpg" alt="User Image"></a>
                                                        @else
                                                            <a href="#editImg" data-toggle="modal" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/ptk/{{$g->img}}" alt="User Image"></a>
                                                        @endif
                                                        <a href="/"> {{$g->nama}}</a>
                                                    </h2>
                                                </td>
                                                <td>{{$g->gender}}</td>
                                                
                                                <td><small>{{$g->tempat}}</small><br>{{$g->tanggal}}</td>
                                                
                                                <td>{{$g->hp}}</td>
                                                <td>{{$g->email}}</td>
                                                
                                                <td>
                                                    <a href="/editPtk/{{$g->id}}" class="btn btn-success btn-sm float-right mt-2 mr-2"><i class="fe fe-edit"></i></a>
                                                    <form action="/hapusPtk/{{$g->id}}" method="post"> @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm float-right mt-2 mr-2"><i class="fe fe-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!-- Add Modal -->
                                            <div class="modal fade" id="editImg" aria-hidden="true" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document" >
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Photo PTK</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="editImg/{{$g->id}}" method="POST" enctype="multipart/form-data"> @csrf @method('patch')
                                                                <div class="row ">
                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            @if ($g->img == null)
                                                                                <img src="assets/img/ptk/doctor-thumb-01.jpg" id="idn" alt="" srcset="" height="200px" width="100%" class="sedeng">
                                                                            @else
                                                                                <img src="assets/img/ptk/{{$g->img}}" id="idn" alt="" srcset="" height="200px" width="100%" class="sedeng">
                                                                            @endif
                                                                            <input type="file" class="form-control" onchange="document.getElementById('idn').src = window.URL.createObjectURL(this.files[0])" name="img">
                                                                        </div>
                                                                    </div>                                
                                                                </div>
                                                                <button type="submit" class="btn btn-info btn-block"><i class="fe fe-download"></i> Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /ADD Modal -->
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
@endsection

@section('script')
        <!-- Datatables JS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/datatables.min.js"></script>
@endsection