<div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Nous n'avons pas besoin de formation</h1>
          <h2>Quand nous avons du talent ...</h2>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- headerwrap -->

  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-4">
        <i class="fa fa-heart"></i>
        <h4>DESIGN</h4>
        <p>Des sites d'une beauté imparable. Exclusivement déssiné par Marge Simpson.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-laptop"></i>
        <h4>RESPONSIVE</h4>
        <p>Nos site resteront lisibles et jolies sur tout format d'écran confondu.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-trophy"></i>
        <h4>SUPPORT</h4>
        <p>Un problème avec votre site ? Moe est disponible H24 a la hotline.</p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->

  <!-- PORTFOLIO SECTION -->
  <div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>DERNIERS PROJETS</h4>
        <br>
        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p01.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p03.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p02.png" alt=""></a>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- DG -->

  <!-- FEATURE SECTION -->
  <div class="container wb">
    <div class="row centered">
      <br><br>
      <div class="col-lg-8 col-lg-offset-2">
        <h4>Des designs de premier choix</h4>
        <p>Notre interet s'est transformé en amour qui s'est transformé en passion. Notre compagnie Noob peut vraiment être fier du travail produit jusqu'a présent.</p>
        <p><br/><br/></p>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-10 col-lg-offset-1">
        <img class="img-responsive" src="img/munter.png" alt="">
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <div id="lg">
    <div class="container">
      <div class="row centered">
        <h4>Nos supers clients</h4>
        <div class="col-lg-2 col-lg-offset-1">
          <img src="img/c01.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c02.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c03.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c04.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c05.gif" alt="">
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- dg -->

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

  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">contact us</h4>
        </div>
        <div class="modal-body">
          <div class="row centered">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>