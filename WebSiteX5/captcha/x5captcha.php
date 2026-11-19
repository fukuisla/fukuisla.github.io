<?php
include("../res/x5engine.php");
$nameList = array("8pu","jk6","xfk","2xp","c47","j6y","cs3","6fg","34h","aff");
$charList = array("A","E","K","N","W","E","P","8","V","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
