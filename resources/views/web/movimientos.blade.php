<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SP Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Finance In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="banner">
		<div class="header">
			<div class="container">
						<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">SP Bank</a>
						</h1>
					</div>
				</div>
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="inicio">Inicio</a></li>
									<li><a href="about">Sobre nosotors</a></li>
									@if (Auth::check())
										<li><a href="servicios">Depósitos/Retiros</a></li>
										<li><a href="pagos">pagos</a></li>
										@if (Auth::user()->isAdmin())
											<li><a href="clientes">Catálogo de clientes</a></li>
										@endif
								  	@else
										<li><a href="register">Crear cuenta</a></li>
										<li><a href="login">Inicio de sesión</a></li>
									@endif
								</ul>
							</div>
						</nav>
				</div>
			</div>
		</div>
  <main class="py-4">
  <div class="row justify-content-center">          
  <form class="" action="{{URL::to('/')}}" method="post"> 
  	{{csrf_field()}}
 <div class="card text-center">
  <div class="card-header">
    Transferencia
  </div>
  <div class="card-body">
    <h5 class="card-title">Deposita a otras cuentas de banco </h5>
    <h6>Cuenta destino: </h6>
    <div class="input-group mb-3">
    
  <div class="input-group-prepend">
 
    <span class="input-group-text" id="basic-addon1">!</span>
  </div>
  <input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx" aria-label="ctadestino" aria-describedby="basic-addon1" name='ctadestino'>
</div>
<h6>Concepto: </h6>
<div class="input-group mb-3">
<div class="input-group-prepend">
  
    <span class="input-group-text" id="basic-addon1">!</span>
  </div>
  <input type="text" class="form-control" placeholder="Pago" aria-label="concepto" aria-describedby="basic-addon1" name="concepto" >
</div>
<h6>Monto: </h6>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="monto">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>
   
  
    <input type="submit" class="btn btn-primary" value="Enviar.">
  </div>
  <div class="card-footer text-muted">
    *Verifica los datos antes de hacer cualquier movimiento.
  </div>
</div>
</form>
</div>
      
    
  </main>
@section('content')
  <div class="container">
    <h1 id="saldo">Saldo: </h1>
    <div class="col-md-12" align="center">
      <h1>Lista de movimientos</h1>
        <table id="movimientos" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Monto</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
              </tr>
          </thead>
          <tfoot>
						<tr>
              <th>Id</th>
              <th>Monto</th>
              <th>Descripción</th>
              <th>Fecha</th>
						</tr>
					</tfoot>
        </table>
    </div>
  </div>
  <script>
  const id = {{$userId}}
  </script>
  <script src="{{ asset('js/movimientosTable.js')}}" defer></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
</body>
