<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                   
                        <h6>Jurusan</h6>
                        <a class="btn btn-success" href="{{url('jurusan/create')}}">Tambah Data +</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr style="background-color: aqua">
                                        <th >
                                            Kode Jurusan</th>
                                        <th>
                                            Nama Jurusan</th>
                                        <th>
                                            Value</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($datas as $key => $value)
                                    <tr>
                                        <td>{{$value->kode_jurusan}}</td>
                                        <td>{{$value->nama_jurusan}}</td>
                                        <td>{{$value->tingkat}}</td>
                                        <td>
                                        <a href="{{url('jurusan/'.$value->id.'/edit')}}" class="btn btn-primary">Edit</a>

                                        <form action="{{url('jurusan/'.$value->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Data Akan Dihapus?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger ">Delete</button>
                                        </form>
                                    </td>
                                        @endforeach
                                </thead>
                                <tbody>
                                   

                                               

                                        {{-- <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td> --}}
                                    

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