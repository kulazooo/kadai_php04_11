<?php

//bm_update_view.phpのコピー


$id = $_GET['id'];

// DBに接続
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    // ここを修正
    sql_error($stmt);
} else {
    //データが取得できたら。
    $view = $stmt->fetch();
}
// var_dump($view);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="bm_update.php">
        <div class="jumbotron">
            <fieldset>
            <legend>詳細画面</legend>
                <label>店舗名：<p><?= $view['bookname'] ?></p><br>
                <label>URL：<p><?= $view['url'] ?></p><br>
                <label>コメント：<p><?= $view['comment'] ?></p><br>
                <br>
                <input type="hidden" name="id" value=<?= $view['id'] ?>><br> 
            </fieldset>
        </div>
    </form>
</body>

</html>