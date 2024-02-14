<title>$this Keyword</title>
</head>
<body>
    <?php
        class car{
            public $name;
            function set_name($n){
                $this->name=$n."<br>";          //this keyword is used to know which object is assigned and used to passs the values
            }
            function get_name(){
                echo $this->name; 
            }
        }
        $audi = new car();
        $audi->set_name('AUDI');
        $audi->get_name();
        $bmw = new car();
        $bmw->set_name('BMW');
        $bmw->get_name();
    ?>
</body>
</html>