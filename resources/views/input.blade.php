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
	<div class="panel">

@foreach($barang as $b)
<form action="/inputbarang/{{$b->id}}" method="post" >
	{{ csrf_field() }}
	
<h2 align="center">Form Input</h2>

<a href="/admin"  class="btn btn-success"><i class="fas fa-archive"></i> <span>Kembali</span></a>
<br>
<br>

	<table class="table table-borderless">
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="barang" class="form form-control" style="width: 600px" value="{{ $b->barang }}" required autocomplete="off" ></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="stok" class="form form-control" style="width: 600px" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><input type="text" name="satuan" class="form form-control" style="width: 300px" value="{{ $b->satuan }}" required autocomplete="off" ></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" class="form form-control" style="width: 580px" name="created_at" required autocomplete="off"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><input type="text" class="form form-control" style="width: 580px" name="keterangan"  autocomplete="off"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  class="btn btn-primary"  value="Simpan Data"></td>
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