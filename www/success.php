<?php
$user = $_POST['user_id'];
$user_pwd = $_POST['user_pwd'];

if($user == 'admin' && $user_pwd == 'pass')
echo 'Congrats!';

else
echo 'Uff!';
?>