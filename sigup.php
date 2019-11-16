
<?php include_once('conexion.php');
 
 $email = $_POST['email'];
 $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
 $passwords = $_POST['passwords'];


 $sql ='SELECT * from users WHERE email= ?';

 $send= $pdo->prepare($sql);
 $send->execute([$email]);
 $resultado = $send->fetch();
  
if($resultado){
 
  header('location:sigup.php');
  
  die();
 
}
  
  $email = $_POST['email'];
  $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
  $passwords = $_POST['passwords'];

  
  $sql = 'INSERT INTO users(email, password) VALUES(?,?)';

  $send = $pdo->prepare($sql);
  $resultado = $send->execute([$email,$password]);



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login php </title>
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  </head>
  <body>
  <?php  include('partials/header.php'); ?>

<div class="container">
         <div class="row">
             <div class="col-md-6 mx-auto mt-4">


                 <div class="card ">
                     <div class="card-header">
                       <h4 class="text-center">Register free</h4>
                     </div>
                     <div class="card-body">
                     <form action="sigup.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">repeat password</label>
                            <input type="password" name="passwords" class="form-control" id="passwords" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Aceptar los terminos </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>  


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>