<?php
include('header.php');
include('../config.php');
$obj = new createclassp2;
?>
<div class="container-fluid">
    <div class="col-4"> <?php include('sidebar.php'); ?></div>
    <div class="col-8" style="margin-left: 350px; margin-top: 100px;">
        <h2>Edit your profile details</h2>
        <hr>
        <div class="col-12">
            <form class='edit-profile m-b30' method='POST' action=''>
                <div class='row'>
                    <div class='form-group col-6'>
                        <label class='col-form-label'>Class code</label>
                        <div>
                            <input class='form-control' type='text' name='class_code' pattern='[0-9A-Za-z ]{2,5}' placeholder="7A...">
                        </div>
                    </div>
                    <div class='form-group col-6'>
                        <label class='col-form-label'>Teacher</label>
                        <div>
                            <input class='form-control' type='text' name='teacher' pattern="[A-Za-z ]{3,16}" placeholder="Aslam Chughtai...">
                        </div>
                    </div>
                    <div class='form-group col-6'>
                        <label class='col-form-label'>Status</label>
                        <div>
                            <input class='form-control' type='text' name='status' pattern="[A-Za-z ]{3,16}" value="Active" placeholder="Aslam Chughtai...">
                        </div>
                    </div>
                </div>
                <input class='btn' type='submit' name='btn_sub' value="Create class">
            </form>

            <?php
            if (isset($_POST['btn_sub'])) {
                $class_code = $_POST['class_code'];
                $teacher_name = $_POST['teacher'];
                $status = $_POST['status'];

                $create = $obj->create("INSERT INTO class_new(`Class_code`,`Teacher`,`Status`) VALUES('$class_code','$teacher_name','$status')");
                
                
                
        
                 /* if ($create > 0) {
                    return true;
                    header('admin-dashboard/batch-information.php?msg=class_created_sucessfully');
                } else {
                    return false;
                    header('create-class.php?msg=class_not_created_sucessfully');
                    echo ('class creation failed');
                } */    
            }

?>







<?php
    include('footer.php');
?>