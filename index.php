<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 28/08/2016
 * Time: 21:48
 */ ?>
<?PHP
// form handler
if (isset($_POST['sendfeedback'])) {
  $name = $_POST['naam'];
  $email = $_POST['email'];
  $message = $_POST['bericht'];
  $messageContent = "Naam afzender: $name \nBericht: \n$message";

  // send email and redirect
  $to = "swen.daniels@skynet.be, stefanvandenborne@outlook.com";
  $subject = "Contact van de website";
  $headers = "From:" . $email . "\r\n";
  mail($to, $subject, $messageContent, $headers);
  header("Location: http://www.illutek.eu/dak/verzonden.php");
  exit;
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
  <script src="vendor/wow/dist/wow.js"></script>
  <script>new WOW().init(); </script>

  <title>Dakwerken Daniels</title>
</head>
<body>

<?php include 'includes/section-header.inc.php'; ?>

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

