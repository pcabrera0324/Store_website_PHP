<?php

$db = mysqli_connect("localhost","cabrerp1_project","Montclair123","cabrerp1_project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>