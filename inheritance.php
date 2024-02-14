<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        class fruit         //parent class
        {            
            public $name;
            public $color;
            function __construct($n,$c)
            {
                $this->name=$n;
                $this->color=$c;            
            }
        
        function get()
        {
            echo "THIS FRUIT NAME IS {$this->name} AND THE COLOR IS: {$this->color}";

        }
    }
    class apple extends fruit       //child class
    {          
        function child()
        {
            echo "<br> am i a fruit or berry !";
        }
    }
    $obj=new apple("APPLE", "RED");
    $obj->get();
    $obj->child();
    ?>
</body>
</html>