<?php
session_start();
include 'connexion.php';


$title = $_POST['title'];
if($title != ""){
$res2 = mysqli_query($cnx,"UPDATE couleurs SET title= '$title' WHERE id=1");
}

$nav = $_POST['nav'];
if($nav !=""){
$res2 = mysqli_query($cnx,"UPDATE couleurs SET nav= '$nav' WHERE id=1");
}

$url = $_POST['url'];
if($url != ""){
$res2 = mysqli_query($cnx,"UPDATE couleurs SET url= '$url' WHERE id=1");
}

$bouton = $_POST['bouton'];
if($bouton != ""){
$res2 = mysqli_query($cnx,"UPDATE couleurs SET bouton= '$bouton' WHERE id=1");
}

$police = $_POST['police'];
if($police != ""){
$res2 = mysqli_query($cnx,"UPDATE couleurs SET police= '$police' WHERE id=1");
}

$inp = $_POST['inp'];
$res2 = mysqli_query($cnx,"UPDATE couleurs SET slide=$inp WHERE id=1");

$ipt = $_POST['ipt'];
$res2 = mysqli_query($cnx,"UPDATE couleurs SET choixnav=$ipt WHERE id=1");

$res2 = mysqli_query($cnx,"SELECT * FROM couleurs WHERE id=1");
$data2 = mysqli_fetch_assoc($res2);

header('location:admin.php');
 ?>
