<?php 
session_start();
if (!isset($_SESSION['username']))
  header('Location: welcome.php');
include 'header.php';
include 'menu.php';

$title = $_REQUEST['title'];

$url = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$obj = json_decode($url);

$myjobs = array();
for ($i = 0; $i < sizeof($obj); $i++) {
    array_push($myjobs, $obj[$i]->JobID);
  }

if (isset($_REQUEST['jobid']))
{
	file_get_contents("http://hiredinny.com/private/insert/job?id=".$_SESSION['username']."&jobid=".$_REQUEST['jobid']."&compid=".$_REQUEST['compid'], true);
}

$url = file_get_contents("http://hiredinny.com/ws/jobs/title/search/".$title, true);
$obj = json_decode($url);

$dataj = "";

for ($i = 0; $i < sizeof($obj); $i++)
	if(!in_array($obj[$i]->JobID, $myjobs))
		{	 
  	$dataj.="<li>".$obj[$i]->CompanyName." - ".$obj[$i]->Title." - <a href ='http://hiny.com/jobresults.php?jobid=".$obj[$i]->JobID."&compid=".$obj[$i]->CompanyID."&title=".$title."' data-ajax='false'>Select Job</a></li>"; 
  	}
?>
<div data-role="page">

  <div data-role="header">
    <a href="#"class="showMenu"><i class="ss-icon">&#xE9A1;</i></a>
    <h1>HiredinNY</h1>
  </div><!--/header-->

  <div data-role="content">
  	<h4>Job Results for "<?php echo $title; ?>"</h4>
       <ul>
      	<?php echo $dataj; ?>
      </ul>
  </div><!--/content-->

</div><!--/page-->

<?php include("footer.php"); ?>
