<?php
session_start();
if (!isset($_SESSION['username']))
  header('Location: index.php');
include 'header.php';
include 'menu.php';

$jobid = $_REQUEST['jobid'];
$compname = $_REQUEST['compname'];
$title = $_REQUEST['title'];

    $meet1='';
    $meet2='';
    $apply1='';
    $apply2='';
    $prep1='';
    $prep2='';
  
if (isset($_REQUEST['tab']))
  {
  if ($_REQUEST['tab'] == "meet")
  {
    $meet1=' class="active"';
    $meet2=' active';
  }
  if ($_REQUEST['tab'] == "apply")
  {
    $apply1=' class="active"';
    $apply2=' active';
  }
  else
  {
    $prep1=' class="active"';
    $prep2=' active';
  }
}
else
  {
    $prep1=' class="active"';
    $prep2=' active';
  }


if (isset($_REQUEST['complete']))
	file_get_contents("http://hiredinny.com/private/updatetodos/".$_REQUEST['complete'], true);


$url = file_get_contents("http://hiredinny.com/private/mytodos/".$_SESSION['username'], true);
$obj = json_decode($url);

$dataprep = "";
$datameet = "";
$dataapply = "";

for ($i = 0; $i < sizeof($obj); $i++)
	if($obj[$i]->jobid == $jobid)
		{
		$temp = "";
    	if ($obj[$i]->link != "")
    		$temp = " - <a href='".$obj[$i]->link."' rel='external'>Link</a>";
         if ($obj[$i]->section == "Prep")
      	   $dataprep.="<li>".$obj[$i]->text.$temp." - <a href ='todos.php?jobid=".$jobid."&compname=".$compname."&title=".$title."&complete=".$obj[$i]->id."&tab=prep' rel='external' class='btn'>Complete</a></li>";
         if ($obj[$i]->section == "Meet")
           $datameet.="<li>".$obj[$i]->text.$temp." - <a href ='todos.php?jobid=".$jobid."&compname=".$compname."&title=".$title."&complete=".$obj[$i]->id."&tab=meet' rel='external' class='btn'>Complete</a></li>";
         if ($obj[$i]->section == "Apply")
           $dataapply.="<li>".$obj[$i]->text.$temp." - <a href ='todos.php?jobid=".$jobid."&compname=".$compname."&title=".$title."&complete=".$obj[$i]->id."&tab=apply' rel='external' class='btn'>Complete</a></li>";
  		}
?>



  <header>
    <div id="menu-button"><a href="" id="menu-btn"><i class="ss-icon">&#xE9A1;</i></a></div>
    <h1><a href="/">HiredinNY</a></h1>
  </header>

  <div id="main">

<div id="profile">
  <h3>Todos for <?php echo $compname; ?></h3>
  <h4><?php echo $title; ?></h4>
</div><!--/profile-->

<ul class="nav nav-tabs">
  <li<?php echo $prep1; ?>><a href="#prep" data-toggle="tab">Prep</a></li>
  <li<?php echo $meet1; ?>><a href="#meet" data-toggle="tab">Meet</a></li>
  <li<?php echo $apply1; ?>><a href="#apply" data-toggle="tab">Apply</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane<?php echo $prep2; ?>" id="prep">
    <ul class="list">
      <?php echo $dataprep; ?>
    </ul>
  </div><!--/prep-->
  <div class="tab-pane<?php echo $meet2; ?>" id="meet">
    <ul class="list">
      <?php echo $datameet; ?>
    </ul>
  </div><!--/meet-->
  <div class="tab-pane<?php echo $apply2; ?>" id="apply">
    <ul class="list">
      <?php echo $dataapply; ?>
    </ul>
  </div><!--/apply-->
</div><!--/tab-content-->

  </div><!--/main-->


<?php include("footer.php"); ?>
