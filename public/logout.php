<?php
require '../core/functions.php';
require '../config/keys.php';
require '../core/db_connect.php';

//Write an empty array to the session
$_SESSION=[];

//Destroy the session file for this session
session_destroy();

header('LOCATION: /example.com/public/index.php');
