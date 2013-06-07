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

  <header>
    <div id="menu-button"><a href="" id="menu-btn"><i class="ss-icon">&#xE9A1;</i></a></div>
    <h1><a href="/">HiredinNY</a></h1>
  </header>

  <div id="main">
    <div class="container">

    <h4>Welcome, <?php echo $fname?>!</h4>
    <form class="form-search" name="input" action="jobresults.php" method="get">
      <input type="text" class="  search-query" name="title" placeholder="Job Title Search">
      <button type="submit" class="btn">Search</button>
    </form>

    </div><!--/container-->
  </div><!--/main-->

<?php include("footer.php"); ?>
