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
    <h1 class="text-center mb-4" >Tambah Data Peminjaman Perangkat IT</h1>

    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
            <div class="card-body">
             <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                <input type="text" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Departemen</label>
                <select class="form-select" name="departemen" aria-label="Default select example">
                  <option selected>Departemen</option>
                  <option value="SHE">SHE</option>
                  <option value="HR">HR</option>
                  <option value="FINANCE">FINANCE</option>
                  <option value="LOGISTIK">LOGISTIK</option>
                  <option value="PLANT">PLANT</option>
                  <option value="FS">FS</option>
                  <option value="IER">IER</option>
                  <option value="IT">IT</option>
                  <option value="ENG">ENG</option>
                  <option value="MCD">MCD</option>
                  <option value="BE">BE</option>
                  <option value="PRD">PRD</option>
                  <option value="LCD">LCD</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Perangkat</label>
                <input type="text" name="perangkat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hostname</label>
                <input type="text" name="serialnumberhs" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keperluan</label>
                <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto Evident</label>
                <input type="file" name="foto" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Akhir Pinjam</label>
                <input type="date" name="akhirpinjam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>