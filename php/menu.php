<?php
$urlm = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$objm = json_decode($urlm);

$data = "";

for ($i = 0; $i < sizeof($objm); $i++) {
      $data.="<li><a href ='todos.php?jobid=".$objm[$i]->JobID."&compname=".$objm[$i]->CompanyName."&title=".$objm[$i]->Title."' rel='external'>".$objm[$i]->CompanyName." - ".$objm[$i]->Title."</a></li>";

  }
?>

<nav>
      <ul>
          <!-- <li><strong><?php echo $_SESSION['fname'];?>'s - Jobs</strong></li> -->
          <li><strong>Your Jobs</strong></li>
          <?php echo $data; ?>
      </ul>
  </nav>
<div id="page">
