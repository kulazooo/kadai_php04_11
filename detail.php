<?php

// 0. SESSION開始！！
session_start();

if($_SESSION['chk_ssid'] != session_id()) {
    // exit('LOGIN ERROR');
    header('Location: bm_list_view.php');
 }else{
     session_regenerate_id(true);
     $_SESSION['chk_ssid'] = session_id();
}


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
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
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
    <form method="POST" action="update2.php">
        <div class="jumbotron">
            <fieldset>
            <legend>詳細画面</legend>
                <label>店舗名：<input type="text" name="bookname" value=<?= $view['bookname'] ?>></label><br>
                <label>URL：<input type="text" name="url" value=<?= $view['url'] ?>></label><br>
                <label>コメント：<textarea name="comment" rows="4" cols="40"><?= $view['comment'] ?></textarea></label><br>
                <br>
                <input type="hidden" name="id" value=<?= $view['id'] ?>><br>
                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
</body>

</html>