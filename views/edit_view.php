<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>投稿編集</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h1 class="text-center col-sm-12">id: <?= $message->id ?> の投稿編集</h1>
            </div>
            
            <?php if($errors !== null): ?>
            <ul class="row mt-2">
            <?php foreach($errors as $error): ?>  
                <li class="text-center col-sm-12"><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            
            <div class="row mt-2">
                <form class="col-sm-12" action="update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?= $token ?>">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-2 col-form-label">名前</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="name" value="<?= $message->name ?>">
                        </div>
                    </div>
                
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-2 col-form-label">タイトル</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="<?= $message->title ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">内容</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="body" value="<?= $message->body ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">現在の画像</label>
                        <div class="col-10">
                            <img src="upload/<?= $message->image ?>" alt="表示する画像がありません。">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">画像アップロード</label>
                        <div class="col-3">
                            <input type="file" name="image" accept='image/*' onchange="previewImage(this);">
                        </div>
                        <div class="col-7">
                            <img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-1">
                            <button type="submit" class="btn btn-primary">更新</button>
                        </div>
                    </div>
                </form>
             <div class="row mt-5">
                <a href="show.php?id=<?= $message->id ?>" class="btn btn-primary">投稿詳細へ戻る</a>
            </div>
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