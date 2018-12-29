<?php

  class IndexModal extends DModal{

    function __construct(){
      parent::__construct();
    }


    public function selectAll($table){
      $sql = "SELECT * FROM $table";
      return $this->db->select($sql);
    }











  }
