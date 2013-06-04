<?php 
session_start();
if (!isset($_SESSION['username']))
{
	$_SESSION['username']=$_REQUEST['username'];
	$_SESSION['fname']=$_REQUEST['fname'];
}
$username = $_SESSION['username'];
$fname = $_SESSION['fname'];
include 'header.php';
include 'menu.php';
?>

<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>HiredinNY</h1>
  </div><!--/header-->

  <div data-role="content">
    <h4>Welcome, <?php echo $fname?>!</h4>
    <br> <form name="input" action="jobresults.php" data-ajax="false" method="get">
	Job Title Search: <input type="text" name="title">
	<input type="submit" value="Submit">
	</form> 
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
