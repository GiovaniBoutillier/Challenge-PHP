<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include("connexion.php");

session_start();

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];


$res = mysqli_query($cnx,"SELECT * FROM admin WHERE pseudo='$pseudo' AND password='$password'");

$data = mysqli_fetch_assoc($res);


if($data){
  $_SESSION['login']=true;
  $_SESSION['pseudo']= $data['pseudo'];
}else {
  $_SESSION['login']=false;

}





header('location:admin.php');


 ?>
