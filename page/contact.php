<?php
session_start();
include 'connexion.php';

$res2 = mysqli_query($cnx, 'SELECT * FROM couleurs WHERE id=1');
$data2 = mysqli_fetch_assoc($res2);

$res5 = mysqli_query($cnx, 'SELECT *FROM utilisateurs ORDER BY id DESC LIMIT 1');
$data5 = mysqli_fetch_assoc($res5);

$pseudo = @$_POST['pseudo'];
$prenom = @$_POST['prenom'];
$mail = @$_POST['mail'];
$jeux = @$_POST['jeux'];
$datedenaissance = @$_POST['datedenaissance'];
$file = @$_FILES['file']['name'];

$toverif = [preg_match('#^[a-zA-Z]#', $pseudo),
          preg_match('#^[^0-9]+$#', $prenom),
          preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#', $datedenaissance),
          preg_match('#[a-zA-Z0-9]*@[a-zA-Z]*.[a-z]{2,4}#', $mail), ];

          foreach ($toverif as $value) {
              if (!$value) {
                  $match = false;
                  break;
              } else {
                  $match = true;
              }
          } if ($match == true) {
              $insert = mysqli_query($cnx, "INSERT INTO utilisateurs (pseudo,prenom,mail,jeux,datedenaissance,file) VALUES ('".$pseudo."','".$prenom."','".$mail."','".$jeux."','".$datedenaissance."','".$file."')");
              $res9 = move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/challengePHP/img/'.$_FILES['file']['name']);
          }

      if ((int) @$insert == 1) {
          @$_SESSION['login4'] = true;
      } else {
          @$_SESSION['login4'] = false;
      }

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

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-4">
                <!-- Contact form -->
                <form method="post" name="sentMessage" action="contact.php" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Pseudo:</label>
                            <input type="text" class="form-control" name="pseudo" placeholder="Ne doit pas commencer par un chiffre">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Prenom:</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Ne doit pas contenir de chiffre">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Addresse Email:</label>
                            <input type="email" class="form-control" name="mail" placeholder="Adresse mail valide" >
                        </div>
                    </div>

                    <div class="col-m-4 control-group form-group">
                        <div class="controls">
                            <label>Jeux:</label>
                            <input type="text" class="form-control" name="jeux" placeholder="Jeux">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Date de naissance:</label>
                            <input type="text" class="form-control" name="datedenaissance" placeholder="JJ/MM/AAAA">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Photo de profil</label>
                            <input type="file" name="file"  >
                        </div>
                    </div>


                    <!-- <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="4" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div> -->

                    <div id="success"></div>
                    <button name="submit" type="submit" class="btn btn-primary">Envoyer</button>
                </form>

                <?php if ($_SESSION['login4']) {
    echo 'Contact envoyé';
} elseif (!$_SESSION['login4'] && isset($_POST['submit'])) {
    echo 'Contact non Envoyer !';
}
              ?>

              </div>
        </div>
        <!-- /.row -->

        <hr>

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
