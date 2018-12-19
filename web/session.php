<?php
if(empty($_SESSION['username'])) {
	include_once "login.html";
	exit;
}
?>