<?php
    function connect(): PDO
    {
      $pdo = new PDO('mysql:host=db; dbname=book_log;', 'book_log', 'pass');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      return $pdo;
    }
?>

<body>
  <?php

  try {
    $pdo = connect();
    $statement = $pdo->prepare('INSERT INTO reviews(title, author, status, score, summary, created_at)
        VALUES(:title, :author, :status, :score, :summary, CURRENT_TIMESTAMP)');
        $statement->bindValue(':title','進撃の巨人', PDO::PARAM_STR);
        $statement->bindValue(':author','isoyama', PDO::PARAM_STR);
        $statement->bindValue(':status','done', PDO::PARAM_STR);
        $statement->bindValue(':score', 100, PDO::PARAM_INT);
        $statement->bindValue(':summary','perfect', PDO::PARAM_STR);

        echo 'insert done' . PHP_EOL;
        $statement->execute();
        $newId = $pdo->lastInsertId();
        echo 'you already read' . $newId  .' books ';
        } catch (PDOException $e) {
          echo 'something wrong';
        }
  ?>
</body>
