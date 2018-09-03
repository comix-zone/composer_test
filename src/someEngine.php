<?php

namespace engine;
require 'someObj.php';

use \engine\someObj as someObj;

Class someEngine {
	
	private $somevar1;
	private $somevar2;
	private $somevar3;
	private $someObj;
    
	public function __construct() {
		$this->somevar1 = 1;
		$this->somevar2 = 2;
		$this->somevar3 = 3;
        $this->someObj  = new someObj(1);
	}
	
	public function setSomevar1(int $var){
		$this->somevar1 = $var;
	}
    
    public function setSomevar2(int $var){
		$this->somevar2 = $var;
	}
    
    public function setSomevar3(int $var){
		$this->somevar3 = $var;
	}
    
    
    public function setSomeObj(someObj $obj){
        $this->someObj = $obj;
    }
    
    public function getSomevar1(){
		return $this->somevar1;
	}
    
    public function getSomevar2(){
		return $this->somevar2;
	}
    
    public function getSomevar3(){
		return $this->somevar4;
	}
    
    public function getSomeObj() {
        return $this->someObj->toString();
    }
    
    
}