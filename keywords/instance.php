<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instance Of Keyword</title>
</head>
<body>
    <?php
        class car{

        }
        $audi=new car();
        echo var_dump($audi instanceof car)         //echo var_dump($audi instanceof bus)
    ?>
</body>
</html>