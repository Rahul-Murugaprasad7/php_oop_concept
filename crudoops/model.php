<?php

    class Model{                                //connect with the database credentials
        private $servername = 'localhost';
        private $username = 'root';
        private $password = 'Rahul@2003';
        private $dbname = 'crud_oop';
        private $conn;

        function __construct()                  //constructor used to connect with the DB
        {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            if($this->conn->connect_error){     //connect_error is a property of the mysqli class that holds the error message if there is a connection error.
                echo 'Connection Failed';
            }else{
                return $this->conn;
            }
        }

// functionn for insert reords
        public function insertRecord($post){        //this post para represents the html post method that containts the submitted data
            $name = $post['emp_name'];
            $occupation = $post['occupation'];
            $salary = $post['salary'];
            $sql = "INSERT INTO employee(emp_name,occupation,salary)VALUES('$name','$occupation',$salary)";
            $result = $this->conn->query($sql);     //This -> is the object operator, used to access properties and methods of an object
            if($result){
                header('location:index.php?msg=ins');

            }else{
                echo "Error".$sql."<br>".$this->conn->error;
            }
        }
        
// functionn for update reords
        public function updateRecord($post){               //this post para represents the html post method that containts the submitted data
            $name = $post['emp_name'];
            $occupation = $post['occupation'];
            $salary = $post['salary'];
            $editid = $post['hid'];
            $sql = "UPDATE employee SET emp_name = '$name', occupation = '$occupation', salary = '$salary' WHERE id = '$editid' ";
            $result = $this->conn->query($sql);             //connects to sql db
            if($result){
                header('location:index.php?msg=upd');

            }else{
                echo "Error".$sql."<br>".$this->conn->error;
            }
        }

//function to delete the record
        public function deleteRecord($delid){
            $sql = "DELETE FROM employee WHERE id = '$delid'";
            $result = $this->conn->query($sql);
            if($result){
                header('location:index.php?msg=del');
            }else{
                echo "Error".$sql."<br>".$this->conn->error;
            }
        }

// fucntion to display record
        public function displayRecord(){
            $sql = "SELECT * FROM employee";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row; 
                }
                return $data;
            }
        }
        
//function to display record as per id. 
        public function displayRecordById($editid){
            $sql = "SELECT * FROM employee WHERE id = '$editid'";
            $result = $this->conn->query($sql);
            if($result->num_rows==1){
                $row = $result->fetch_assoc();
                return $row;
            }
        }
    }
?>