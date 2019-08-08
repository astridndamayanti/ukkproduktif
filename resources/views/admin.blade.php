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
    <link rel="stylesheet" href="/css/chartist-custom.css"> <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<link rel="stylesheet" type="text/css" href="{!! asset('assets/DataTables/datatables.css') !!}">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</head>
<body>

<!-- <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <H5 class="text-info" href="#"><i class="fa fa-leaf" aria-hidden="true"></i>&nbsp; PBP ONLINE</H5>
      </div>

    </nav> -->


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
      <a class="nav-item nav-link active text-white" href="#"><i class="fas fa-user-shield"></i>&nbsp; {{auth()->user()->name}}<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>


    <br>

<div class="container">

<h2>Form Barang</h2>
<hr>

<table>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Tambah Data Barang
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">

	<div class="panel">

<br>
<form action="/store" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	
	<table class="table table-borderless" style="width: 600px">
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="barang" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><select class="form form-control" style="width: 600px" name="kategori" required autocomplete="off">
				@foreach($kategori as $g)
				<option></option>
				<option value="{{ $g->kategori }}">{{ $g->kategori }}</option>
				@endforeach
			</select></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="number" class="form form-control" style="width: 600px" name="stok" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><select class="form form-control" style="width: 600px" name="satuan" required autocomplete="off">
				@foreach($satuan as $s)
				<option></option>
				<option value="{{ $s->satuan }}">{{ $s->satuan }}</option>
				@endforeach
			</select> </td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" class="form form-control" style="width: 600px" name="harga" required autocomplete="off"></td>
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
</td>


<td>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#formkategori">
 Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="formkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">

	<div class="panel">

<br>
<form action="/kategori" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	
	<table class="table table-borderless" style="width: 600px">
		<tr>
			<td>Kategori</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="kategori" required autocomplete="off"></td>
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
        <button type="button" class="btn btn-secondary" href="/admin">Close</button>
      </div>
    </div>
  </div>
</div>
</td>

<td>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#formsatuan">
 Tambah Satuan
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="formsatuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Satuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">

	<div class="panel">

<br>
<form action="/satuan" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	
	<table class="table table-borderless" style="width: 600px">
		<tr>
			<td>Satuan</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="satuan" required autocomplete="off"></td>
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
        <button type="button" class="btn btn-secondary" href="/admin">Close</button>
      </div>
    </div>
  </div>
</div>
</td>



</table>

<br>


@if(Session::has('Sukses'))<div role="alert" class="alert alert-success">{{ Session::get('Sukses') }}</div>@endif
@if(Session::has('update'))<div role="alert" class="alert alert-success">{{ Session::get('update') }}</div>@endif
@if(Session::has('tambah'))<div role="alert" class="alert alert-success">{{ Session::get('tambah') }}</div>@endif
@if(Session::has('input'))<div role="alert" class="alert alert-success">{{ Session::get('input') }}</div>@endif


<form action="cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" value="{{ old('cari') }}" autocomplete="off">
					<input class="btn btn-primary ml-3" type="submit" value="Cari">
				</form>

<br>



<div class="panel" style="width: 1400px">
	<div class="panel-body">
	<table class="table table-bordered">
		<thead class="thead-dark"></thead>
		<tr>
			<th>Kode Barang</th>
			<th>Barang</th>
			<th>Kategori</th>
			<th>Stok</th>
			<th>Satuan</th>
			<th>Harga</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($barang as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->barang }}</td>
			<td>{{ $b->kategori }}</td>
			<td>{{ $b->stok }}</td>
			<td>{{ $b->satuan }}</td>
			<td>Rp. {{ $b->harga}}</td>
			<td>
				<a class="btn btn-success ml-3" href="/edit/{{ $b->id }}">Edit</a>
				<a class="btn btn-warning ml-3" href="/input/{{ $b->id}}">
 				Input
				</a>
				<a class="btn btn-danger ml-3" href="/hapus/{{ $b->id }}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	{{ $barang->links() }}

	
</div>
</div>

<div class="panel" style="width: 1400px">
	<div class="panel-body">
	<table class="table table-bordered">
		<thead class="thead-dark"></thead>
		<tr>
			<th>Kode Kategori</th>
			<th>Kategori</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($kategori as $g)
		<tr>
			<td>{{ $g->id }}</td>
			<td>{{ $g->kategori }}</td>
			<td>
				<a class="btn btn-danger ml-3" href="/hapuskategori/{{ $g->id }}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	{{ $kategori->links() }}

	
</div>
</div>


<div class="panel" style="width: 1400px">
	<div class="panel-body">
	<table class="table table-bordered">
		<thead class="thead-dark"></thead>
		<tr>
			<th>Kode Satuan</th>
			<th>Satuan</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($satuan as $s)
		<tr>
			<td>{{ $s->id }}</td>
			<td>{{ $s->satuan }}</td>
			<td>
				<a class="btn btn-danger ml-3" href="/hapussatuan/{{ $s->id }}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	{{ $satuan->links() }}

	
</div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>