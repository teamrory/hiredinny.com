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
    		$temp = " - <a href='".$obj[$i]->link."'>Link</a>";
      	$datat.="<li>".$obj[$i]->section." - ".$obj[$i]->text.$temp." - <a href ='todos.php?jobid=".$jobid."&compname=".$compname."&title=".$title."&complete=".$obj[$i]->id."'>Complete</a></li>"; 
  		}
?>
<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>HiredinNY</h1>
  </div><!--/header-->

  <div data-role="content">
  	<h4>Todos for <?php echo $compname; ?> - <?php echo $title; ?></h4>
      <ul>
      	<?php echo $datat; ?>
      </ul>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
