
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


<div class="container">
@foreach($barang as $b)
<form action="/pesan" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
      <div class="col-md-12">

<h2 align="center">Form Order</h2>

<a href="/home"  class="btn btn-success"><i class="fas fa-home"></i> <span>Kembali</span></a>
<br>
<br>

  <div class="panel">
  <div class="panel-body">
    <table class="table table-borderless">
    <tr>
      <td>Barang</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $b->barang }}" name="barang"></td>
    </tr>
    <div class="form-group">
    <tr>
      <td>Jumlah</td>
      <td><input type="number" class="form-control" style="width:600px" name="jumlah" required autocomplete="off">
        Jumlah Tersedia : {{ $b->stok }}</td>
    </tr>
    </div>
    <tr>
      <td>Harga / Satuan</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $b->harga }}" name="harga" readonly></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td><input type="date" class="form-control" style="width:600px" name="tanggal" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $b->satuan }}" name="satuan" hidden="on"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $b->kategori }}" name="kategori" hidden="on" ></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
    </tr>
  </table>
</form>

@endforeach

</div>
</div>
</div>
</div>

</body>   
</html>