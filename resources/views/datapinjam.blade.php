<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Peminjaman Perangkat IT</title>
  </head>
  <body>
    <h1 class="text-center mb-4" >Peminjaman Perangkat IT</h1>

    <div class="container">
    <a href="/tambahpinjam" type="button" class="btn btn-success">Tambah</a>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Departemen</th>
      <th scope="col">Perangkat</th>
      <th scope="col">No Asset / Hostname</th>
      <th scope="col">Keperluan</th>
      <th scope="col">Foto</th>
      <th scope="col">Awal Pinjam</th>
      <th scope="col">Akhir Pinjam</th>
    </tr>
  </thead>
  <tbody>
  @php
    $no = 1;
  @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->nik }}</td>
      <td>{{ $row->notelpon }}</td>
      <td>{{ $row->departemen }}</td>
      <td>{{ $row->perangkat }}</td>
      <td>{{ $row->serialnumberhs }}</td>
      <td>{{ $row->keperluan }}</td>
      <td>
        <img src="{{ asset('fotopinjam/'.$row->foto) }}" alt="" style="width: 40px;" >
      </td>
      <td>{{ $row->created_at->diffForHumans() }}</td>
      <td>{{ $row->akhirpinjam }}</td>
      <td>
        <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-info">Edit</a>
        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Delete</a> 
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
      $('.delete').click(function(){
        var dailyid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
                  title: "Are you sure?",
                  text: "kamu akan menghapus data daily dengan nama "+nama+" ",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    window.location = "/delete/"+dailyid+""
                    swal("Poof! Your imaginary file has been deleted!", {
                      icon: "success",
                    });
                  } else {
                    swal("Your imaginary file is safe!");
                  }
                });
      });
                
  </script>
</html>