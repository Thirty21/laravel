
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
                            <form action="{{url ('jurusan/'.$model->id)}}" method="POST" class="form-control">
                                @method('patch')
                                @csrf
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kode jurusan </label>
                                        <input class="form-control" type="text" value="{{$model->kode_jurusan}}" name="kode_jurusan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama jurusan</label>
                                        <input class="form-control" type="text" value="{{$model->nama_jurusan}}" name="nama_jurusan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tingkat</label>
                                        <select class="form-control" type="text" value="{{$model->tingkat}}" name="tingkat">
                                        <option>X</option>
                                        <option>XI</option>
                                        <option>XII</option>
                                        </select>
                                    </div>
                                </div>
                                

                                <button class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
