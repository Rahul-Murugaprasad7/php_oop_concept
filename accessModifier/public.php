<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifier</title>
</head>
<body>
    <h1>Using Public</h1>
    <?php
        class car{
            public $name;
            function __construct()
            {
                $this->name="audi";

            }
            function display(){
                echo $this->name;
            }
        }
        $obj=new car();
        $obj->display();
    ?>
</body>
</html>