<?php
// 0. SESSION開始！！
session_start();

if($_SESSION['chk_ssid'] != session_id()) {
    // exit('LOGIN ERROR');
    header('Location: select_view.php');
 }else{
     session_regenerate_id(true);
     $_SESSION['chk_ssid'] = session_id();
}
require_once('funcs.php');
$pdo = db_conn();



//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="bm_update_view.php?id=' . $result['id'] . '">';
        $view .= $result['indate'] . '：' . $result['bookname'];
        $view .= '</a>';

        $view .= '<a href="delete.php?id=' . $result['id'] . '">';
        $view .= '[ 削除 ]';
        $view .= '</a>';

        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <div class="navbar-header"><a class="navbar-brand" href="index.php">TOP</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="user_list.php">ユーザー一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="bm_list_view.php">BOOK一覧</a></div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="bm_update_view.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>
