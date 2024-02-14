<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static method</title>
</head>
<body>
    <?php
        class car{
            static function getname(){
                return "AUDI";
            }
            function __construct(){
        
                echo "CAR NAME = ".self::getname();                
            }
        }
        class audi extends car{
            function __construct()
            {
                echo "carr name=".parent::getname();
            }
        }
        $obj=new audi();
    ?>
</body>
</html>