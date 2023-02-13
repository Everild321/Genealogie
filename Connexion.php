<?php
  session_start();
  require_once 'configuration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style/style.css">

</head>

<body style=" background-image: url(image/i.jpg);
background-repeat: no-repeat;
background-size: cover;
">
    <div class="container-fluid" id="entete">
        <div class="contact-info d-flex align-items-center" id="head">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com" id="mail">adammadoeverild@gmail.com</a>
            &nbsp;&nbsp;&nbsp<i class="bi bi-phone-fill phone-icon"></i> +229 69 48 64 02
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Genealogie</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="Accueil.html">Home</a></li>
            <li><a href="Inscription.php">Inscription</a></li>
            <li class="active"><a href="#">Connexion</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav> 
     
     <!-- <div class="alert alert-danger" <?php echo  $_GET['faute'] ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreur!</strong> Mot de passe incorrect ou email incorrect ...
  </div>-->
      <div class="login">
	<form action="configuration.php" method="post">
  <h4>Connexion</h4>
  <input type="email" name="email" required placeholder="email" value="">
	<input type="password" name="password" required placeholder="Password" value="">
	<br>
	<button class="btn" name="connect">Se connecter</button>
  </form>
	</div>

  <?php
  
  ?>
    
  <!-- les fichiers javascript -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>