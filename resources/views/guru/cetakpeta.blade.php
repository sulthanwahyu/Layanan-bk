

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h3><center>Laporan Data Peta Kerawanan</center></h3>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kerawanan</th>
                        <th>NIPD</th>
                        <th>WALAS</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($petakerawanan as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->siswa->nama_siswa}}</td>
                  <td>{{$data->jeniskerawanan->jenis_kerawanan}}</td>
                  <td>{{$data->siswa->nipd}}</td>
                  <td>{{$data->walas->name}}</td>
                 </tr>
                @endforeach
                 
              </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="container mt-4">
        <h3><center>Laporan Data User</center></h3>
        <table border="1" cellspacing="0" cellpadding="5">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
          </tr>
          @foreach($user as $item) 
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
          </tr>
          @endforeach
        </table>
    </div> --}}
</body>

</html>