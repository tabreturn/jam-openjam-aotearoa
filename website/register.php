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

        <h2>Thanks <? echo $_POST['firstname'] ?></h2>
        <p>
          &hellip; or should I say, <? echo $_POST['alias'] ?> ;)
        </p>
        <p >
          All that's left to do is make a payment of <strong>$20</strong> to
          this account:
        </p>
        <p class="larger">
          Bank: <strong>ANZ, New Zealand</strong><br />
          Account: <strong>01-2345-678910-00</strong><br />
          Reference:
          <strong>
            <? $ref = (strtoupper(
                 substr($_POST['firstname'],0,2) .
                 substr($_POST['lastname'], 0,2) .
                 substr($_POST['alias'],    0,2) .
                 substr($_POST['mobile'],    -2)
               ));
               echo $ref;
            ?>
          </strong>
        </p>
        <p>
          We're doing the processing manually, so please be patient. Our admin
          crew will send a confirmation as soon as they can.
        </p>

        <!--
        <?
        $msg = 'Registration: \n';
        $title = ('Registration: ' . $_POST['ref_no']);

        foreach ($_POST as $key => $value) {
          $msg = $msg . $key . ": " . $value . "\n";
        }

        echo $msg;
        //mail('admin@example.com', $title ,$msg, 'From: webmaster@example.com');

        $msg = 'Thanks, ' . $_POST['firstname'] . '\n\n' .
               'If you haven\'t paid yet, please do so using the following details: \n' .
               'Bank: ANZ, New Zealand \n' .
               'Account: 01-2345-678910-00 \n' .
               'Reference: ' . $ref . '\n\n' .
               'We\'re doing the processing manually, so please be patient. Our admin
                crew will send a confirmation as soon as they can.';
        echo $msg;
        //mail('registrant@example.com', $title ,$msg, 'From: admin@example.com');
        ?>
        -->

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
  Open Jam Aotearoa, 2018 | <a href="mailto:email@email.com">email@email.com</a><br />
  <a href="https://github.com/tabreturn/openjam-aotearoa"> website theme</a>
</div>

<script src="zenscroll-min.js"></script>

</body>
</html>
