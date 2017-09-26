<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="furusato sushi">
  <meta name="author" content="cpnt">
  <!-- poner icono de furusato  <link rel="icon" href="../../../../favicon.ico"> -->
  <title>Furusato Sushi - Delivery Catering</title>

  <!-- BootStrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!--  CSS para animaciones -->
  <link href="css/animate.css" rel="stylesheet">
  <!-- Nuestro propio CSS -->
  <link href="css/furusato.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <!--   Barra de navegación   -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">
        <img class= "imglogosmall " alt="Furusato" src="img/logo-small.jpg">
        <img class="imglogobig imgnodisplay" alt="Furusato" src="img/logo-m.jpg">
          </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">

          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="faq.php">Conocenos</a></li>

        </ul>

        <?php if (estaLogueado()) : ?>
          <a type="button" class="btn btn-primary" href="profile.php"><?=usuarioLogueado()["nombre"]?></a>
          <a type="button" class="btn btn-default navbar-btn elogin" href="logout.php">Log Out</a>
        <?php else: ?>
          <a type="button" class="btn btn-default navbar-btn eregisterbtn" href="register.php">Registrate</a>
          <a type="button" class="btn btn-default navbar-btn elogin" href="login.php">Log In</a>
        <?php endif; ?>
        <a href="cart.php"> <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"><span class="badge badge-cart">0</span></i></a>
      </div>
    </div>
  </nav>
  <!--/.nav-collapse -->
