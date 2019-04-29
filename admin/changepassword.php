<?php
session_start();
if($_SESSION['username'] == "" || !isset($_SESSION['username'])){
  header('Location: login.php');
}
$bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'root', '');
$reponse = $bdd->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NOOB - Admin panel</title>
  <style type="text/css">
    .log {
      border: 1px solid black;
    }
  </style>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Compte : <?php echo $_SESSION['username']; ?></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Messagerie</a>
        <a href="logs.php" class="list-group-item list-group-item-action bg-light">Logs</a>
        <a href="membres.php" class="list-group-item list-group-item-action bg-light">Membres</a>
        <a href="changepassword.php" class="list-group-item list-group-item-action bg-light">Réinitialiser mot de passe</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Deconnexion</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Réinitialiser le mot de passe</h1><br>
        <form action="initpass.php" method="post">
          <select class="form-control form-control-lg" name="prenom">
            <?php
            while($data = $reponse->fetch()){
              echo '<option value="'.$data['prenom'].'">'.$data['prenom']."</option>";
            }
            ?>
          </select><br>
          <button type="submit" class="btn btn-primary mb-2">Réinitialiser</button>
        </form>
        <small><i>Les mots de passes sont réinitialisés a Azert01</i></small><br>
        <?php
        if(isset($_GET['success']) && $_GET['success']==1){
          ?>
          <div class="alert alert-success" role="alert">
            Le mot de passe a été réinitialisé
          </div>
          <?php
        }
        ?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
