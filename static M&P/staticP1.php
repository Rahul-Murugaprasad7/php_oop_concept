<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static Property</title>
</head>
<body>
    <?php
        class car{
            public static $name="AUDI";

        }
        class audi extends car{
            function __construct()
            {
                echo "CAR NAME = ".parent::$name;
            }
        }
        $obj=new audi();
    ?>
</body>
</html>