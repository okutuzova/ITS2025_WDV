<?php 

    class Pokemon {
        public $name;   
        public $type1;
        public $attack;
        public $defense;

        public function __construct($name, $type1, $attack, $defense) { 
            $this->name = $name;   
            $this->type1 = $type1;
            $this->attack = $attack;  
            $this->defense = $defense;
        }
    }
    
?>