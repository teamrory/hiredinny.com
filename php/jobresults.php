<?php
session_start();
if (!isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';

$title = $_REQUEST['title'];


if (isset($_REQUEST['jobid']))
{
	file_get_contents("http://hiredinny.com/private/insert/job?id=".$_SESSION['username']."&jobid=".$_REQUEST['jobid']."&compid=".$_REQUEST['compid'], true);
}

include 'menu.php';


$url = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$obj = json_decode($url);

$myjobs = array();
for ($i = 0; $i < sizeof($obj); $i++) {
    array_push($myjobs, $obj[$i]->JobID);
  }


$url = file_get_contents("http://hiredinny.com/ws/jobs/title/search/".$title, true);
$obj = json_decode($url);

$dataj = "";

for ($i = 0; $i < sizeof($obj); $i++)
	if(!in_array($obj[$i]->JobID, $myjobs))
		{
  	$dataj.="<li>".$obj[$i]->CompanyName." - ".$obj[$i]->Title." - <a href ='jobresults.php?title=".$title."&jobid=".$obj[$i]->JobID."&compid=".$obj[$i]->CompanyID."' rel='external'>Select Job</a></li>";
  	}
?>


  <header>
    <div id="menu-button"><a href="" id="menu-btn"><i class="ss-icon">&#xE9A1;</i></a></div>
    <h1><a href="/">HiredinNY</a></h1>
  </header>

  <div id="main">
    <div class="container">

   <h4>Job Results for "<?php echo $title; ?>"</h4>
       <ul>
        <?php echo $dataj; ?>
      </ul>
    </div><!--/container-->
  </div><!--/main-->


<?php include("footer.php"); ?>
