<?php

class LoginModal extends DModal{

  public function __construct(){
    parent::__construct();
  }

/*
  public function userControl($table,$username,$password){
    $sql = "select * from $table where username=? and password=?";
      return $this->db->affectedRows($sql,$username,$password);
  }

  public function getUserData($table,$username,$password){
    $sql = "select * from $table where username=? and password=?";
      return $this->db->selectUser($sql,$username,$password);
  }
*/

  public function userControl($table,$username,$password){
    $sql = "SELECT * FROM $table WHERE potato_username=? and potato_password=?";
    return $this->db->affectedRows($sql,$username,$password);
  }

  public function getUserData($table,$username,$password){
    $sql = "SELECT * FROM $table WHERE potato_username=? and potato_password=?";
    return $this->db->selectUser($sql,$username,$password);
  }








}
?>
