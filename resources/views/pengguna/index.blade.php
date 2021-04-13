<!DOCTYPE html>
<html>
<head>
 <title>Relasi One To One</title>
 <! -- Bootstrap core CSS -->
 <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
 <div class="container">
 <div class="card mt-5">
 <div class="card-body">
 <h1 class="text-center my-4">Eloquent: One To One
Relationship</h1>
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>Pengguna</th>
 <th>Nomor Telepon</th>
 </tr>
 </thead>
 <tbody>
 @foreach($pengguna as $p)
 <tr>
 <td>{{ $p->nama}} </td>
 <td>{{ $p->telepon->nomor_telepon}} </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
</body>
</html>