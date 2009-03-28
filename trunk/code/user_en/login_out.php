<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

loginOut($_SESSION["reart_id"]);

session_destroy();

gotoPage( "/index.php" );

?>