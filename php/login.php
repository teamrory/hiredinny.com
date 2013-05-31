<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>Login</h1>
  </div><!--/header-->

  <div data-role="content">
    <h2>Hired<span>in</span>NYC</h2>
    <a href="" class="btn"><i class="ss-icon ss-social">&#xF612;</i> Connect Linkedin Account</a>
    <input name="text-basic" id="text-basic" value="" type="text" placeholder="Email">
    <input name="password" id="password" value="" autocomplete="off" type="password" placeholder="Password">
    <a href="#" data-role="button">Sign In</a>
    <a href="">Forgot Password</a>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
