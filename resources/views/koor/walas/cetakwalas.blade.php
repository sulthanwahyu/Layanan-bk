

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
    <h3><center>Laporan Data Wali Kelas</center></h3>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Walas</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($walas as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->kelas->nama}}</td>
                  <td>{{$data->user->email}}</td>
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