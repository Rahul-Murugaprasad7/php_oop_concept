<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constant</title>
</head>
<body>
    <?php
        class person{
            const a = "PERSON A";       //'a' is assigned as constant variable
            function display(){
                echo self::a;       //self is used to access from the inside class
            }
        }
        $obj = new person();
        $obj->display();

        
    ?>
</body>
</html>