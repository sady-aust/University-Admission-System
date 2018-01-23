<?php

function createConnection(){
    $host = "localhost";
    $user = "root";

    $databaseName = "universityadmissionsystem";
    $connection = mysqli_connect($host,$user,"",$databaseName);

    return $connection;
}