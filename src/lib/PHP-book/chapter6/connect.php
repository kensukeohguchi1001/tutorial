<?php

    ?>
    <body>
    <?php
        try{
            $pdo = new PDO('mysql:host=db; dbname=book_log;', 'book_log', 'pass');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            echo 'connect database';
        } catch (PDOException $e) {
            echo 'something wrong, can not connect database';
        }
    ?>
</body>
