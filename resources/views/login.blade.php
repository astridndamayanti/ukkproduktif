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
  <script src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="/css/main.css">
  <style>
    #username,#password {
    width: 430px;
    padding: 5px;
    border: 1px solid #ddd;
    float: left;
    font-size: 12pt;
    margin: 10px;
}
  </style>
  
</head>
<body>

<br>
<br>
  
<div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box ">
          <div class="left">
            <div class="content">
              <div class="header">
                <p class="lead"><i class="fas fa-shopping-cart"></i>&nbsp; ONLINE SHOP</p>
                <p class="lead">Silahkan Masukan Username dan Password</p>
              </div>

              <form class="form-auth-small" action="postlogin" method="POST">
                {{ csrf_field() }}
                @if(Session::has('pesan_error'))<div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>@endif
                <table>
                <div class="form-group">
                <tr>
                  <td>
                  <input name="name" type="text" id ="username" placeholder="Username" autocomplete="off" style="width: 370px">
                  </td>
                </tr>
                </div>
                </tr>
                <tr>
                <div class="form-group">
                <tr>
                <td>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" style="width: 370px" >
                </td>
                </div>
                </tr>
               </table>
                <br>
                <div class="form-group">
                  <input type="checkbox" class="form-checkbox" id="check">Show password
                </div>
    
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                <a class="btn btn-success ml-3" href="tambah_user">Daftar</a>

                

                

                
            
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>

            <div class="content text">
              <h1 class="heading"></h1>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>

</body>
<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-control').attr('type','text');
      }else{
        $('.form-control').attr('type','password');
      }
    });
  });
</script>

</html>