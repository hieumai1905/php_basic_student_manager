<?php
$HOSTNAME = "localhost";
$DATABASENAME = "TestConnectPhp";
$USERNAME = "root";
$PASSWORD = "19052002";

function getConnectSQL() {
    global $HOSTNAME, $DATABASENAME, $USERNAME, $PASSWORD;
    $connect = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME);

    if (!$connect) {
        die("Connect failed: " . mysqli_connect_error());
    }

    return $connect;
}
