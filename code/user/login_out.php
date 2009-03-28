<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

loginOut($_SESSION["reart_id"]);

session_destroy();
if ("en" == $_GET["language"])
{
	gotoPage( "/index.php?language=en" );
}
else 
{
	gotoPage( "/index.php" );
}

?>