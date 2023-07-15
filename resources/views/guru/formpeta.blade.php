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
                                <h4>Hi, welcome back!</h4>
                    <p class="mb-1">Validation</p>
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
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
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
                <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Forms with icon</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form class="form-valide-with-icon" action="/add_peta" method="POST">
                        @csrf
                        {{-- <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Jenis Kerawanan</label>
                        <select id="disabledSelect" class="form-select" name="jenis_kerawanan">
                          @foreach ($petakerawanan as $data)
                          <option value="{{$data->id}}">{{$data->jenis_kerawanan}}</option> 
                          @endforeach
                        </select>
                      </div>    --}}
                      {{-- <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Guru</label>
                        <select id="disabledSelect" class="form-select" name="bk_id">
                          @foreach ($guru as $data)
                          <option value="{{$data->id}}">{{$data->nama_bk}}</option> 
                          @endforeach
                        </select>
                      </div>    --}}
                      {{-- <div class="form-group">
                        <label class="form-label">Jenis Kerawanan</label>
                        <input name="jenis_kerawanan" type="text" class="form-control">
                      </div> --}}
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Jenis Kerawanan</label>
                        <select id="disabledSelect" style="width: 100%" class="form-select" name="jenis_kerawanan_id">
                          @foreach ($jeniskerawanan as $data)
                          <option value="{{$data->id}}">{{$data->jenis_kerawanan}}</option> 
                          @endforeach
                        </select>
                      </div> 
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">NAMA SISWA</label>
                        <select id="disabledSelect" style="width: 100%" class="form-select" name="nama_id">
                          @foreach ($siswa as $data)
                          <option value="{{$data->id}}">{{$data->nama_siswa}}</option> 
                          @endforeach
                        </select>
                      </div> 
                      {{-- <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input name="nama_id" type="text" class="form-control">
                      </div> --}}
                      {{-- <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control">
                      </div> --}}
                        <div class="mb-3">
                        <label for="disabledSelect" class="form-label">NIPD</label>
                        <select id="disabledSelect" style="width: 100%" class="form-select" name="nipd_id">
                          @foreach ($siswa as $data)
                          <option value="{{$data->id}}">{{$data->nipd}}</option> 
                          @endforeach
                        </select>
                      </div>   
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">walas</label>
                        <select id="disabledSelect" style="width: 100%" class="form-select" name="walas_id">
                          @foreach ($walas as $data)
                          <option value="{{$data->id}}">{{$data->name}}</option> 
                          @endforeach
                        </select>
                      </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
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


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection 