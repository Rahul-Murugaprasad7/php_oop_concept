<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overriding</title>
</head>
<body>
    <?php
        class fruit{
            public $name;
            public $color;
            public $weight;
            function __construct($name, $color){
                $this->name=$name;
                $this->color=$color;
            }
            function get(){
                echo "this fruit name is = ".$this->name." And the color is = ".$this->color."<br>";
            }
        }
        class strawberry extends fruit{
            function __construct($name, $color, $weight)
            {
                parent::__construct($name, $color);
                $this->weight=$weight;
            }
            function get()
            {
                echo parent::get()." The Fruit Weight Is =". $this->weight;
            }
        }
        $s=new strawberry("STRAWBERRY", "RED", 10);
        $s->get()
        ?>
</body>
</html>