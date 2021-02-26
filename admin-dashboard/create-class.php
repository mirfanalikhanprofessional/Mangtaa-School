<?php
include('top-header.php');
include('../config.php');
$obj = new createclassp2;
?>

<style>
    .d {
        background: yellow;
        width: 100%;
        height: 70px;
        padding: 2%;
        color: purple;
        text-align: center;
    }
    .col-form-label {
        height: 30px;
        width: 100%;
        background-color: #f6c2ff;
        font-size: px;

    }
    body{
        background-image: url(assets/images/maain.jpg);
    }
</style>


<div class="container-fluid">
    <div class="col-4"> <?php include('sidebar.php'); ?></div>
    <div class="col-8" style="margin-left: 350px; margin-top: 100px;">
        <h1 class="d"><b><i>Edit your profile details</i></b></h1>
        <hr>
        <div class="col-12">
            <form class='edit-profile m-b30' method='POST' action=''>
                <div class='row'>
                    <div class='form-group col-6'>
                        <label class='col-form-label'><h4>Class code</h4></label>
                        <div>
                            <input class='form-control' type='text' name='class_code' pattern='[0-9A-Za-z ]{2,5}' placeholder="7A...">
                        </div>
                    </div>
                    <div class='form-group col-6'>
                        <label class='col-form-label'><h4>Teacher</h4></label>
                        <div>
                            <input class='form-control' type='text' name='teacher' pattern="[A-Za-z ]{3,16}" placeholder="Aslam Chughtai...">
                        </div>
                    </div>
                    <div class='form-group col-6'>
                        <label class='col-form-label'><h4>Status</h4></label>
                        <div>
                            <input class='form-control' type='text' name='status' pattern="[A-Za-z ]{3,16}" value="Active" placeholder="Aslam Chughtai...">
                        </div>
                    </div>
                </div>
                <input class='btn' type='submit' name='btn_sub' value="Create class" style="width: 20%; height: 50px; margin-left: 80%; background-color: #f6c2ff">
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