
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


<div class="container" style="width: 900px">
<h2 align="center">Check Out</h2>
<a href="/keranjang"  class="btn btn-success"><i class="fas fa-home"></i> <span>Kembali</span></a>
<br>
<br>
<div class="row">
      <div class="col-md-12">

  <div class="panel">
  <div class="panel-body">
@foreach($keranjang as $k)
<form action="/updatetransaksi/{{$k->nama}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
    <!-- <table class="table table-borderless">
    <tr>
      <td>Barang</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->barang }}" name="barang"></td>
    </tr>
    <div class="form-group">
    <tr>
      <td>Jumlah</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->jumlah }}" name="jumlah"></td>
    </tr>
    </div>
      <td>Total Satuan</td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->total_satuan }}" name="total_satuan"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->satuan }}" name="satuan" hidden="on"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="text" class="form-control" style="width:600px" value="{{ $k->kategori }}" name="kategori" hidden="on" ></td>
    </tr>

  </table> -->
  @endforeach
  <table class="table">
  <tr>
  <td>Barang</td>
  <td>Jumlah</td>
  <td>Total Satuan</td>
  </tr>
  <tr>
  @foreach($keranjang as $k)
  <tr>
  <td>{{ $k->barang }}</td>
  <td>{{ $k->jumlah }}</td>
  <td>Rp. {{ number_format($k->total_satuan) }}</td>
  @endforeach
  </tr>
  </table>
  <table class="table table-borderless">
  <thead class="thead-dark"></thead>
    <tr>
      <th> Total</th>
    </tr>
    <tr>
      <td>Rp.</td>
      <td><input type="text" class="form-control" style="width:600px" value= {{number_format(array_sum($total))}} name="total" readonly></td>
    </tr>
  </table>

<table class="table table-borderless">
    <tr>
      <td>Nama Pemesan</td>
      <td><input type="text" class="form-control" style="width:600px" name="atas_nama" required></td>
    </tr>
    <div class="form-group">
    <tr>
      <td>Alamat</td>
      <td><input type="text" class="form-control" style="width:600px" name="alamat" required></td>
    </tr>
    </div>
      <td>No Telp</td>
      <td><input type="text" class="form-control" style="width:600px" name="no_tlp" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
    </tr>
  </table>

</form>

</div>
</div>
</div>
</div>

</body>   
</html>