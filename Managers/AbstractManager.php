<?php


abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        

$host = "localhost";
$port = "3306";
$dbname = "nicolassouply_userbase_poo";

$user = "root";
$password = "";

$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
$db = new PDO(
  $connexionString,
    $user,
    $password ,
);
}
}