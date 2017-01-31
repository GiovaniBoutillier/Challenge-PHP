<?php
  session_start();
  include 'connexion.php';

  $res2 = mysqli_query($cnx, 'SELECT * FROM couleurs WHERE id=1');
  $data2 = mysqli_fetch_assoc($res2);

  $res3 = mysqli_query($cnx, 'SELECT * FROM utilisateurs');

  ?>

  <!DOCTYPE html>
 <html lang="fr">

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Challenge PHP de Giovani </title>

     <!-- Bootstrap Core CSS -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="../css/main.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

 </head>
 <style media="screen">
   h1,h2,h3,h4,h5{
    color:<?php echo $data2['title']; ?>!important;
    font-family:<?php echo $data2['police']; ?>!important;

   }
   nav {
     background: <?php echo $data2['nav']; ?>!important;
     position: <?php if ($data2['choixnav'] == 1) {
      echo 'fixed';
  } elseif ($data2['choixnav'] == 0) {
                   echo 'absolute';
               }?>!important;
   }

   a {
     color:<?php echo $data2['url']; ?>!important;
   }

   input {
     background-color:<?php echo $data2['bouton']; ?>!important;
   }

   img {
    margin:5%;
    height:150px;
   }

   table {
     width: 100%;
     height: 200px;
     background-color:white;
     text-align: center;
     border: 1px solid black;
   }

   th {
     height: 50px;
     width:100px;
     background-color:grey;
   }

   th,td{
     text-align: center;
     border: 1px solid black;
   }





 </style>

 <body>

     <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
             <!-- Left -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
             </div>
             <!-- Right -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                     <li>
                         <a href="../index.php">Home</a>
                     </li>
                     <li>
                         <a href="repertory.php">Repertory</a>
                     </li>
                     <li>
                         <a href="about.php">About</a>
                     </li>
                     <li>
                         <a href="contact.php">Contact</a>
                     </li>
                     <li>
                         <a href="admin.php">Administration</a>
                     </li>
                 </ul>
             </div>
             <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
     </nav>


     <!-- Page Content -->
     <div class="container">
       <h1> Espace Administration</h1>
      <?php

      if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
          echo 'Bienvenue '.$_SESSION['pseudo'];
          echo '<br><form action="admindestroy.php" method="post">
        <input type="submit" name="submit" value="Deconnexion">
        </form><br>';

          echo '<h2> Couleurs du site  </h2>';
          echo '<form action="admincolor.php" method="post">
        <input type="text" name="title" value="" autocomplete="off">
        <input type="submit" name="submit" value="Couleur des titres">
        </form>';

          echo '
        <form action="admincolor.php" method="post">
        <input type="text" name="police" value="" autocomplete="off">
        <input type="submit" name="submit" value="Police des titres">
        *DancingScript-Regular, IndieFlower & Pacifico-Regular
        </form>';

          echo '<form action="admincolor.php" method="post">
        <input type="text" name="nav" value="" autocomplete="off">
        <input type="submit" name="submit" value="Couleur de la navbar">
        </form>';

          echo '<form action="admincolor.php" method="post">
        <input type="text" name="url" value="" autocomplete="off">
        <input type="submit" name="submit" value="Couleur des urls">
        </form>';

          echo '<form action="admincolor.php" method="post">
        <input type="text" name="bouton" value="" autocomplete="off">
        <input type="submit" name="submit" value="Couleur des boutons">
        </form><br>';

          echo '<h2> Slide </h2>';
          echo '<form action="admincolor.php" method="post">
        Activer : <input type="radio" name="inp" value="1"> &nbsp &nbsp
        Desactiver : <input type="radio" name="inp" value="0" > &nbsp &nbsp
        <input type="submit" value="Valider">
        </form>';

          echo '<h2> Navbar </h2>';
          echo '<form action="admincolor.php" method="post">
        Fixed : <input type="radio" name="ipt" value="1"> &nbsp &nbsp
        Absolute : <input type="radio" name="ipt" value="0" > &nbsp &nbsp
        <input type="submit" value="Valider">
        </form><br>';

          echo '<h2> Utilisateurs </h2>';
          echo'<table><th>Id</th><th>Pseudo</th><th>Prenom</th><th>Mail</th><th>Jeux</th><th>Naissance</th><th>Photo de profil</th><th></th>';
          while ($data3 = mysqli_fetch_assoc($res3)) {
              echo '<tr>';
              foreach ($data3 as $key => $value) {
                  if ($key != 'file') {
                      echo'<td>'.$value.'</td>';
                  } elseif($key=='file') {
                      echo '<td><img src="../img/'.$value.'"> </td>';
                  }
              }
              echo'</tr>';
          }
          echo '</table>';
      } else {
          echo ' <br> <form action="admincheck.php" method="post">
             <input type="text" name="pseudo" value="" placeholder="pseudo" autocomplete="off"><br>
             <input type="password" name="password" value="" placeholder="password" autocomplete="off"><br>
             <input type="submit" name="submit" value="Login">
           </form>';
      }
             ?>




         <!-- Footer -->
         <footer>
             <div class="row">
                 <div class="col-lg-12">
                     <p>Copyright &copy; SimplonBSM 2017</p>
                 </div>
             </div>
         </footer>

     </div>
     <!-- /.container -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>


 </body>

 </html>
