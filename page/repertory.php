<?php
session_start();
include 'connexion.php';

$res2 = mysqli_query($cnx,"SELECT * FROM couleurs WHERE id=1");
$data2 = mysqli_fetch_assoc($res2);

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
  position: <?php if($data2['choixnav'] == 1){
              echo 'fixed';
            }
            elseif($data2['choixnav'] == 0){
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
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
                <h3>Username</h3>
                <p>22 ans <span>(19/12/1994)</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
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
