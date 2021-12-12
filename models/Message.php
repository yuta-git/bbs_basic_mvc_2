<?php

  require_once 'models/Model.php';
  
  class Message extends Model {
    
    public $id;
    public $name;
    public $title;
    public $body;
    public $image;
    public $created_at;
    
    public function __construct ($name = '', $title = '', $body = '', $image = '') {
      $this->name = $name;
      $this->title = $title;
      $this->body = $body;
      $this->image = $image;
    }
    
    public static function all() {
      try {
        $pdo = self::get_connection();
        $stmt = $pdo->query('SELECT * FROM messages ORDER BY id DESC');
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Message');
        $messages = $stmt->fetchAll();
        self::close_connection($pdo, $stmt);
        
        return $messages;
      } catch (PDOException $e) {
        return 'PDO exception' . $e->getMessage();
      }
    }
  
    
  }