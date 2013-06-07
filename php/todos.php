<?php
session_start();
if (!isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
include 'menu.php';

$jobid = $_REQUEST['jobid'];
$compname = $_REQUEST['compname'];
$title = $_REQUEST['title'];

if (isset($_REQUEST['complete']))
	file_get_contents("http://hiredinny.com/private/updatetodos/".$_REQUEST['complete'], true);


$url = file_get_contents("http://hiredinny.com/private/mytodos/".$_SESSION['username'], true);
$obj = json_decode($url);

$datat = "";

for ($i = 0; $i < sizeof($obj); $i++)
	if($obj[$i]->jobid == $jobid)
		{
		$temp = "";
    	if ($obj[$i]->link != "")
    		$temp = " - <a href='".$obj[$i]->link."' rel='external'>Link</a>";
      	$datat.="<li>".$obj[$i]->section." - ".$obj[$i]->text.$temp." - <a href ='todos.php?jobid=".$jobid."&compname=".$compname."&title=".$title."&complete=".$obj[$i]->id."' rel='external'>Complete</a></li>";
  		}
?>



  <header>
    <div id="menu-button"><a href="" id="menu-btn"><i class="ss-icon">&#xE9A1;</i></a></div>
    <h1><a href="/">HiredinNY</a></h1>
  </header>

  <div id="main">

<div id="profile">
Name
</div><!--/profile-->

<ul class="nav nav-tabs">
  <li class="active"><a href="#prep" data-toggle="tab">Prep</a></li>
  <li><a href="#meet" data-toggle="tab">Meet</a></li>
  <li><a href="#apply" data-toggle="tab">Apply</a></li>
</ul>

<h4>Todos for <?php echo $compname; ?> - <?php echo $title; ?></h4>

<div class="tab-content">
  <div class="tab-pane active" id="prep">
    <ul>
      <li>Only pull in <strong>Prep</strong></li>
      <?php echo $datat; ?>
    </ul>
  </div><!--/prep-->
  <div class="tab-pane" id="meet">
    <ul>
      <li>Only pull in <strong>Meet</strong></li>
      <?php echo $datat; ?>
    </ul>
  </div><!--/meet-->
  <div class="tab-pane" id="apply">
    <ul>
      <li>Only pull in <strong>Apply</strong></li>
      <?php echo $datat; ?>
    </ul>
  </div><!--/apply-->
</div><!--/tab-content-->

  </div><!--/main-->


<?php include("footer.php"); ?>
