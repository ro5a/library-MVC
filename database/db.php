<?php
$dns = "mysql:host=localhost";
$username = 'root';
$password = '';


class Database
{
  private $conn;                 
  private $select_query;
  

  public function __construct($db_name)
  {
    global $dns, $username, $password;
   

    $this->conn = new PDO($dns, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $this->conn->exec("CREATE DATABASE IF NOT EXISTS `$db_name`; USE `$db_name`");
  }
