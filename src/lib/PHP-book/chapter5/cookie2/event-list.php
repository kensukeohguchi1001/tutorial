<?php

require_once dirname(__FILE__) . '/EventData.php';
require_once dirname(__FILE__) . '/function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>イベント一覧</h2>

  <ul>
    <?php foreach ($eventData as $eventId => $eventTitle): ?>
      <li>
        <!-- <a href="./event-detail.php?eventId=<?=escape(strval($eventId))?>"> -->
            <?= $eventTitle?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
