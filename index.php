<?php
include "models/db.php";
$db = new database;
$db->connect();
require_once('controllers/controller.php');
?>