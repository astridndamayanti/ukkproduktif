<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  	<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<script type="text/javascript" src="/js/app.js"></script>
  	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/css/chartist-custom.css">
  	<link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <br>

<div class="container">

	<div class="panel">

<br>
<form action="/store" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	
	<table class="table">
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="barang" required></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><select class="form form-control" style="width: 600px" name="kategori" required>
				<option></option>
				<option value="Toiletris">Toiletris</option>
				<option value="Chemical">Chemical</option>
			</select></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="number" class="form form-control" style="width: 600px" name="stok" required></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><select class="form form-control" style="width: 600px" name="satuan" required>
				<option></option>
				<option value="PCS">PCS</option>
				<option value="BOX">BOX</option>
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

</body>
</html>