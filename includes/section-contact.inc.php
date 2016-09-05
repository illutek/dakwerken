<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 4/09/2016
 * Time: 21:38
 */?>

<section class="container section-contact wow fadeIn" data-wow-duration="3s">
  <h2>Ons contacteren - Vraag een gratis prijsofferte aan</h2>

  <div class="row">
    <div class="col-md-7">
      <?php
      /**
       *
       */
      ?>
      <form method="post" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
        <input type="text" required="required" name="naam" placeholder="Jouw naam"
               value="<?PHP if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <input type="email" required="required" name="email" placeholder="Jouw e-mail"
               value="<?PHP if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <textarea required="required" name="bericht"
                  placeholder="Bericht"><?PHP if (isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?></textarea>
        <div class="g-recaptcha" data-sitekey="6Lc8mAETAAAAAByVu6PoZoeYfMIP4TmkC-W1MzaU"></div>
        <input type="submit" name="sendfeedback" value="Verzenden">
      </form>

    </div>
    <div class="col-md-5 contact-info">
      <p>
        Dakwerken Daniels BVBA<br>
        Meistraat 90<br>
        2480 Dessel<br>
      </p>

      <div class="mobile-phone">
        <button class="btn btn-secondary" type="button"><a href="tel:32473548704">+32473548704</a></button>
      </div>
      <div class="phone">
        GSM 0473/548704
      </div>
      <div class="email">
        <script>
          document.write("<a href=\"mail" + "to:" + new Array("swen.daniels", "skynet.be").join("@") + "\">" + "Of contacteer ons via mail" + "</" + "a>");
        </script>
      </div>
    </div>
  </div>
</section>
