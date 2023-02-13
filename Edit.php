<?php 
  session_start();
  require_once 'configuration.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Editer Profil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Bootstrap CSS -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style/style.css">
</head>

<body style=" background-image: url(image/li.jpg);
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
            <li><a href="Connexion.php">Connexion</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="Edit.php"><span class="glyphicon glyphicon-user"></span>&nbsp Complet Profil</a></li>
            <li><a href="Connexion.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav> 
      <div class="alert alert-danger" <?php echo  $_GET['faute'] ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreur!</strong> Mot de passe incorrect ou email incorrect ...
  </div>
     <div class="inscript_edit">
        <form class="inscription" method="post" action="configuration.php">
            <h2 class="insc_edit">Completer Profil</h2>
            <p style=" color: white;"> <strong style="text-decoration: underline; font-size:20px;">NB:</strong> remettez les anciennes informations suivi des nouvelles <br>
            (conjoint(e) et enfant(s))!
            </p>
            <label>
              <input name="username" type="text" required placeholder="&nbsp;username" id="inpu">
            </label> <br>
            <label>
                <input name="conjoint" type="text" placeholder="&nbsp;conjoint(e)" id="inpu" >
              </label> <br>
              <label>
                <input name="enfant" type="text"  placeholder="&nbsp;enfant" id="inpu">
              </label> <br>
            <label>
              <input name="email" type="email" required placeholder="&nbsp;email" id="inpu">
            </label> <br>
            <label>
              <input name="password" type="password" required placeholder="&nbsp;Password"id="inpu">
            </label><br>
            <button type="submit" name="insert" class="button">Soumettre</button>
          </form>
     </div>
    
  <!-- les fichiers javascript -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>