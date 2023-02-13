
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configuration</title>
</head>
<body>
        
<?php
$server="localhost";
$dbname="familly";
$username="root";
$password="";
    try
    {
        $dbconnect = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
        $dbconnect->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        
        if (isset($_POST["submit"])){
            
            $username = $_POST["username"];
            $pere = $_POST["pere"];
            $mere = $_POST["mere"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $conjoint = "";
            $enfant = "";
            $error='erreur';
            
           if($_POST["password"] === $_POST["cpassword"]){
            //$hash = password_hash($password, PASSWORD_DEFAULT);
            $password = sha1( $password);
                //echo $userPasswordHash;
            
            $sql="INSERT INTO `user`(`username`, `pere`, `mere`,`email`,`password`, `cpassword`) VALUES(:username, :pere, :mere, :email, :password, :cpassword)";
            $stmt = $dbconnect->prepare($sql);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':pere',$pere);
            $stmt->bindParam(':mere',$mere);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':cpassword',$cpassword);
         
            $a=$stmt->execute();
            
            $sql3="INSERT INTO `userfamilly`(`username`, `email`, `conjoint`, `enfant`, `password`) VALUES ( :username, :email, :conjoint, :enfant, :password)";
            $stmt = $dbconnect->prepare($sql3);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':conjoint', $conjoint);
            $stmt->bindParam(':enfant', $enfant);
            $stmt->bindParam(':password',$password);
           

            $a3=$stmt->execute();
                
            $sql2="INSERT INTO `userinfo`(`username`, `email`, `password`) VALUES ( :username, :email, :password)";
            $stmt = $dbconnect->prepare($sql2);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
           
            $a2=$stmt->execute();

            header('Location: Connexion.php');  
            var_dump($password);
        }else{ 
             echo "$error";
           }
        }
        

        if (isset($_POST["insert"])){
            $username = $_POST["username"];
            $conjoint = $_POST["conjoint"];
            $enfant = $_POST["enfant"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $faute="Erreur";
            
        
            //$sql="INSERT INTO `userfamilly`(`username`,`email`, `conjoint`, `enfant`,`password`) VALUES(:username,  :email, :conjoint, :enfant, :password)";
           $sqlb="UPDATE `userfamilly` 
           SET `username`='$username',`email`='$email',`conjoint`='$conjoint',`enfant`='$enfant',`password`='$password' 
           WHERE `email` = '$email'
           " ;
            $stmt = $dbconnect->prepare($sqlb);
            $ab=$stmt->execute();
            var_dump($ab);
          if($password === "password"){
            header('Location: Connexion.php');  

          }else{
          header('Location : erreur.php');
          }
          
        }
            

        if (isset($_POST["connect"])){
            
           // $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $faute="faute";
            
           // $password = password_hash( $password, PASSWORD_DEFAULT);
          $req="SELECT * FROM `userinfo` WHERE userinfo.`email` = '$email' AND userinfo.`password` = sha1('$password')  LIMIT 1";

            $res=$dbconnect->query($req);
           $a= $res->fetchAll();
          // print_r($a[0]["password"]);
         
           if(!$a){
            //header('Location: Connexion.php? faute='.$faute);
            echo "$faute";
           }
            
            if($a){
                var_dump($a); 
             
                $mdp= $a[0]['password'];

                // $rep=password_verify("1234", password_hash( "1234", PASSWORD_DEFAULT)); 
                  $rep=sha1($password);
                  
                 // var_dump($mdp);
                  //var_dump($password);
                  var_dump($rep);  
                 if($rep){
                      echo `<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>Erreur!</strong> Mot de passe incorrect ...
                    </div>`;
                 }else{
                    header('Location: Connexion.php? faute='.$faute);
                 }
                session_start();
               
                $_SESSION["email"]=$email;
                $_SESSION["username"]=$username;
                $sqla="SELECT *
                FROM `userinfo` 
                INNER JOIN `userfamilly` ON userinfo.`email` = userfamilly.`email`
                INNER JOIN `user` ON userinfo.`email` = user.`email`
                WHERE userinfo.`email` = '$email' LIMIT 1";
                 $resultat=$dbconnect->query($sqla);
                 
                 $b= $resultat->fetch();
                 $_SESSION["infos"]=$b;
            
  header('Location: Bienvenue.php'); 

            }
        }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
       
        //header('Location: inscription.php');
    }

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>