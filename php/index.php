<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>HiNY</h1>
  </div><!--/header-->

  <div data-role="content">
    <h4>Current Pages</h4>
    <ul>
      <li><a href="/login">Login</a></li>
      <li><a href="/registration">Registration</a></li>
      <li><a href="/archived">Archived</a></li>
    </ul>

    <h4>Notes</h4>
    <ul>
      <li>I started to build this from scratch, then I figured it might be easier for others if we built with jQuery Mobile.</li>
      <li>You can find all the demo or example for <a href="http://view.jquerymobile.com/1.3.1/dist/demos/">page elements here</a></li>
      <li>I am using <a href="http://symbolicons.com/">Symbol Icons</a> for...well the icons.</li>
      <li>Each page had 2 includes; header.php, footer.php, and menu.php. These items contain the shit that gets repeated.</li>
    </ul>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
