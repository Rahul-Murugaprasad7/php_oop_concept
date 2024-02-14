<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
    <?php
         trait message1{
            function msg1(){
                echo "hello!<br>";

            }
         }
         trait message2{
            function msg2(){
                echo "HOW ARE YOU<br>";
            }
         }
         class welcome1{
            use message1;
         }
         class welcome2{
            use message1, message2;
         }
         $obj=new welcome1();
         $obj->msg1();
         $obj1=new welcome2();
         $obj1->msg2();
         $obj1->msg1();
    ?>
</body>
</html>