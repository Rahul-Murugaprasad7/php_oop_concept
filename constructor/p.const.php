<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parameterized Constructor</title>
</head>
<body>
    <?php
        class person{
            public $name;
            function __construct($name)     //parameterized constructor 
            {
                $this->name=$name;
            }
            function get(){
                echo $this->name;
            }
        }
        $obj = new person("AB");
        $obj->get();
    ?>
    
</body>
</html>