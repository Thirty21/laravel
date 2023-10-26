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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Data</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{url('mapel')}}" method="POST" class="form-control">
                                @csrf
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kode mapel </label>
                                        <input class="form-control" type="text" value="" name="kode_mapel">
                                        @foreach ($errors->get('kode_mapel') as $msg)
                                            <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">nama mapel</label>
                                        <input class="form-control" type="text" value="" name="nama_mapel">
                                        @foreach ($errors->get('nama_mapel') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kode juran</label>
                                        <input class="form-control" type="text" name="kode_jurusan">
                                        @foreach ($errors->get('kode_jurusan') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                    @endforeach
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">nama juruan</label>
                                        <input class="form-control" type="text" name="nama_jurusan">
                                        @foreach ($errors->get('nama_jurusan') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <button class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>