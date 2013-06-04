<?php
$url = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$obj = json_decode($url);

$data = "";

for ($i = 0; $i < sizeof($obj); $i++) {
      $data.="<li><a href ='todos.php?jobid=".$obj[$i]->JobID."&compname=".$obj[$i]->CompanyName."&title=".$obj[$i]->Title."'>".$obj[$i]->CompanyName." - ".$obj[$i]->Title."</a></li>";         
  	
  }
?>

<div id="menu">
  <ul>
    <li><?php echo $_SESSION['fname'];?>'s - Jobs</li>
    <?php echo $data; ?>
  </ul>
</div><!--/menu-->
