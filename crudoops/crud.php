<?php
include 'model.php';            //we connect model.php with this file

$obj = new Model();             //assigning the model class with $obj

// insert record
if(isset($_POST['submit'])){
    $obj->insertRecord($_POST);         //this if condition chekes whether the user clicked on the sumbit button
}

// update record
if(isset($_POST['update'])){             //it calls the updateRecord method of the Model class with the form data ($_POST).
    $obj->updateRecord($_POST);         //this if condition chekes whether the user clicked on the update button
}

//delete record
if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deleteRecord($delid);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation in PHP OOP</title>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
</head>
<body>
    <h2 class="text-center text-info">CRUD Operation in PHP Using OOP</h2><br>
    <div class="container">
<!--  for Success message  -->
    <?php
        if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
            echo '<div class="alert alert-primary" role="alert">
            Record Inserted Successfully!!!              </div>';           //bootstrap for the pop-up thr success message
        }
        if(isset($_GET['msg']) AND $_GET['msg']=='upd'){
            echo '<div class="alert alert-primary" role="alert">
            Record Updated Successfully!!!              </div>';
        }
        if(isset($_GET['msg']) AND $_GET['msg']=='del'){
            echo '<div class="alert alert-primary" role="alert">
            Record Deleted Successfully!!!              </div>';
        }
    ?>
    <?php
//edit record
        if(isset($_GET['editid'])){                                     //This checks if the URL parameter named 'editid' is set. It returns true if 'editid' is present in the URL, otherwise, it returns false.
            $editid = $_GET['editid'];                                  //If 'editid' is set, this line retrieves the value of 'editid' from the URL and assigns it to the variable $editid.
            $myrecord = $obj->displayRecordById($editid);               //edit record will be updated in the db
    ?>    
<!-- to update the form -->
        <form action="crud.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="emp_name" value="<?php echo $myrecord['emp_name']; ?>" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="occupation" value="<?php echo $myrecord['occupation']; ?>" placeholder="Enter Your Occupation" class="form-control">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" value="<?php echo $myrecord['salary']; ?>" placeholder="Enter Your salary" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="hid" value="<?php echo $myrecord['id'] ?>">
                <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
        </form>
    <?php    
        }else{
    ?>
<!-- basic form -->
        <form action="crud.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="emp_name" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="occupation" placeholder="Enter Your Occupation" class="form-control">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" placeholder="Enter Your salary" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info">
            </div>
        </form>
        
    <?php
        }
    ?>
        
        <br>
        <h4 class="text-center text-danger"> Display-Records</h4>
        <table class="table table-bordered">
            <tr class="bg-primary text-center">
                <th>S.No</th>
                <th>Name</th>
                <th>Occupation</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        <?php
            $data = $obj->displayRecord();              //fetches records from a data source using the displayRecord method of the $obj object.
            $sno = 1;
            foreach ($data as $value){
        ?>
            <tr class="text-center">
                <td><?php echo $sno++; ?></td>
                <td><?php echo $value['emp_name']?></td>
                <td><?php echo $value['occupation']?></td>
                <td><?php echo $value['salary']?></td>
                <td>
                    <a href="crud.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="crud.php?deleteid=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>