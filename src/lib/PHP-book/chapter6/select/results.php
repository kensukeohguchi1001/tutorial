<?php
    require_once dirname(__FILE__) . '/functions.php';

    try {
        if (!isset($_GET['title']) || trim($_GET['title'] === '')) {
            return;
        }
        $pdo = connect();
        $statement = $pdo->prepare("SELECT * FROM WHERE title LIKE :title ESCAPE '#' ORDER BY created_at  DESC");

        $statement->bindValue(':title','%'. escapeLIKE($_GET['title']) . '%', PDO::PARAM_STR);
        $statement->execute();
    }  catch (PDOException $e) {
        echo 'something wrong';
        return;
    }
?>

<body>
    <h3>タイトルに「<?=escape($_GET['title'])?>」を含む検索結果</h3>
    <table>
      <tr>
        <th>タイトル</th>
        <th>評価</th>
        <th>ステータス</th>
      </tr>

      <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)):

      <?php endwhile; ?>
    </table>
</body>
