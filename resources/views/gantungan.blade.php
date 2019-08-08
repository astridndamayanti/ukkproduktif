
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
@foreach($keranjang as $k)
<form action="/gantung" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
      <div class="col-md-12">

<h2 align="center">Form Gantungan</h2>

<a href="/pesanan"  class="btn btn-success"><i class="fas fa-home"></i> <span>Kembali</span></a>
<br>
<br>

  <div class="panel">
  <div class="panel-body">
    <table class="table">
    <tr>
      <td>Kode Transaksi</td>
      <td><input type="text" class="form-control" style="width:600px" name="transaksi" value="{{ $k->id }}" ></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" class="form-control" style="width:600px" name="nama" value="{{ $k->nama }}" disabled></td>
    </tr>
    <tr>
      <td>Departemen</td>
      <td><input type="text" class="form-control" style="width:600px" name="departemen" value="{{ $k->departemen }}" disabled></td>
    </tr>
    <tr>
      <td>Barang</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->barang }}" name="barang"></td>
    </tr>
    <div class="form-group">
    <tr>
      <td>Jumlah Permintaan</td>
      <td><input type="number" class="form-control" style="width:600px" name="jumlah" value="{{ $k->jumlah }}" required autocomplete="off">
    </tr>
    </div>
    <tr>
      <td>Jumlah Dipenuhi</td>
      <td><input type="number" class="form-control" style="width:600px" value="{{ $k->jmlpenuhi }}" name="jml" ></td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->satuan }}" name="satuan" ></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->kategori }}" name="kategori" ></td>
    </tr>
    <tr>
      <td>Tanggal Pemesanan</td>
      <td><input type="date" class="form-control" style="width:600px" name="tanggal" value="{{ $k->tanggal }}"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" class="form-control" style="width:600px" name="status" value="Not Completed" disabled=""></td>
    </tr>
    <tr>
    <tr>
      <td>Gantungan</td>
      <td><input type="number" class="form-control" style="width:600px" name="gantungan" value="{{ $k->gantungan }}" ></td>
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