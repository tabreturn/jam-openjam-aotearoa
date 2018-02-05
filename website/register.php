<!DOCTYPE html>

<html lang="en">
<head>
  <title>Open Jam Aotearoa - Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="screen.css" />
</head>
<body id="register_bg">

<div id="bp_ind"></div>


<!-- navigation -->

<div id="nav">
  <div class="container">

    <ol id="main_nav">
      <li><a href="index.html#what-a">What?</a></li>
      <li><a href="index.html#where-a">Where?</a></li>
      <li><a href="index.html#when-a">When?</a></li>
      <li><a href="index.html#who-a">Who?</a></li>
      <li><a href="index.html#conduct-a">Code of Conduct</a></li>
      <li><a href="register.html" class="register_sel">Register</a></li>
    </ol>
    <ol class="social social-nonmobile">
      <li><a href="#"><img src="img/icon-twitter.svg" /></a></li>
      <li><a href="#"><img src="img/icon-facebook.svg" /></a></li>
      <li><a href="#"><img src="img/icon-itch.svg" /></a></li>
    </ol>

  </div>
</div>

<ol class="social social-mobile-header">
  <li><a href="#"><img src="img/icon-twitter.svg" /></a></li>
  <li><a href="#"><img src="img/icon-facebook.svg" /></a></li>
  <li><a href="#"><img src="img/icon-itch.svg" /></a></li>
</ol>
<br style="clear:both" />


<!-- register -->

<div class="section" id="register">
  <div class="container">

    <h1>Register</h1>
    <div class="sect_cont">
      <div class="col-1">
        <h2>Do Not Be a Dick &hellip;</h2>
        <p class="larger">
  <?php

  $msg = "Details: \n";

  foreach($_POST as $key => $value){
    $msg = $msg . $key . ":" . $value . "\n";
  }

  $title = ("Registration: " . $_POST["ref_no"]);

  echo $msg;
  //mail("someone@example.com", $title ,$msg);

  ?>
        </p>
      </div>

  </div>
</div>

<br style="clear:both" />

<ol class="social social-mobile-footer">
  <li><a href="#"><img src="img/icon-twitter.svg" /></a></li>
  <li><a href="#"><img src="img/icon-facebook.svg" /></a></li>
  <li><a href="#"><img src="img/icon-itch.svg" /></a></li>
</ol>

<div id="footnote" class="container">
  <a href="mailto:email@email.com">email@email.com</a><br />
  Open Jam Aotearoa, 2018
</div>

<script src="zenscroll-min.js"></script>

</body>
</html>
