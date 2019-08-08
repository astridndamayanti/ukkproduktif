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
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>

<div id="nav-sidebar" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="/home" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
            <li><a href="/admin" class=""><i class="lnr lnr-database"></i> <span>Form Barang</span></a></li>
            <li><a href="/riwayatinput" class=""><i class="lnr lnr-database"></i> <span>Riwayat Input</span></a></li>
            <li><a href="/user" class=""><i class="lnr lnr-user"></i> <span>Form Pengguna</span></a></li>
            <li><a href="/pesanan" class=""><i class="lnr lnr-cart"></i> <span>Form Pesanan</span></a></li>
            <li><a href="/transaksi" class=""><i class="lnr lnr-inbox"></i> <span>Riwayat Transaksi</span></a></li>


             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{{auth()->user()->name}} - {{auth()->user()->dept}}  </span> </a> 
              <ul class="dropdown-menu">
                <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <br>

<div class="container">

<h2>Form Edit Pengguna</h2>
<hr>

<br>

<div class="panel">
	<div class="panel-body">
	<table class="table table-bordered">
	
  @foreach($user as $u)	
  <form action="/update_user" method="post">
  {{ csrf_field() }}
  
  <table class="table">
    <tr>
      <td>Id User</td>
      <td><input type="text" class="form form-control" style="width: 600px" name="name" value="{{ $u->id }}"></td>
    </tr>
    <tr>
      <td>Nama Pengguna</td>
      <td><input type="text" class="form form-control" style="width: 600px" name="name" value="{{ $u->name }}"></td>
    </tr>
    <tr>
      <td>Departemen</td>
      <td><input type="text" class="form form-control" style="width: 600px" name="dept" value="{{ $u->dept }}"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" class="form form-control" style="width: 600px" name="password" value="{{ $u->password }}" ></td>
    </tr>
    <tr>
      <td>Level</td>
      <td><input type="text" class="form form-control" style="width: 600px" name="role" value="{{ $u->role }}"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit"  class="btn btn-primary"  value="Simpan Data"></td>
    </tr>
  </table>
  
</form>
@endforeach
	</table>

</div>
</div>
</div>


</body>
</html>