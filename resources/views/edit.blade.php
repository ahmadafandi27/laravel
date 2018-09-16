<html>
  <head>
    <meta charset="utf-8">
    <title> EDIT </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Update Karyawan</h2><br  />
        <form method="post" action="{{action('EmployeeController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">ID:</label>
            <input type="text" class="form-control" name="id" value="{{$employee->id}}">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{$employee->nama}}">
            <label for="name">Alamat:</label>
            <input type="text" class="form-control" name="alamat" value="{{$employee->alamat}}">
            <label for="name">Jabatan:</label>
            <input type="text" class="form-control" name="jabatan" value="{{$employee->jabatan}}">
            <label for="name">Hobby:</label>
            <input type="text" class="form-control" name="hobby" value="{{$employee->hobby}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>