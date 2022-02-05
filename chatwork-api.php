<?php
    header("Content-type: text/html; charset=utf-8");
     
    $api_key = "*****"; // APIキー
    $room_id = 260664689; // ルームID
    $url = "https://api.chatwork.com/v2/rooms/260664689/messages"; // API URL
     
    // 送信パラメーター
    $params = array(
        'body' => '店舗が登録されました' // メッセージ内容
    );
     
    // オプション設定
    $options = array(
        CURLOPT_URL => $url, // URL
        CURLOPT_HTTPHEADER => array('X-ChatWorkToken: '. $api_key), // APIキー
        CURLOPT_RETURNTRANSFER => true, // 文字列で返す
        CURLOPT_POST => true, // POST設定
        CURLOPT_POSTFIELDS => http_build_query($params, '', '&'), // POST内容
    );
     
    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
     
    $result = json_decode($response);
     
    // 結果出力
    var_dump($result);

    header("Location: index.php");
exit();