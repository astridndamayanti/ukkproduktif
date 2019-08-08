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
<br>



<div class="container">	
@foreach($barang as $b)
<form action="/update/{{$b->id}}" method="post" >
	{{ csrf_field() }}

<h2 align="center">Form Edit</h2>
<a href="/admin"  class="btn btn-success"><i class="fas fa-archive"></i> <span>Kembali</span></a>
<br>
<br>

	<div class="panel">
	<table class="table table-borderless">
		<tr>
			<td>Kode Barang</td>
			<td><input type="text" name="id" class="form form-control" style="width: 600px" value="{{ $b->id }}" ></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="barang" class="form form-control" style="width: 600px" value="{{ $b->barang }}" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input type="text" name="kategori" class="form form-control" style="width: 600px" value="{{ $b->kategori }}" required autocomplete="off" ></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="number" name="stok" class="form form-control" style="width: 600px" value="{{ $b->stok }}" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><input type="text" class="form form-control" style="width: 300px" value="{{ $b->satuan }}" required autocomplete="off" ></td>
		</tr>
		<tr>
			<td></td>
			<td><select class="form form-control" style="width: 300px" name="satuan" required autocomplete="off">
				<option value="{{ $b->satuan }}">UBAH SATUAN</option>
				@foreach($satuan as $s)
				<option></option>
				<option value="{{ $s->satuan }}">{{ $s->satuan }}</option>
				@endforeach
			</select> </td>
		</tr>
		<tr>
			<td><input type="submit" class="btn btn-warning" value="Update"></td>
		</tr>
	</table>
	
</form>
@endforeach

</div>
</div>

<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019. All Rights Reserved.</p>
			</div>
		</footer>
	</div>

</body>
</html>