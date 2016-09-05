<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 28/08/2016
 * Time: 21:48
 */

// form handler
if (isset($_POST['sendfeedback'])) {
  $name = $_POST['naam'];
  $email = $_POST['email'];
  $message = $_POST['bericht'];
  $messageContent = "Naam afzender: $name \nBericht: \n$message";

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $privatekey = "6Lc8mAETAAAAAIgupbLt40rKHl506Fip8JIp-Hds";

  $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip".$_SERVER['REMOTE_ADDR']);

  $data = json_decode($response);

  if (isset($data->success) AND $data->success == true) {
    // send email and redirect
    $to = "swen.daniels@skynet.be, stefanvandenborne@gmail.com";
    $subject = "Contact van de website";
    $headers = "From:" . $email . "\r\n";
    mail($to, $subject, $messageContent, $headers);
    header("Location: http://www.illutek.eu/dak/index.php?sendFeedback=true");
  } else {

    header("Location: http://www.illutek.eu/dak/index.php?CaptchaFail=true");

  }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendor/animate.css/animate.css">
  <link rel="stylesheet" href="css/style.min.css">
  <script src="vendor/jquery/dist/jquery.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="vendor/jquery.stellar/jquery.stellar.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="vendor/wow/dist/wow.js"></script>
  <script>new WOW().init(); </script>

  <title>Dakwerken Daniels</title>
</head>
<body>

<?php include 'includes/section-header.inc.php'; ?>

<?php
/**
 * Melding als form verzonden is
 */
if (isset($_GET['sendFeedback'])) { ?>
  <section class="container wow fadeIn" data-wow-duration="3s">
    <div class="col-md-12 successfully-sent">
      <p>Je aanvraag is verzonden we nemen zo snel mogelijk contact met u op.</p>
    </div>
  </section>
<?php }

if (isset($_GET['CaptchaFail'])) { ?>
  <section class="container wow fadeIn" data-wow-duration="3s">
    <div class="col-md-12 successfully-sent">
      <p>Captcha fout. Probeer eens opnieuw.</p>
    </div>
  </section>
<?php } ?>

<div class="aboutus-banner"></div>

<?php

include 'includes/section-aboutus.inc.php';

include 'includes/section-business.inc.php';

?>

<div class="contact-banner"></div>

<?php include 'includes/section-contact.inc.php'; ?>

<div class="foto-banner"></div>

<?php

include 'includes/section-photo.inc.php';

include 'includes/footer.inc.php';

?>

</body>
</html>

