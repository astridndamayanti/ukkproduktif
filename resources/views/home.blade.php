<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/chartist-custom.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

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
              <i class="lnr lnr-exit"></i>
              <span>Logout</span>
            </a>
          </li>
        

          </li>
          <hr>
        </ul> 
        <hr>
    </nav>

  <div class="panel" style="width: 1100px">

<br>

  @if(Session::has('pesan'))<div role="alert" class="alert alert-success">{{ Session::get('pesan') }}</div>@endif
  @if(Session::has('tanggap'))<div role="alert" class="alert alert-success"><i class="fas fa-check-circle"></i>{{ Session::get('tanggap') }}</div>@endif
  <div class="panel-body">

  <form action="cari_home" method="GET" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Masukan barang" value="{{ old('cari') }}" autocomplete="off">
          <input class="btn btn-primary my-2 my-sm-0" type="submit" value="Cari">
          </form>
  <br>

<div class="row">
@foreach($barang as $b)

<div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <img src="{{URL::asset('images/cart.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $b->barang }}</h5>
    <p class="card-text">Jumlah Stok: {{ $b->stok }} </p>
    <p class="card-text">Rp. {{ $b->harga}} </p>
    <a class="btn btn-success ml-3" href="/order/{{ $b->id }}">Order</a>
  </div>
</div>
</div>
<br>
@endforeach
</div>


  <!-- <table class="table table-bordered">
    <thead class="thead-dark"></thead>
    <tr>
      <th>Barang</th>
      <th>Stok</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($barang as $b)
    <tr>
      <td>{{ $b->barang }}</td>
      <td>{{ $b->stok }}</td>
      <td>{{ $b->kategori }}</td>
      <td>Rp. {{ $b->harga}}</td>
      <td>
        <a class="btn btn-success ml-3" href="/order/{{ $b->id }}">Order</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table> -->
  {{ $barang->links() }}

</div>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>   
</html>