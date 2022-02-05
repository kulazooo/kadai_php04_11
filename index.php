<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/design.css" rel="stylesheet">
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
                <div class="navbar-header"><a class="navbar-brand" href="register.php">新規ユーザー登録</a></div>
                <div class="navbar-header"><a class="btn btn-border-shadow" href="login.php" >LOGIN</a></div>
                <div class="navbar-header"><a class="btn btn-border-shadow" href="logout.php">LOGOUT</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend>
                <label>店舗名：<input type="text" name="bookname"></label><br>
                <label>URL：<input type="url" name="url"></label><br>
                <label>コメント：<textarea  rows="4" cols="40" name="comment"></textarea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="register.php">ユーザー登録</a></div>
            </div>
        </nav>
</body>

</html>
