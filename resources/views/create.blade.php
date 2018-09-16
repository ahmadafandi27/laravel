<html>
  <head>
    <meta charset="utf-8">
    <title>Nyoba Crud</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Input Karyawan</h2><br/>
      <form method="post" action="{{url('employees')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nama</label>
            <input type="text" class="form-control" name="nama">
            <label for="Name">Alamat</label>
            <input type="text" class="form-control" name="alamat">
            <label for="Name">Jabatan</label>
            <input type="text" class="form-control" name="jabatan">
            <label for="Name">Hobby</label>
            <input type="text" class="form-control" name="hobby">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="cancel" class="btn btn-warning">Batal</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>