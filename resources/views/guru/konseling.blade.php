@extends('layout.app3')
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
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/add/jadwal">Table</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Table</a>
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
                        <h5>Table Siswa</h5>
                        <a class="btn btn-default" href="{{route('cetaksiswa')}}" target="_blank"><i class="fa fa-print"></i> Cetak PDF</a>
                        {{-- <span>use class <code>table-hover</code> inside table element</span> --}}
                        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>  </ul></div>
                    </div>


                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                    <tr>
                                        <th>No</th>
                                          <th>Status</th>
                                          <th>layanan</th>
                                          <th>guru</th>
                                          <th>Nama</th>                                                                 
                                          <th>deskripsi</th>
                                          <th>Walas</th>
                                          <th>Tanggal</th>
                                          <th>Hasil</th>
                                          <th>action</th>
                                      </tr>
                                </thead>
                                @foreach ($jadwal as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->layanan->jenis_layanan}}</td>
        <td>{{ $item->guru->nama_bk }}</td>                                
        <td>{{ $item->nama }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>{{ $item->walas->name }}</td>
        <td>{{ $item->tanggal_konseling }}</td>
        <td>{{ $item->hasil_konseling }}</td>
        <td style="display: flex; gap: 5px">
        <form action="/jadwalguruu/{{$item->id}}" method="POST">
    @csrf
    @method('PUT')
  <button class="btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
</form>
<form action="/jadwalguru/edit/{{$item->id}}" method="POST">
    @csrf
    @method('get')
  <button class="btn-warning" type="submit"><i class="fa-solid fa-clock"></i></button>
</form>
{{-- <button class="btn-warning" type="submit"><i class="fa-solid fa-clock"></i></button>
<a href="/jadwalguru/edit/{{$item->id}}"></a> --}}
        </td>
    </tr>
@endforeach
                            </table>
                        </div>
                    </div>
                    <tbody>


                                 
                              </tbody>
                            </table>
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