<?php
    // sessionをスタートする
    session_start();
?>

<body>
      <!-- sessionのデータを取り出す -->
    <h2>お問い合わせ確認</h2>
      <!-- 送信する -->
    <p><?= $_SESSION['data']['email']?></p>
    <!-- 入力画面に戻る -->
    <p><?= $_SESSION['data']['message']?></p>

    <a href="thankyou.php">送信する</a><br>
    <a href="input.php">入力画面に戻る</a>
</body>
