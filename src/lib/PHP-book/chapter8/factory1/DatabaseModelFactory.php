<?php

namespace MyApplication;

use MyApplication\Models\UserModel;
// use MyApplication\Models\FriendModel;
// use MyApplication\Models\BlogModel;
// use MyApplication\Models\BlogCategory;

require_once('models/UserModel.php');
// require_once('FriendModel.php');
// require_once('BlogModel.php');
// require_once('BlogCategory.php');

class DatabaseModelFactory
{
    public function createUserModel(): UserModel
    {
        return new UserModel();
    }

    // public function createFriendModel
    // {

    // }
    // public function createBlogModel
    // {

    // }

    // public function createBlogCategory
    // {

    // }

}
