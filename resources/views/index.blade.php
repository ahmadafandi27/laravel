<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Hobby</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 
      @foreach($employees as $employee)
      <tr>
        <td>{{$employee['id']}}</td>
        <td>{{$employee['nama']}}</td>
        <td>{{$employee['alamat']}}</td>
        <td>{{$employee['jabatan']}}</td>
        <td>{{$employee['hobby']}}</td>
        
        <td align = "right"><a href="{{action('EmployeeController@edit', $employee['id'])}}" class="btn btn-warning">Edit</a></td>
        <td align="left">
          <form action="{{action('EmployeeController@destroy', $employee['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
     <td align="right"><a href="{{action('EmployeeController@create')}}" class="btn btn-primary">New</a></td>
     </br>
  </div>
  </body>
</html>
