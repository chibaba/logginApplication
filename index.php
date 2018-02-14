<?php
require_once 'core/init.php';

$userInsert = DB::getInstance()->update('users', 3 , array(
   'password'=> 'newpassword';
   'name' => 'dale barret';
));
 

// for querying data from the database
//$user = DB::getInstance()->query('users', array('username', '=', 'alex'))

//if(!$user->count) {
  echo 'no user'
//} else {
  //foreach($user->results() as $user) {
    //echo $user->username '<br>';
  //}
//}