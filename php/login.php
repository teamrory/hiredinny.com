<?php
session_start();
if (isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
include 'menu.php';
?>

  <header>
    <div id="menu-button"><a href="" id="menu-btn"><i class="ss-icon">&#xE9A1;</i></a></div>
    <h1><a href="/">Login</a></h1>
  </header>

  <div id="main">
    <div class="container">

  <h2>Hired<span>in</span>NY</h2>
    <a href="http://hiredinny.com/linkedin" class="btn"><i class="ss-icon ss-social">&#xF612;</i> Connect Linkedin Account</a>

    </div><!--/container-->
  </div><!--/main-->


<?php include("footer.php"); ?>
