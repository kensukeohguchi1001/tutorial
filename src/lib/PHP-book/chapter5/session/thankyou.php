<?php
    function deleteSession()
    {
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), $params['domain'], $params['secure'], $params['httponly']);
        }
    }
    session_start();
?>

<body>
  <h2>お問い合わせ完了</h2>
  <p>お問い合わせありがとうございました。デバッグ情報</p>
  <pre><?php print_r($_SESSION); ?></pre>
  <?php $_SESSION = [] ?>
  <?php deleteSession();  ?>
  <?php session_destroy(); ?>
</body>
