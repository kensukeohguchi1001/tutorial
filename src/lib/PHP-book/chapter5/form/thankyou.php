<body>
  <?php
  function escape($val)
  {
    return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  }
  if (!isset($_POST['operation'])) {
    echo 'この画面への直接アクセスは許可されていません';
  }

  ?>

  <h2>お問い合わせを受付つけました。入力内容は以下の通りです。</h2>
  <table border='1'>
    <tr>
      <th>お名前</th>
      <td>
        <$=escape($$_POST['simei'])?>
      </td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>
        <$=escape($$_POST['email'])?>
      </td>
    </tr>
    <tr>
      <th>地域</th>
      <td>
        <$=escape($$_POST['area'])?>
      </td>
    </tr>
    <tr>
      <th>お問い合わせ種別</th>
      <td>
        <$=escape($$_POST['type'])?>
      </td>
    </tr>
    <tr>
      <th>お問い合わせ内容</th>
      <td>
        <$=escape($$_POST['inquiry'])?>
      </td>
    </tr>
    <tr>
      <th>お得な情報をメールで受け取りますか</th>
      <td>
        <$=escape($$_POST['news_type'])?>
      </td>
    </tr>
  </table>
