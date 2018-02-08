<!DOCTYPE html>

<!--
<?

if ($_POST['firstname']) {
  $register_display = 'none';
  $msg = 'Registration: \n';
  $title = ('Registration: ' . $_POST['ref_no']);
  $admin = 'webmaster@example.com';

  foreach ($_POST as $key => $value) {
    $msg = $msg . $key . ": " . $value . "\n";
  }

  echo $msg;
  //mail('admin@example.com', $title ,$msg, ('From: '.$admin));

  $msg = 'Thanks, ' . $_POST['firstname'] . '\n\n' .
         'If you haven\'t paid yet, please do so using the following details: \n' .
         'Bank: ANZ, New Zealand \n' .
         'Account: 01-2345-678910-00 \n' .
         'Reference: ' . $ref . '\n\n' .
         'We\'re doing the processing manually, so please be patient. Our admin crew will send a confirmation as soon as they can.';
  echo $msg;
  //mail($_POST['email'], $title ,$msg, ('From: '.$admin));
}
else {
  $confirmation_display = 'none';
}

?>
-->


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

<? include 'nav.php'; ?>


<!-- register -->

<div class="section" id="register" style="display:<? echo $register_display ?>">
  <div class="container">
    <form method="post" action="register.php">

      <h1>Register</h1>
      <div class="sect_cont">
        <div class="col-1">
          <h2>Almost there &hellip;</h2>
          <p class="larger">
          Et nobis tempore quibusdam non et ab. Enim ab impedit magni nemo
          perferendis voluptatem. Neque necess itatibus quibusdam quo delectus
          asperiores eveniet.
          </p>
        </div>

        <div class="col-2">
          <label for="firstname">First Name</label>
          <input name="firstname" type="text" required />
          <label for="lastname">Last Name</label>
          <input name="lastname" type="text" required />
          <label for="alias">Alias</label>
          <input name="alias" type="text" required />
          <em>this will appear on your lanyard</em>
        </div>
        <div class="col-2">
          <label for="email">Email</label>
          <input name="email" type="email" required />
          <label for="mobile">Mobile #</label>
          <input name="mobile" type="text" required/>
        </div>
        <br style="clear:both" />

        <div class="col-1">
          <input class="register_btn" type="submit" value="Make it so!" />
        </div>
      </div>

    </form>
  </div>
</div>


<!-- confirmation -->

<div class="section" id="confirmation" style="display:<? echo $confirmation_display ?>">
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

      </div>
  </div>
</div>
<br style="clear:both" />


<!-- footer -->

<? include 'footer.php'; ?>

</body>
</html>
