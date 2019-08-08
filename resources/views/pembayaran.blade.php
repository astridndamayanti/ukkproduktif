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

<h4>Pembayaran hanya bisa dilakukan via Transfer ke No. Rekening dibawah :</h4>
<h2>9884456511705985 a/n OnlineShop</h2>

<h6>Jika sudah melakukan pembayaran silahkan menunggu untuk pemberitahuan selanjutnya, jika dalam waktu 5 hari setelah waktu pembayaran belum mendapat pemberitahuan silahkan hubungi customer service melalui: </h6>
@foreach($keranjang as $k)
<form action="/updatebayar/{{$k->nama}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<table>
<tr>
    <td><button type="submit" class="btn btn-warning">Selesai Transfer</button></td>
</tr>
</table>
@endforeach
</form>

</div>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>   
</html>