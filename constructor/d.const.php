<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Constructor</title>
</head>
<body>
    <?php
        class person{
            public $name;
            function __construct(){
                $this->name="ABC";
                
            }
            function get(){
                echo $this->name;
            }
        }
        $obj = new person();
        $obj->get();
    ?>
</body>
</html>