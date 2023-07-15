{{-- @extends('layout.app3')

@section('title','editp')

@section('content') --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card mt-5">
                    <div class="card-header">
                      <h3>New users</h3>
                    </div>
                 <div class="card-body">
                <div class="mb-3">
                  <label for="name" class="form-label">Nama </label>
                  <input type="text"  value="{{$user->name}}" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">email</label>
                  <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">phone</label>
                  <input type="number" value="{{$user->phone}}" class="form-control" id="phone" name="phone">
                </div>
                {{-- <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number"  value="{{$users->harga}}" class="form-control" id="harga" name="harga">
                </div> --}}
                <div class="mb-2"> 
                  <label for="photo">Masukan Gambar</label> 
                  <input type="file" id="photo" class="form-control" name="photo"> 
              </div> 
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>

{{-- @endsection --}}