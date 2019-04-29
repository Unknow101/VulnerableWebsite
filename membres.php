  <?php
  if(!isset($_GET['id']) || $_GET['id'] == ''){
  	header('Location: index.php');
  }
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'root', '');
$reponse = $bdd->query("SELECT * FROM users WHERE id=".$_GET['id']);
$data = $reponse->fetch();
?>
  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4><?php echo $data['prenom']?></h4>
          <p><?php echo $data['nom']?></p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->


  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-3">
        <img class="img-circle" src='<?php echo $data["image"] ?>' width="110" height="110" alt="">
        <h4><?php echo "Prenom : " . $data['prenom']; ?></h4>
        <h4><?php echo "Nom : " . $data['nom']; ?></h4>
        <p><?php echo "Bio : " . $data['bio']; ?></p>
      </div>
      <!-- col-lg-3 -->

      <!-- col-lg-3 -->

    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->


  <!-- PORTFOLIO SECTION -->

  <!-- DG -->

  <!-- FOOTER -->
  <div id="f">
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>

      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->


