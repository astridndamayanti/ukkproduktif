<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<form>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <H4 class="text-info" href="#"><i class="fa fa-leaf" aria-hidden="true"></i>&nbsp; ONLINE SHOP</H4>
      </div>

    </nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      {{csrf_field()}}
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
           <span class="icon"><i class="fa fa-user"></i></span><span>&nbsp; {{auth()->user()->name}}</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="lnr lnr-home"></i> <span>Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/keranjang">
              <i class="lnr lnr-cart"></i> <span>Keranjang</span>
            </a>
          </li>
          @if(auth()->user()->role == "admin")
          <li class="nav-item">
            <a class="nav-link" href="/admin">
              <i class="lnr lnr-alarm"></i> <span>Admin</span>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/logout">
              <i class="lnr lnr-exit"></i></span>
              Logout
            </a>
          </li>
          
    </nav>
    <br>


        <br>

  <div class="panel" style="width: 1100px">
        <div class="panel-heading" align="center">
          <h3 class="panel-title">Keranjang Anda</h3>
          <hr>
        </div>


  <div class="panel-body">

  @if(Session::has('pesan'))<div role="alert" class="alert alert-success">{{ Session::get('pesan') }}</div>@endif

  <a class="btn btn-primary" href="/home" role="button">+ Tambah Barang</a>

  <td>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#riwayatkeranjang">
 Histori
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="riwayatkeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Riwayat Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">

  <div class="panel">

<br>

<table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>Kode Transaksi</th>
      <th>Nama</th>
      <th>Barang</th>
      <th>Jumlah</th>
      <th>Satuan</th>
      <th>Tanggal</th>
      <th>Total</th>
      <th>Atas Nama</th>
      <th>Alamat</th>
      <th>No. Telp</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $t)
  @if($t->status == "Approved")
    <tr>
      <td>{{ $t->id }}</td>
      <td><td>{{auth()->user()->name}}</td></td>
      <td>{{ $t->barang }}</td>
      <td>{{ $t->jumlah }}</td>
      <td>{{ $t->satuan }}</td>
      <td>{{ $t->tanggal }}</td>
      <td>Rp. {{ $t->total }}</td>
      <td>{{ $t->atas_nama }}</td>
      <td>{{ $t->alamat }}</td>
      <td>{{ $t->no_tlp }}</td>
      <td><a class="btn btn-success ml-3" href="/struk/{{ $t->id}}">Struk</a></td>
    </tr>
    @endif
    @endforeach
    
  </tbody>
  </table>
  {{ $transaksi->links() }}


</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</td>

  <br>
  <br>


  <table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>Nama</th>
      <th>Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Satuan</th>
      <th>Tanggal</th>
      <th>Total Satuan</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($keranjang as $k)
    <tr>
      <td>{{auth()->user()->name}}</td>
      <td>{{ $k->barang }}</td>
      <td>{{ $k->jumlah }}</td>
      <td>Rp. {{ $k->harga }}</td>
      <td>{{ $k->satuan }}</td>
      <td>{{ $k->tanggal }}</td>
      <th>Rp. {{ $k->total_satuan }}</th>
      <td>
        <a class="btn btn-danger ml-3" href="/hapuskeranjang/{{ $k->id}}" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</a>
        <a class="btn btn-warning ml-3" href="/checkout/{{ $k->nama}}" >Checkout</a>
      </td>
    </tr>
  </tbody>
  @endforeach
  </table>

  <table class="table table-borderless">
  <thead class="thead-dark"></thead>
    <tr>
      <th> Total Rp. {{number_format(array_sum($total))}}</th>
  
    </tr>
  </table>
  {{ $keranjang->links() }}



<!-- <div class="panel-heading" align="center">
          <h3 class="panel-title">Menunggu Approved</h3>
          <hr>
        </div>
<table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>Nama</th>
      <th>Kode Transaksi</th>
      <th>Barang</th>
      <th>Jumlah </th>
      <th>Harga</th>
      <th>Satuan</th>
      <th>Kategori</th>
      <th>Tanggal</th>
      <th>Total</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($keranjang as $k)
    <tr>
      <td>{{auth()->user()->name}}</td>
      <td>{{ $k->id }}</td>
      <td>{{ $k->barang }}</td>
      <td>{{ $k->jumlah }}</td>
      <td>{{ $k->harga }}</td>
      <td>{{ $k->satuan }}</td>
      <td>{{ $k->kategori }}</td>
      <td>{{ $k->tanggal }}</td>
      <td>{{ $k->total_satuan }}</td>
      <td>
        <a class="btn btn-warning ml-3" href="/selesai/{{ $k->id }}">Approve</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  {{ $keranjang->links() }} -->

</div>
</div>
</div>
</div>
</form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>   
</html>