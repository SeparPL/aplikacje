<?php
    class Fruit {
        public $name;
        public $color;

        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $apple = new Fruit();
    $banana = new Fruit();
    $orange = new Fruit();

    $apple->set_name('Apple');
    $banana->set_name('Banana');
    $orange->set_name('Orange');
    
    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $orange->get_name();  
?>