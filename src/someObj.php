<?php 

namespace engine;

Class someObj{
    
    private $num;
    
    public function __construct(int $num) {
        $this->num = $num;
    }
    
    public function toString(){
        return 'value '.$this->num;
    }
}