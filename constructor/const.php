<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing More Than One Constructor</title>
</head>
<body>
    <?php
        class person{
            public $name;
            public $age;
            function __construct($name, $age){
                $this->name=$name;
                $this->age=$age;
            }
            function get(){
                echo "name = ".$this->name." , "." age = ".$this->age."<br>";
            }
        }
        $obj = new person("abc", 32);
        $obj->get();
        $obj1 = new person("def", 20);
        $obj1->get();
        $obj2 = new person("ghi", 33);
        $obj2->get();
    ?>
</body>
</html>