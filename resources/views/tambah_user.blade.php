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
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


    <br>
<div class="container">

<form action="/store_user" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<a href="/login"  class="btn btn-success"><span>Kembali</span></a>
	<div class="panel" style="width: 800px">
  <div class="panel-body">
	<table class="table table-borderless">
		<tr>
			<td>Nama Pengguna</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="name"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" class="form form-control" style="width: 600px" name="password"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><input type="text" class="form form-control" style="width: 600px" value="user" name="role" readonly></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  class="btn btn-primary"  value="Simpan Data"></td>
		</tr>
	</table>
	
	</div>
	</div>
</form>

</div>

</body>
</html>