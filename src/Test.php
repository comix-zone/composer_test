<?php

require 'someEngine.php';

use \engine\someEngine;

Class Test {
     private $engine;
     
     public function __construct(){
         $this->engine = new someEngine();
         $ret = $this->engine->getSomeObj();
         echo $ret;
     }
}

$test = new Test();
