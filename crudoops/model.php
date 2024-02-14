<?php

    class Model{
        private $servername = 'localhost';
        private $username = 'root';
        private $password = 'Rahul@2003';
        private $dbname = 'crud_oop';
        private $conn;

        function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            if($this->conn->connect_error){
                echo 'Connection Failed';
            }else{
                return $this->conn;
            }
        
        }
// functionn for insert reords
        public function insertRecord($post){
            $name = $post['emp_name'];
            $occupation = $post['occupation'];
            $salary = $post['salary'];
            $sql = "INSERT INTO employee(emp_name,occupation,salary)VALUES('$name','$occupation',$salary)";
            $result = $this->conn->query($sql);
            if($result){
                header('location:index.php?msg=ins');

            }else{
                echo "Error".$sql."<br>".$this->conn->error;
            }
        }

// functionn for update reords
        public function updateRecord($post){
            $name = $post['emp_name'];
            $occupation = $post['occupation'];
            $salary = $post['salary'];
            $editid = $post['hid'];
            $sql = "UPDATE employee SET emp_name = '$name', occupation = '$occupation', salary = '$salary' WHERE id = '$editid' ";
            $result = $this->conn->query($sql);
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