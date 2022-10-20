<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc; height=100%;">
  <div class="container py-5 h-100%">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Register</h3>

            <form action="/registeruser" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                  <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Posisi</label>
                  <select class="form-select" name="role" aria-label="Default select example">
                    <option selected>Pilih Posisi</option>
                    <option value="user">User</option>
                    <option value="Admin Sales">Admin Sales</option>
                    <option value="Leader Sales">Leader Sales</option>
                    <option value="Supervisor Sales">Supervisor Sales</option>
                    <option value="Admin Production">Admin Production</option>
                    <option value="Leader Production">Leader Production</option>
                    <option value="Supervisor Production">Supervisor Production</option>
                    <option value="Admin Exim">Admin Exim</option>
                    <option value="Leader Exim">Leader Exim</option>
                    <option value="Supervisor Exim">Supervisor Exim</option>
                    <option value="Admin Outgoing">Admin Outgoing</option>
                    <option value="Leader Outgoing">Leader Outgoing</option>
                    <option value="Supervisor Outgoing">Supervisor Outgoing</option>
                    <option value="BC">BC</option>
                    <option value="Super Admin">Super Admin</option>
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                    <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            


          </div>
        </div>
      </div>
    </div>
  </div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>