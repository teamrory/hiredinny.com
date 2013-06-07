<?php
$urlm = file_get_contents("http://hiredinny.com/private/myjobs/".$_SESSION['username'], true);
$objm = json_decode($urlm);

$data = "";

for ($i = 0; $i < sizeof($objm); $i++) {
      $data.="<li><a href ='todos.php?jobid=".$objm[$i]->JobID."&compname=".$objm[$i]->CompanyName."&title=".$objm[$i]->Title."' rel='external'>".$objm[$i]->CompanyName." <br/><small> ".$objm[$i]->Title."</small></a></li>";

  }

$url = file_get_contents("http://hiredinny.com/private/getProfile/".$_SESSION['username'], true);
$obj = json_decode($url);
$userimg = $obj[0]->pictureUrl;
?>

<nav>
      <ul>
        <li><h3><img src="<?php echo $userimg; ?>"> <?php echo $_SESSION['fname'];?></h3></li>
        <li><strong>Your Jobs</strong></li>
        <?php echo $data; ?>
        <li><a href="welcome.php" rel='external'>Search for Jobs</a></li>
      </ul>
  </nav>
<div id="page">
