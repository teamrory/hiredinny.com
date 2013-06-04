<?php
$urlm = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$objm = json_decode($urlm);

$data = "";

for ($i = 0; $i < sizeof($objm); $i++) {
      $data.="<li><a href ='todos.php?jobid=".$objm[$i]->JobID."&compname=".$objm[$i]->CompanyName."&title=".$objm[$i]->Title."' rel='external'>".$objm[$i]->CompanyName." - ".$objm[$i]->Title."</a></li>";         
  	
  }
?>

<div id="menu">
  <ul>
    <li><?php echo $_SESSION['fname'];?>'s - Jobs</li>
    <?php echo $data; ?>
  </ul>
</div><!--/menu-->
