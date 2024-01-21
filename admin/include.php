<?php
$SERVER = "localhost";
$USER = "root";
$PASS = "";
$DB = "shahed";

$mysqli = new mysqli($SERVER,$USER,$PASS,$DB);

if($mysqli -> connect_errno){
    echo "Failed to connect: ".$mysqli -> connect_error;
    exit();
}