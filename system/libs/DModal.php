<?php

  class DModal{
    protected $db = array();
    function __construct(){
      $dsn = DB.':dbname='.DBNAME.'; host='.DBHOST;
      $user = DBUSER;
      $pass = DBPASS;
      $this->db = new Database($dsn,$user,$pass);
    }



  }
