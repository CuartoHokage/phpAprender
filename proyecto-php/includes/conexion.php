<?php
$server='localhost';
$username='root';
$password='';
$database='blog_master';
$db=mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf-8'");

// Iniciar la sesion
session_start();