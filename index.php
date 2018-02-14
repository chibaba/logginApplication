<?php
require_once 'core/init.php';
 
$user = DB::getInstance()->get('users', array('username', '=', 'alex'))

if($user->error) {
  echo 'no user'
} else {
  echo 'OK';
}