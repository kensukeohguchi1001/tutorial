<?php
function connect(): PDO
{
  $pdo = new PDO('mysql:host=db; dbname=book_log;', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  return $pdo;
}

try {
  $pdo = connect();
  echo 'データベースへの接続に成功しました' . PHP_EOL;
} catch (Exception $e) {
  echo 'something wrong' . PHP_EOL;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トランザクション</title>
</head>

<body>

  <?php

  $pdo->beginTransaction();

  try {
    $statement = $pdo->prepare('INSERT INTO reviews(title, author, status, score, summary, created_at)
        VALUES(:title, :author, :status, :score, :summary, CURRENT_TIMESTAMP)');
    $statement->bindValue(':title', '進撃の巨人', PDO::PARAM_STR);
    $statement->bindValue(':author', 'isoyama', PDO::PARAM_STR);
    $statement->bindValue(':status', 'done', PDO::PARAM_STR);
    $statement->bindValue(':score', 100, PDO::PARAM_INT);
    $statement->bindValue(':summary', 'perfect', PDO::PARAM_STR);

    $statement->execute();
    echo 'insert done' . PHP_EOL;

    $statement = $pdo->prepare('transaction test');

    $statement = $pdo->prepare('INSERT INTO reviews(title, author, status, score, summary, created_at)
        VALUES(:title, :author, :status, :score, :summary, CURRENT_TIMESTAMP)');
    $statement->bindValue(':title', '進撃の巨人', PDO::PARAM_STR);
    $statement->bindValue(':author', 'isoyama', PDO::PARAM_STR);
    $statement->bindValue(':status', 'done', PDO::PARAM_STR);
    $statement->bindValue(':score', 100, PDO::PARAM_INT);
    $statement->bindValue(':summary', 'perfect', PDO::PARAM_STR);

    $statement->execute();
    echo 'insert done2' . PHP_EOL;

    $pdo->commit();
    echo 'everything ok' . PHP_EOL;
  } catch (Exception $e) {
    $pdo->rollBack();
    echo  'Exception was thrown, something wrong' . PHP_EOL;
  }

  ?>


</body>

</html>
