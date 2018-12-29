<?php
include "config/config.php";
include "helpers/Helper.php";

// Library Controllers included here ....
spl_autoload_register(function($name){
  include "system/libs/".$name.".php";
});


new Main();
