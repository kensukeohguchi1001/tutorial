<?php

setcookie('name-as-map[0]', 'value0', time() + 60 * 60, '/', '', false, true);
setcookie('name-as-map[1]', 'value1', time() + 60 * 60, '/', '', false, true);
setcookie('name-as-map[2]', 'value2', time() + 60 * 60, '/', '', false, true);

?>

<body>
  <p>PHPからクッキーを送出しました</p>
</body>
