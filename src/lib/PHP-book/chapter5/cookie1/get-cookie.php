<?php

?>

<body>
  webブラウザから送信されたクッキーの内容は、以下の通りです。<br>
  <?php foreach ($_COOKIE['name-as-array'] as $name): ?>
  <pre><?php print_r($name)?></pre>
  <?php endforeach; ?>

  <pre><?php print_r($_COOKIE['name1']) ?></pre>

  <pre><?php print_r($_COOKIE) ?></pre>
  
</body>
