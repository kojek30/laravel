<!DOCTYPE html>
<html>
<head>
 <title>Form Data Member</title>
 <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
 <style>
 body {
 margin-top: 15px;
 }
 </style>
</head>
<body>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
 <div class="card-body">
 <h3>Tambah Data Member</h3>
 <a href="/member/" class="btn btnprimary">Kembali</a>
 <br>
 <br>
 @if(count($errors) > 0)
 <div class="alert alert-danger">
 <ul>
 @foreach($errors->all() as $error)
 <li>{{ $error }} </li>
 @endforeach
 </ul>
 </div>
  @endif
 <form action="/member/store" method="post">
 {{ csrf_field() }}
 <div class="form-group">
 <label>Nama</label>
 <input class="form-control" type="text"
name="nama">
 </div>
 <div class="form-group">
 <label>Pekerjaan</label>
  <input class="form-control" type="text"
name="pekerjaan">
 </div>
 <div class="form-group">
 <label>Umur</label>
 <input class="form-control" type="text"
name="umur">
 </div>
 <div class="form-group">
 <label>Alamat</label>
 <textarea class="form-control"
name="alamat"></textarea>
 </div>
 <div class="form-group">
 <input class="btn btn-primary"
type="submit" value="Simpan">
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
</body>
</html>
