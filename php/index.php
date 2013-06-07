<?php
session_start();
if (isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
?>
<div id="page">
  <header>
    <h1><a href="/">HiredinNY</a></h1>
  </header>

  <div id="main">
    <div class="container">
<P><P>

    <center><a href="http://hiredinny.com/linkedin" class="btn"><i class="ss-icon ss-social">&#xF612;</i> Login with Linkedin</a>

<BR><BR>
    	<img src="logo.png" width="222" height="222">

    	</center>

    </div><!--/container-->
  </div><!--/main-->


<?php include("footer.php"); ?>
