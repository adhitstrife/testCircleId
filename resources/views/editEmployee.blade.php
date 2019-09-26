<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                      <a class="nav-link" href="#">Add New Employee</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
        <div class="container">
            <h1>Add New employee</h1>

            <form action="{{ route('employee.update') }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">            
              <div class="form-group">
                  <input type="hidden" name="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="email" name="nama" value="{{$data->nama}}">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <select class="custom-select" name="position">
                        <option selected>Open this select position</option>
                        @foreach ($datas as $data)
                          <optgroup label="{{$data->departmentName }}">
                              @foreach ($data->position as $position)
                                <option value="{{ $position->id }}">{{ $position->positionName }}</option>
                              @endforeach
                          </optgroup>
                        @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="tempatLahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="email" name="tempatlahir" value="{{$data->tempatLahir}}">
                </div>
                <div class="form-group">
                  <label for="tanggalLahir">Tempat Lahir</label>
                  <input type="date" class="form-control" id="nama" aria-describedby="email" name="tanggallahir" value="{{$data->tanggalLahir}}">
                </div>
                <div class="form-group">
                  <label for="telepon">Phone Number</label>
                  <input type="number" class="form-control" id="nama" aria-describedby="email" name="telepon" value="{{$data->telepon}}">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="nama" aria-describedby="email" name="email" value="{{$data->email}}">
                  </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
</body>
</html>