<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapel</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        @if (Session::has('success'))
                            <p class="alert alert-success">{{Session::get('success')}}</p>
                        @endif
                        <h6>Mapel</h6>
                        <a class="btn btn-success" href="{{url('mapel/create')}}">Tambah Data +</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr style="background-color: aqua">
                                        <th>
                                            kode mapel</th>
                                        <th >
                                            nama mapel</th>
                                        <th>
                                            kode Jurusan</th>
                                        <th>
                                            nama Jurusan</th>
                                        <th>
                                            Value</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($datas as $key => $value)
                                    <tr>
                                        <td>{{$value->kode_mapel}}</td>
                                        <td>{{$value->nama_mapel}}</td>
                                        <td>{{$value->kode_jurusan}}</td>
                                        <td>{{$value->nama_jurusan}}</td>
                                        <td>
                                        <a href="{{url('mapel/'.$value->id.'/edit')}}" class="btn btn-primary">Edit</a>

                                        <form action="{{url('mapel/'.$value->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Data Akan Dihapus?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger ">Delete</button>
                                        </form>
                                    </td>
                                        @endforeach
                                </thead>
                                <tbody>                                
                           </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>