<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/chartist-custom.css">
  <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
  <h6 class="navbar-brand success text-white" href="#"><i class="fas fa-leaf"></i> ONLINE SHOP</h6>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white " href="/home" style=""><i class="fas fa-home"></i>&nbsp; Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href="/admin"><i class="fas fa-boxes"></i>&nbsp; Form Barang</a>
      <a class="nav-item nav-link text-white" href="/riwayatinput"><i class="fas fa-history"></i>&nbsp; Riwayat Input</a>
      <a class="nav-item nav-link text-white" href="/user"><i class="fas fa-users-cog"></i>&nbsp; Form Pengguna</a>
      <a class="nav-item nav-link text-white" href="/pesanan"><i class="fas fa-shopping-cart"></i>&nbsp; Form Pesanan</a>
      <a class="nav-item nav-link text-white" href="/transaksi"><i class="fas fa-luggage-cart"></i>&nbsp; Riwayat Transaksi</a>
      <a class="nav-item nav-link text-white" href="/logout"><i class="fas fa-sign-out-alt"></i>&nbsp; Log Out</a>
      <a class="nav-item nav-link active text-white" href="#"><i class="fas fa-user-shield"></i>&nbsp; {{auth()->user()->name}} - {{auth()->user()->dept}}<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
    <br>

<div class="container">

<h2>Form Pengguna</h2>
<hr>


<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#inputuser">
 Tambahkan User
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="inputuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
  <div class="panel">
<br>
<form action="/store_user" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  
  <table class="table" style="width: 550px">
    <tr>
      <td>Nama Pengguna</td>
      <td><input type="text" class="form form-control" style="width: 550px" name="name" required autocomplete="off"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" class="form form-control" style="width: 550px" name="password" required autocomplete="off"></td>
    </tr>
    <tr>
      <td>Level</td>
      <td><select class="form form-control" style="width: 550px" name="role" required autocomplete="off">
        <option></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>  
      </select> </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit"  class="btn btn-primary"  value="Simpan Data"></td>
    </tr>
  </table>
  
</form>

</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<form action="cari_user" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="Cari">
				</form>

<br>

<div class="panel">
	<div class="panel-body">
	<table class="table table-bordered">
		<thead class="thead-dark"></thead>
		<tr>
			<th>Nama</th>
			<th>Password</th>
			<th>Level</th>
      <th>Opsi</th>
		</tr>
		</thead>
		<tbody>
    @foreach($user as $u)
    <tr>
    <td>{{ $u->name }}</td>
    <td>{{ $u->password }}</td>
    <td>{{ $u->role }}</td>
    <td>
        <a class="btn btn-danger ml-3" href="/hapus_user/{{ $u->name}}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
    </td>
		</tr>
    @endforeach
	</tbody>
	</table>

</div>
</div>
</div>


</body>
</html>