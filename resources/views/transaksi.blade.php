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

<div class="container">


<h2>Riwayat Transaksi</h2>
<hr>

<form action="sortir" method="GET" class="form-inline">
          <input class="form-control" type="text" name="cari" value="{{ old('cari') }}">
          <input class="btn btn-primary ml-3" type="submit" value="Cari">
        </form>
<br>

  <div class="row">
      <div class="col-md-12">


  <div class="panel" style="width: 1400px">

  <br>
  
  <div class="panel-body">
  <table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>No</th>
      <th>Kode Transaksi</th>
      <th>Nama</th>
      <th>Barang</th>
      <th>Jumlah</th>
      <th>Satuan</th>
      <th>Kategori</th>
      <th>Total</th>
      <th>Atas Nama</th>
      <th>Alamat</th>
      <th>No Telp</th>
      <th>Tanggal</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      @php
      $no = 1;
      @endphp
      @foreach($transaksi as $t)
      <td>{{ $no++ }}</td>
      <td>{{ $t->id }}</td>
      <td>{{ $t->nama }}</td>
      <td>{{ $t->barang }}</td>
      <td>{{ $t->jumlah }}</td>
      <td>{{ $t->satuan }}</td>
      <td>{{ $t->kategori }}</td>
      <td>Rp. {{ $t->total }}</td>
      <td>{{ $t->atas_nama }}</td>
      <td>{{ $t->alamat }}</td>
      <td>{{ $t->no_tlp }}</td>
      <td>{{ $t->tanggal }}</td>
      <td>
        <a class="btn btn-danger ml-3" href="/hapustransaksi/{{ $t->id }}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
      </td>
    </tr>
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