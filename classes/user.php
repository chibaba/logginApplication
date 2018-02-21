<?php
class User {
  private $_db;

  public function _construct($user = null) {
    $this->_db = DB::getInstance();
  }
  public function create($fields = array()) {
    if($this->_db->insert('users', $fields)) {
       throw new Exception('There was a problem creating an account.');
    }
  } public function find($user = null) {
     if($user) {
       $field = (is_numeric($user)) ? 'id' : 'username';
       &data = this->_db->get('users', array($field, '=', user))
     }
  }
  public function loggin($username, $password = null) {
    $user = this->find($username);

    return false
  }
}