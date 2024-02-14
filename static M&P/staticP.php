<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Property</title>
</head>
<body>
    <h1>CALLING USING OBJECT</h1>
    <?php
        class car{
            public static $name="audi";
            function __construct()
            {
                echo "car name = ".self::$name;
            }
        }
        $obj=new car();
    ?>
</body>
</html>