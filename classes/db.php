<?php
class db {
  private static $_instance = null;
  private $_pdo,
  $_query,
   $_error = false, 
   &_results,
     &_count = 0; 


     privat function _construct() {
       try {
        $this->_pdo = new PDO('mysql:host=' . config::get('mysql/host') . ' ;dbname=' . config::get('mysql/db') , config::get('mysql/username'), config::get('mysql/password'));
       echo 'connected'
      }catch(PDOException $e) {
         die($e->getMessage());
       }
     }

     public static function getInstance() {
       if(!isset(self::$_instance)) {
         self::$_instance = new DB();
       }
       return self::$_instance;
     }
     public function query ($sql, $params = array()) {
       $this->_error = false;
       if($this->_query = $this->_pdo->prepare($sql)) {
         echo 'success'
       }
     }
}