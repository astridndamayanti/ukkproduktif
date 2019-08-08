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
<h3 align="center">ONLINE SHOP</h3>
<h4 align="center">Bogor Timur, Jawa Barat</h4>
<table class="table table-borderless">
	{{ csrf_field() }}
	@php
			$no = 1;
			@endphp
			@foreach($transaksi as $b)
		<tr>
			<th>Nama Pemesan: {{$b->atas_nama}}</th>
		</tr>
		<tr>
			<th>Alamat Pengiriman: {{$b->alamat}}</th>
		</tr>
		<tr>
			<th>No. Telp : {{$b->no_tlp}}</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Kode Transaksi</td>
			<td>Barang</td>
			<td>Jumlah</td>
			<td>Harga</td>
			<td>Total Satuan</td>
			<td>Tanggal Pemesanan</td>
		</tr>
		<tr>
			<td>{{$b->id}}</td>
			<td>{{$b->barang}}</td>
			<td>{{$b->jumlah}}</td>
			<td>{{$b->harga}}</td>
			<td>{{$b->total_satuan}}</td>
			<td>{{$b->tanggal}}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Total: {{ $b->total}}</td>
			<td></td>
		</tr>
	</tbody>
	</table>
	<h6 align="center">Terima Kasih</h6>
	@endforeach
</div>
</div>
</div>
</body>

</html>

