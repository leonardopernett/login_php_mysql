<?php include_once('conexion.php');
  

  session_start();
    
   $email    =    $_POST['email'];
   $password =    $_POST['password'];
    
 $sql ='SELECT * from users WHERE email= ?';

 $send= $pdo->prepare($sql);
 $send->execute([$email]);
 $resultado = $send->fetch();

   if(!$resultado){
      
    echo "incorrecto user";
    
   }else if( password_verify($password, $resultado['password'] )){

       $_SESSION['email'] = $resultado['email'];
       
       header('location:index.php');

   }else {

  echo "incorrecto pass";
   }
   

  

?>

