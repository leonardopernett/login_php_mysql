

<?php  

$usuario ='root';
$password="Admin09";
$link ='mysql:host=localhost;dbname=Login_User';



try{
    $pdo = new PDO($link, $usuario, $password);
   

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



