<?php

$con = mysqli_connect("localhost","root","","db_gestion_ecole");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
