<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <title>簡易掲示板</title>
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <h1 class="col-sm-12 text-center">投稿一覧</h1>
    </div>
    
    <?php if(count($messages) !== 0): ?>
    <table class="col-sm-12 table table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>ユーザ名</th>
        <th>タイトル</th>
        <th>内容</th>
        <th>投稿時間</th>      
      </tr>
      <?php foreach($messages as $message): ?>
      <tr>
        <th><?= $message->id ?></th>
        <th><?= $message->name ?></th>
        <th><?= $message->title ?></th>
        <th><?= $message->body ?></th>
        <th><?= $message->created_at ?></th>
      </tr>
      <?php endforeach; ?>
    </table>
    
    <?php else: ?>
    <p>投稿は1件もありません</p>
    <?php endif; ?>
    
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
  <script src="js/script.js"></script>
</body>
</html>