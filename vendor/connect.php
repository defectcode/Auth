<?php

function OpenCon(){
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test';

    $connect = new mysqli($dbhost,$dbuser,$dbpass,$db);

    if(!$connect)
    {
        die("Error connect to DataBase!");
    }
}