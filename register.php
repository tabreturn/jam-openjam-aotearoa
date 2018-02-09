<!DOCTYPE html>

<html lang="en">
<head>
  <title>Open Jam Aotearoa - Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" href="screen.css" />
</head>


<!-- response email template

<?php
$admin = 'webmaster@domain.com';
$title = ('Open Jam Aotearoa Registration in Process');

if ($_POST['firstname']) {
  $register_display = 'none';
  $msg = '
Registration:
';

  foreach ($_POST as $key => $value) {
    $msg = $msg . $key . ': ' . $value . '
    ';
  }

  echo $msg;
  mail($admin, $title ,$msg, ('From: ' . $admin));

  $msg =
'Thanks, ' . $_POST['firstname'] . '
... or should I say, ' . $_POST['alias'] . ' ;)

We are stoked that you are joining our Open Jam Aotearoa!

Your registration is being processed at the moment and will be confirmed by an admin shortly. If you do not hear back from us within 24 hours please directly contact:

openjamaotearoa@gmail.com

Please be aware that once we have reached a number of 40 participants we will put you on a waitlist.

Nga mihi nui
The Open Jam Aotearoa team';

  echo $msg;
  mail($_POST['email'], $title ,$msg, ('From: ' . $admin));
}
else {
  $confirmation_display = 'none';
}
?>
-->


<body id="register_bg">

<div id="bp_ind"></div>


<!-- navigation -->

<?php include 'nav.php'; ?>


<!-- register -->

<div class="section" id="register" style="display:<?php echo $register_display ?>">
  <div class="container">
    <form method="post" action="register.php">

      <h1>Register</h1>
      <div class="sect_cont">
        <div class="col-1">
          <h2>Almost there &hellip;</h2>
          <p class="larger">
            Please fill out the form below to register (we promise to be
            responsible with your info!). Please be aware that once we have
            reached a number of 40 participants we will put you on a waitlist.
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
          <em>optional</em>
        </div>

        <br style="clear:both" /><br style="clear:both" />

        <div class="col-1">
          <label>
            <input name="coc" type="checkbox" required />
            I agree to all of the terms in the <a href="index.php#conduct-a">Code of Conduct</a>
          </label>
          <br style="clear:both" />
          <label>
            <input name="age" type="checkbox" required />
            I confirm that I am over 18 years of age
          </label>
          <br style="clear:both" />
          <label>
            <input name="cash" type="checkbox" required />
            I'll arrive with my $20 cash on Fri Mar 9, 6 PM
          </label>
          <input class="register_btn" type="submit" value="Make it so!" />
        </div>
      </div>

    </form>
  </div>
</div>


<!-- confirmation -->

<div class="section" id="confirmation" style="display:<?php echo $confirmation_display ?>">
  <div class="container">

    <h1>Register</h1>
    <div class="sect_cont">
      <div class="col-1">

        <h2>Thanks <?php echo $_POST['firstname'] ?></h2>
        <p>
          &hellip; or should I say, <?php echo $_POST['alias'] ?> ;)
        </p>
        <p>
          We are stoked that you are joining our Open Jam Aotearoa!
        </p>
        <p>
          Your registration is being processed at the moment and will be
          confirmed by an admin shortly. If you do not hear back from us within
          24 hours please directly contact:
          <a href="mailto:openjamaotearoa@gmail.com">openjamaotearoa@gmail.com</a>
        </p>
        <p>
          Please be aware that once we have reached a number of 40 participants
          we will put you on a waitlist.
        </p>
        <p>
          Ngā mihi nui,<br />
          The Open Jam Aotearoa team
        </p>

      </div>
  </div>
</div>
<br style="clear:both" />


<!-- footer -->

<?php include 'footer.php'; ?>

</body>
</html>
