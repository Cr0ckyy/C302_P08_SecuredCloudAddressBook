<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "c302_p08";
// Open a new connection to the MySQL server
$link = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB) or
die(mysqli_connect_error()); // returns a string description of the last connect error

?>