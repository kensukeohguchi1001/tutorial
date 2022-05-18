<?php

namespace MyApplication;

require_once('DatabaseModelFactory.php');

class BlogController
{
      private $modelFactory;

      public function __construct()
      {
            $this->modelFactory = new DatabaseModelFactory();
      }

      public function show(int $userId): void
      {
          $user = $this->modelFactory->createUserModel()->find($userId);
      }

}

$controller = new BlogController();
$controller->show(1001);
