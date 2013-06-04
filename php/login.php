<?php 
session_start();
if (isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
include 'menu.php';
?>

<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>Login</h1>
  </div><!--/header-->

  <div data-role="content">
    <h2>Hired<span>in</span>NY</h2>
    <a href="http://hiredinny.com/linkedin" class="btn"><i class="ss-icon ss-social">&#xF612;</i> Connect Linkedin Account</a>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
