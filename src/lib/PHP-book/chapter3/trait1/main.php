<?php

require('MemberModel.php');

$memberModel = new MemberModel();

$memberModel->create('001');
$memberModel->delete('001');

echo nl2br(file_get_contents('MemberModel.log')); // MemberModelが生成したログを画面に表示する

