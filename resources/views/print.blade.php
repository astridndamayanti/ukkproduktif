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
<table class="table table-bordered">
	{{ csrf_field() }}
		<tr>
			<th>No</th>
			<th>Barang</th>
			<th>On Hand</th>
			<th>Fisik</th>
			<th>Selisih</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			@php
			$no = 1;
			@endphp
			@foreach($barang as $b)
			<td>{{ $no++ }}</td>
			<td>{{ $b->barang }}</td>
			<td>{{ $b->stok }}</td>
			<td></td>
			<td></td>
			
		</tr>
		@endforeach
	</tbody>
	</table>
</div>


<script>
    window.print();
</script>

</body>
</html>

