
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

@foreach($transaksi as $k)
<form action="/updatepe/{{$k->id}}" method="post">
  {{ csrf_field() }}

<h2 align="center">Form Edit Pesanan</h2>

<a href="/admin"  class="btn btn-success"><i class="fas fa-home"></i> <span>Kembali</span></a>
<br>
<br>

  <div class="panel">
  <div class="panel-body">
    
    <table class="table">
    <tr>
      <td>Kode Pesanan</td>
      <td><input type="text" name="id" class="form form-control" style="width: 600px" value="{{ $k->id }}" disabled></td>
    </tr>
    <tr>
      <td>Atas Nama</td>
      <td><input type="text" name="nama" class="form form-control" style="width: 600px" value="{{ $k->atas_nama }}"></td>
    </tr>
    <tr>
      <td>Nama Barang</td>
      <td><input type="text" name="barang" class="form form-control" style="width: 600px" value="{{ $k->barang }}"></td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td><input type="number" name="stok" class="form form-control" style="width: 600px" value="{{ $k->jumlah }}"></td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td><input type="text" name="satuan" class="form form-control" style="width: 600px" value="{{ $k->satuan }}"></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td><input type="text" name="kategori" class="form form-control" style="width: 600px" value="{{ $k->kategori }}"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" class="form form-control" style="width: 600px" value="{{ $k->alamat }}"></td>
    </tr>
    <tr>
      <td>No. Telp</td>
      <td><input type="text" name="no_tlp" class="form form-control" style="width: 600px" value="{{ $k->no_tlp }}"></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><input type="text" name="total" class="form form-control" style="width: 600px" value="{{ $k->total }}"></td>
    </tr>
    <tr>
      <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
    </tr>
  </table>

</form>
@endforeach

</div>
</div>
</div>

</body>   
</html>