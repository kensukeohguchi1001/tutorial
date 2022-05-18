<?php

namespace MyApplication\Models;

class UserModel
{
    public function find(int $userId)
    {
        echo "ID:{$userId}を持つユーザー情報を取得しました" . PHP_EOL;
    }
}
