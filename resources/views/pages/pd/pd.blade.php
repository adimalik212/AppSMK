@extends('main/app')
@section('title', 'PD')
@section('pd', 'active')
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
                        <h3 class="page-title">Daftar Peserta Pendidik</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="/addPd" class="btn btn-info float-right mt-2"><i class="fe fe-plus"></i></a>
                        <a href="/addPd" class="btn btn-primary float-right mt-2 mr-2"><i class="fe fe-upload"></i></a>
                        <a href="/addPd" class="btn btn-success float-right mt-2 mr-2"><i class="fe fe-download"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Last Visit</th>
                                            <th class="text-right">Paid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pd as $pd)
                                            <tr>
                                                <td>
                                                    #{{$pd->nisn}}
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        @if ($pd->img == null)
                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
                                                        @else
                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/pd/{{$pd->img}}" alt="User Image"></a>
                                                        @endif
                                                        <a href="#">{{$pd->nama}}</a>
                                                    </h2>
                                                </td>
                                                <td>{{$pd->gender}}</td>
                                                <td>{{$pd->kec}}, {{$pd->kab}}</td>
                                                <td>{{$pd->hp}}</td>
                                                <td>{{$pd->tms}}</td>
                                                <td class="text-right">
                                                    <a href="/editPd/{{$pd->id}}" class="btn btn-success btn-sm float-right mt-2 mr-2"><i class="fe fe-edit"></i></a>
                                                    <form action="/hapusPd/{{$pd->id}}" method="post"> @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm float-right mt-2 mr-2"><i class="fe fe-trash"></i></button>
                                                    </form>
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
    </div>
    <!-- /Page Wrapper -->
@endsection

@section('script')
        <!-- Datatables JS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/datatables.min.js"></script>
@endsection