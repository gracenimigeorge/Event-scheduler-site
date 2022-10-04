<?php
  session_start();
  require_once 'config.php';
  require_once 'helpers/system_helper.php';

  //auto-loader

  spl_autoload_register(function($class_name){
    include 'lib/'.$class_name.'.php';
  });