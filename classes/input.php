<?php
class input {
  public static function exists ($type = 'post') {
    switch($type) {
       case 'post':
       return (!empty($_POST)) ? true : false;

       break;
       case 'get';

       break'';
       default '';
       return false
       break;

    }
  }
}