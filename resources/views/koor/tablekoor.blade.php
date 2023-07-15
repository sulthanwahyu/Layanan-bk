@extends('layout.app')
@section('title,tablekoor')
@section('content')


<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="icofont icofont-table bg-c-blue"></i>
                                <div class="d-inline">
                                    <h4>Tables</h4>
                                    <span>please add edit and delete!</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                               <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="icofont icofont-plus"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/add_siswa">Siswa</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/add_guru">Guru BK</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/walas_form">Walas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <!-- Basic table card end -->
                <!-- Inverse table card start -->
                <!-- Inverse table card end -->
                <!-- Hover table card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Table User</h5>
                        <a class="btn btn-default" href="{{route('cetakuser')}}" target="_blank"><i class="fa fa-print"></i> Cetak PDF</a>
                        {{-- <span>use class <code>table-hover</code> inside table element</span> --}}
                        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>  </ul></div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gmail</th>
                                        <th>Role</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($user as $data)
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->email}}</td>
                                  <td>{{$data->role}}</td>
                                  {{-- <td style="display: flex; gap: 5px"> --}}
                                    {{-- <a href="/user/edit/{{$data->id}}"><i class="fa-solid fa-pen"></i></a> --}}
                                    {{-- <form action="/user/destroy/{{$data->id}}" method="POST" onsubmit="return confirm('yakin hapus?')">
                                      @csrf
                                      @method('DELETE')
                                      <button style="border:none" type="submit"><i class="fa-solid fa-trash"></i></button>
                                     </form>
                                  </td> --}}
                                 </tr>
                                @endforeach
                                 
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Hover table card end -->
                <!-- Contextual classes table starts -->
                <!-- Contextual classes table ends -->
                <!-- Background Utilities table start -->
                <!-- Background Utilities table end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>
</div>
    </div>
</div>
@endsection