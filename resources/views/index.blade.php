<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script>
        $(document).ready(function(){
            $("#successMessage").delay(2000).slideUp(300);
        });       
    </script>
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.add')}}">Add New Employee</a>
                    </li>
                  </ul>
                </div>
              </nav>
              @if (session()->has('flash.message'))
                <div class="alert alert-{{ session('flash.class') }}" id="successMessage">
                  {{ session('flash.message') }}
                </div>
              @endif
            <div class="container">
              <h1>Employee List</h1>
              <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">NIP</th>
                          <th scope="col">Name</th>
                          <th scope="col">Department</th>
                          <th scope="col">Position</th>
                          <th scope="col">Tempat Tanggal Lahir</th>
                          <th scope="col">No telepon</th>
                          <th scope="col">Email</th>
                          <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->nip}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->position->department->departmentName}}</td>
                                <td>{{$data->position->positionName}}</td>
                                <td>{{$data->tempatLahir}}, {{$data->tanggalLahir}}</td>
                                <td>{{$data->telepon}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('employee.edit',$data->id)}}" role="button">Edit</a>
                                    <form action="{{ route('employee.delete',$data->id)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">          
                                        @csrf  
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>      
            </div>
        <ul>
    </ul>
</body>
</html>