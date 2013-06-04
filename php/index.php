<?php 
session_start();
if (isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
include 'menu.php';
?>

<div data-role="page">

  <div data-role="header">
    <h1>HiredinNY</h1>
  </div><!--/header-->

  <div data-role="content">
    <h4>Current Pages</h4>
    <ul>
      <li><a href="/login.php">Login</a></li>
    </ul>
    <h4>Kennedy's Notes</h4>
    <ul>
      <li>I shouldn't do front end stuff and this is why...</li>
      <li>Login through LinkedIn then search for a job title and then select a job or two.</a></li>
      <li>Then the menu button in the upper left should show the jobs you selected.  Click on one of them to see your todos for that job.</li>
      <li>It's functional but can someone please pretty this up a bit.</li>
    </ul>


    <h4>Kennedy's Notes</h4>
    <ul>
      <li>I started to build this from scratch, then I figured it might be easier for others if we built with jQuery Mobile.</li>
      <li>You can find all the demo or example for <a href="http://view.jquerymobile.com/1.3.1/dist/demos/">page elements here</a></li>
      <li>I am using <a href="http://symbolicons.com/">Symbol Icons</a> for...well the icons.</li>
      <li>Each page had 2 includes; header.php, footer.php, and menu.php. These items contain the shit that gets repeated.</li>
    </ul>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
