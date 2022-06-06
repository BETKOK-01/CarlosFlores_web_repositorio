<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing Page</title>
		<link rel="stylesheet" type="text/css" href="Estilos/Plantilla.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<div class="menu">
		<nav class="navbar navbar-expand-lg navbar navbar-light" >
  		<div class="container-fluid">
   			<a href="/" title="Inicio"><img src="Imagenes/LogoChiquito.png"></a>
   			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
			   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     			<span class="navbar-toggler-icon"></span>
   			</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
     			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        		<li class="nav-item">
         			<a class="nav-link" href="">Nosotros</a>
        		</li>
        		<li class="nav-item">
         			<a class="nav-link" href="">Celulares</a>
        		</li>
                <li class="nav-item">
  	  				<a class="nav-link" href="">Computadoras</a>
       			</li>
                <li class="nav-item">
  	  				<a class="nav-link" href="">Reparaciones</a>
       			</li>
      		</ul>
      		<a href="inicio_de_sesion" title="Inicio de Sesion"><img src="Imagenes/usuario.png" width="30px" height="30px" alt=""></a>
  		  </div>
  		</div>
		</nav>
	</div>

    
    <section class="main">
		<div class="menu">
            <div class="mensaje">
                <h1>¡BIENVENIDO!</h1>  
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="Imagenes/Carrusel_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/Carrusel_6.png" class="d-block w-100" alt="...">
                    </div>
                </div>    
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            
        </div> 
	</section>

    

	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  	<div class="col-md-4 d-flex align-items-center">
      <img class="bi" src="Imagenes/LogoChiquito.png" margin="10px" width="35" height="30"></img>
      <span class="text-muted">© 2021 Consultoria UTec, Inc</span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
     	<li class="ms-3"><img src="Imagenes/twitter.png" class="bi" width="24" height="24" ></li>
     	<li class="ms-3"><img src="Imagenes/instagram.png" class="bi" width="24" height="24"></li>
     	<li class="ms-3"><img src="Imagenes/facebook.png" class="bi" width="24" height="24"></li>
    </ul>
  </footer>


	<!-- Extension de JavaScript para manipular objetos -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css></script>
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="js/Validaciones.js"></script>
</body>
</html>