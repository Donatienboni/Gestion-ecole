<?php
session_start();
require 'dbcon.php';

session_destroy();
header('location: ../../../admin/index.php');
exit;
?>