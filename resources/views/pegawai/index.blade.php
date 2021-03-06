<!doctype html>
<html lang="en">
 <head>
 <! -- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
 <! -- Bootstrap core CSS -->
 <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
 <title>Tampil Data Pegawai</title>
 </head>
 <body>
 <div class="container">
 <div class="card mt-5">
 <div class="card-header text-center">
 Data Pegawai
 </div>
 <div class="card-body">
 <a href="/pegawai/tambah" class="btn btn-primary">Input
Pegawai Baru</a>
 <br>
 <br>
 <table class="table table-bordered table-hover tablestriped">
 <thead>
 <tr>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 @foreach($pegawai as $p)
 <tr>
 <td>{{ $p->nama }} </td>
 <td>{{ $p->alamat }} </td>
 <td>
 <a href="/pegawai/edit/{{ $p->id }}"
class="btn btn-warning">Edit</a>
 <a href="/pegawai/hapus/{{ $p->id }}"
class="btn btn-danger">Hapus</a>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <br>
 {{ $pegawai->links() }}
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