<?php

class Model {
  
  protected static function get_connection(){
    try {
  
      $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
      );
      
      $pdo = new PDO('mysql:host=localhost;dbname=bbs_basic_mvc', 'root', '', $options);
      return $pdo;
      
    } catch (PDOException $e) {
      return 'PDO exception: ' . $e->getMessage();
    }
    
  }
  
  protected static function close_connection($pdo, $stmt) {
    try {
      
      $pdo = null;
      $stmt = null;
      
    } catch (PDOException $e) {
        return 'PDO exception: ' . $e->getMessage();
    }
  }


  
}

