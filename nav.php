<?php
if (basename($_SERVER["SCRIPT_FILENAME"]) == 'register.php') {
  $index = 'index.php';
  $register_sel = 'register_sel';
}
?>

<div id="nav">
  <div class="container">

    <ol id="main_nav">
      <li><a href="<?php echo $index ?>#what-a">What?</a></li>
      <li><a href="<?php echo $index ?>#why-a">Why?</a></li>
      <li><a href="<?php echo $index ?>#where-a">Where?</a></li>
      <li><a href="<?php echo $index ?>#when-a">When?</a></li>
      <li><a href="<?php echo $index ?>#who-a">Who?</a></li>
      <li><a href="<?php echo $index ?>#conduct-a">Code of Conduct</a></li>
      <li><a href="register.php" class="<?php echo $register_sel ?>">Register</a></li>
    </ol>
    <ol class="social social-nonmobile">
      <?php include 'social.php' ?>
    </ol>

  </div>
</div>

<ol class="social social-mobile-header">
  <?php include 'social.php' ?>
</ol>
<br style="clear:both" />
