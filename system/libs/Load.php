<?php

  class Load{

    public function view($fileName,$data = false){
      if($data == true){
        extract($data);
      }
      include 'app/views/'.$fileName.'.php';
    }

    public function modal($modalName){
      include 'app/modals/'.$modalName.'.php';
      return new $modalName();
    }

  }
