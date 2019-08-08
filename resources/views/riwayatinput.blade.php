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

<h2>Riwayat Input</h2>
<hr>
{{ csrf_field() }}

<form action="cari_input" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="Cari">
				</form>

<br>

<div class="panel">
	@if(Session::has('Sukses'))<div role="alert" class="alert alert-success">{{ Session::get('Sukses') }}</div>@endif
	<div class="panel-body">
	<table class="table table-bordered">
		<thead class="thead-dark"></thead>
		<tr>
			<th>Kode Input</th>
			<th>Barang</th>
			<th>Stok</th>
			<th>Satuan</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($barang as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->barang }}</td>
			<td>{{ $b->stok }}</td>
			<td>{{ $b->satuan }}</td>
			<td>{{ $b->created_at }}</td>
			<td>{{ $b->keterangan }}</td>
			<td>
				<a class="btn btn-danger ml-3" href="/hapusinput/{{$b->id}}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
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