<?php

  require_once dirname(__FILE__) . '/EventData.php';
  require_once dirname(__FILE__) . '/function.php';

  if(isset($_GET['eventId']) && isset($eventData[$_GET['eventId']])) {
      setcookie('recentItems[' . escape($_GET['eventId']) , ']' , date('Y-m-d H:i') , time() + 60 * 240, '/', '', false, true);
  } else {
      die('イベントIDを指定してください');
  }
?>

<body>
<h2><?=escape($eventData[$_GET['eventId']])?></h2>
イベント本文<br>
イベント本文<br>
イベント本文<br>
イベント本文<br>
<br>
<a href="event-list.php">一覧へ戻る</a>
</body>
