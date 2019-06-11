<?php
include 'function.inc.php';

session_destroy();
//echo$_SESSION['username'].$_SESSION['name'].$_SESSION['passwd'];
gotopage('index.php');
?>