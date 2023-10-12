<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./style/style.css')}}">
</head>
<body>
    <form action="{{url('jurusan')}}" method="POST">
      @csrf
        <div class="tengah">
          <label for="" class="form-label">kode jurusan</label>
          <br>
          <input type="text" name="kode_jurusan">
        </div>
        <br>
        <div>
          <label for="">Nama jurusan</label>
          <br>
          <input type="text" name="nama_jurusan">
        </div>
      
        <div class="mb-3 form-check">
          <label class="form-check-label" for="exampleCheck1">tingkatan</label>
          <select name="tingkat">
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>