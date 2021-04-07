<!doctype html>
<html lang="en">
 <head>
 <! -- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
 <! -- Bootstrap core CSS -->
 <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
 <title>Tambah Data Pegawai</title>
 </head>
 <body>
 <div class="container">
 <div class="card mt-5">
 <div class="card-header text-center">
 Tambah Data Pegawai
 </div>
 <div class="card-body">
 <a href="/pegawai" class="btn btn-primary">Kembali</a>
 <br>
 <br>
 <form method="post" action="/pegawai/store">
 {{ csrf_field() }}
 <div class="form-group">
 <label>Nama</label>
 <input class="form-control" type="text" name="nama"
placeholder="Nama Pegawai..">
 @if($errors->has('nama'))
 <div class="text-danger">
 {{ $error->first('nama') }}
 </div>
 @endif
 </div>
 <div class="form-group">
 <label>Alamat</label>
 <textarea name="alamat" class="form-control"
placeholder="Alamat Pegawai.."></textarea>
 @if($errors->has('alamat'))
 <div class="text-danger">
 {{ $errors->first('alamat') }}
 </div>
 @endif
 </div>
 <div class="form-group">
 <input type="submit" value="Simpan" class="btn btnsuccess">
 </div>
 </form>
 </div>
 </div>
 </div>
 <! -- Bootstrap core JavaScript -->
 <script src="{{ asset('/jquery/jquery.min.js')
}}"></script>
 <script src="{{
asset('/js/bootstrap.bundle.min.js') }}"></script>
 </body>
</html>