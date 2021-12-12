<?php

  require_once 'models/Message.php';
  
  $messages = Message::all();





  include_once 'views/index_view.php';