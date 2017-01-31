<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Envoie les erreurs / 1 Pour activer - 0 pour desactiver

$cnx = mysqli_connect("localhost","root","codeurKiFFeur","Challenge1") or die ("error = ".mysqli_connect_errno());
//Sur localhost, Root = Pseudo, Mdp=codeurKiFFeur, dossier = test

// var_dump($cnx);
 ?>
