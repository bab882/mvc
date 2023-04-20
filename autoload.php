<?php

  spl_autoload_register(function($className) {
    require_once('Lib/' .$className. '.php');
  });