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

<div class="container" >

<h2>Form Pesanan</h2>
<hr>

<form action="cari_pesanan" method="GET" class="form-inline">
          <input class="form-control" type="text" name="cari" value="{{ old('cari') }}">
          <input class="btn btn-primary ml-3" type="submit" value="Cari">
        </form>
<br>
@if(Session::has('pesan'))<div role="alert" class="alert alert-warning" style="width: 1300px">{{ Session::get('pesan') }}</div>@endif
  <div class="row">
      <div class="col-md-12">

  




</div>
</div>

<div class="panel panel-warning" style="width: 1300px">
 <div class="panel-heading">
      Pesanan Belum di Approved
  </div>
  <div class="panel-body">
  <table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>Kode Transaksi</th>
      <th>Nama</th>
      <th>Barang</th>
      <th>Jumlah</th>
      <th>Satuan</th>
      <th>Tanggal Permintaan</th>
      <th>Total</th>
      <th>Atas Nama</th>
      <th>Alamat</th>
      <th>No Telp</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $t)
    <tr>
    @if($t->status == "Waiting Approved")
      <td>{{ $t->id }}</td>
      <td>{{ $t->nama }}</td>
      <td>{{ $t->barang }}</td>
      <td>{{ $t->jumlah }}</td>
      <td>{{ $t->satuan }}</td>
      <td>{{ $t->tanggal }}</td>
      <td>Rp. {{ $t->total }}</td>
      <td>{{ $t->atas_nama }}</td>
      <td>{{ $t->alamat }}</td>
      <td>{{ $t->no_tlp }}</td>
      <td>
        <a class="btn btn-danger ml-3" href="/hapuspesanan/{{ $t->id }}" onclick="return confirm('Yakin Mau Dihapus?')"><i class="fas fa-trash"></i></a>
        <a class="btn btn-success ml-3" href="/editpe/{{ $t->id }}"><i class="fas fa-edit"></i></a>
         <a class="btn btn-warning ml-3" href="/serahkan/{{ $t->id }}"><i class="far fa-thumbs-up"></i></a>
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
  </table>
  {{ $transaksi->links() }}



</div>
</div>


</div>
</div>
</div>


</body>
</html>