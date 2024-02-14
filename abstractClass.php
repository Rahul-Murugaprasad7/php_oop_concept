<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
</head>
<body>
    <?php
        abstract class person{
            abstract function display($s);            //method declaration
            
        }
        class childA extends person{
            function display($s){
                echo "$s <br>";
            }
        }
        class childB extends person{
            function display($s, $s2="b")
            {
                echo "$s $s2 <br>";
            }
        }
        $obj=new childA();
        $obj->display("Child A");
        $obj1=new childB();
        $obj1->display("ChildB");
    ?>
</body>
</html>