<?
if (basename($_SERVER["SCRIPT_FILENAME"]) == 'register.php') {
  $index = 'index.php';
  $register_sel = 'register_sel';
}
?>

<div id="nav">
  <div class="container">

    <ol id="main_nav">
      <li><a href="<? echo $index ?>#what-a">What?</a></li>
      <li><a href="<? echo $index ?>#where-a">Where?</a></li>
      <li><a href="<? echo $index ?>#when-a">When?</a></li>
      <li><a href="<? echo $index ?>#who-a">Who?</a></li>
      <li><a href="<? echo $index ?>#conduct-a">Code of Conduct</a></li>
      <li><a href="register.php" class="<? echo $register_sel ?>">Register</a></li>
    </ol>
    <ol class="social social-nonmobile">
      <li><a href="#"><img src="img/icon-twitter.svg" alt="twitter" /></a></li>
      <li><a href="#"><img src="img/icon-facebook.svg" alt="facebook" /></a></li>
      <li><a href="#"><img src="img/icon-itch.svg" alt="itch" /></a></li>
    </ol>

  </div>
</div>

<ol class="social social-mobile-header">
  <li><a href="#"><img src="img/icon-twitter.svg" alt="twitter" /></a></li>
  <li><a href="#"><img src="img/icon-facebook.svg" alt="facebook" /></a></li>
  <li><a href="#"><img src="img/icon-itch.svg" alt="itch" /></a></li>
</ol>
<br style="clear:both" />
