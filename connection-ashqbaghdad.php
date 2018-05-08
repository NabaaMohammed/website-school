<?php
$link=mysqli_connect("localhost","root","") or die("couldnot connect to DB");
    mysqli_select_db($link,"visiter counter") or die("couldnot found DB");

//session_start();

?>