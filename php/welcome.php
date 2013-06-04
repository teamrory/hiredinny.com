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
      
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
