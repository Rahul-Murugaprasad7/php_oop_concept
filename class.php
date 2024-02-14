
<?php
    class fruits{
        public $name;
        public $color;

        function set_name($n){
            $this->name=$n;
            return $this->name;
        }
       
        function set_color($c){
            $this->color=$c;
        }
        function get_color(){
            return $this->color;
        }
        
    }
    $apple = new fruits();
    echo '1 Fruit Name = '.$apple->set_name('APPLE');
    $apple->set_color('RED');
    echo '1 Fruit Color = '.$apple->get_color().'<br>';
    
    $orange = new fruits();
    echo '2 Fruit Name = '.$orange->set_name('ORANGE');
    $orange->set_color('ORANGE');
    echo '2 Fruit Color = '.$orange->get_color().'<br>';
?>
