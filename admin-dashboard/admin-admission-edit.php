<?php
session_start();
include('../config.php');
$obj = new Connectiondbp2;
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == '') {
    setcookie('email', $email, time() + 0, '/');
    header('Location: ../index.php');
}
include('top-header.php');
include('sidebar.php');
?>
<style>
    .col-form-label {
        height: 30px;
        width: 100%;
        background-color: #f6c2ff;
    }
    .d {
        background: yellow;
        width: 100%;
        height: 70px;
        padding: 2%;
        color: purple;
        text-align: center;
    }
    body {
        background-image: url(assets/images/maain.jpg);
    }
    .admission {
        background-image: url(assets/images/maain.jpg);
    }
</style>
<?php
if (isset($_SESSION['email_part'])) {
    echo "<!-- content area start -->
        <main class='ttr-wrapper' >
            <div class='container-fluid'>
                <h6 class='d'><b><i><h1>Choose a Class to mark it's attendence</h1></b></i></h6>
                <form action='' method='POST' class='text-center' style='margin-top: 50px;'>
                    <div class='form-group' style='margin-left: 0px;''>
                        <select name='student_select' class='form-control form-control-lg' required>'
                        <option value='' selected>Choose a class</option>";
                        $query = mysqli_query($obj->connect(), "SELECT * FROM student");
                        while ($student_row = mysqli_fetch_array($query)) {
                            echo '<option value'.$student_row[1].'>'.$student_row[1].'</option>';
                        }
                        echo "</select>
                    </div>
                    <input type='submit' name='main_btn_sub' class='btn mt-2'>
                </form>
                </div><br>";
        if (isset($_POST['main_btn_sub'])) {
            $studentselect = $_POST['student_select'];
            if (isset($studentselect)) {
                $master_select = mysqli_query($obj->connect(),"SELECT * FROM student WHERE Student_name ='$studentselect'");
                while ($master_row = mysqli_fetch_array($master_select)) {
                    echo "<div class='row'>
                            <!-- Your Profile Views Chart -->
                            <div class='col-lg-12 m-b30'>
                                <div class='widget-box admission'>
                                    <div class='wc-title'>
                                        <h4><b><i>Student admssion form</i></b></h4>
                                    </div>
                                    <div class='widget-inner'>
                                        <form class='edit-profile m-b30' method='POST' action='admissioncode.php'>
                                            <div class='row'>
                                                <div class='col-12'>
                                                    <div class='ml-auto'>
                                                        <h3>1. Personal Details</h3>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Student Name</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtfname' value='$master_row[1]' pattern='[a-z A-Z]{3,16}'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian Name</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtguarname' pattern='[a-z A-Z]{3,16}' value='$master_row[10]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian occupation</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtguardianoccupation' pattern='[a-z A-Z]{3,16}' value='$master_row[11]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Student Phone No.</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstudentphone' pattern='[0-9]{4}[-][0-9]{8}' value='$master_row[8]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian Phone No.</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtguardianphone' pattern='[0-9]{4}[-][0-9]{8}' value='$master_row[12]'>
                                                    </div>
                                                </div>
                                                
                                                <div class='seperator'></div>
                                                
                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto m-b5'>
                                                        <h3>2. Address</h3>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Address</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtaddress' pattern='[A-Za-z0-9 #-./]{20,80}' value='$master_row[9]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>City</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtcity' pattern='[A-Za-z ]{3,25}' value='$master_row[5]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>State</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstate' pattern='[A-Za-z ]{3,25}' value='$master_row[6]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Status</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstate' pattern='[A-Za-z]{13}' value='$master_row[13]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Postcode</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtpostcode' pattern='[0-9 -]{5,13}' value='$master_row[7]'>
                                                    </div>
                                                </div>

                                                <div class='m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x'></div>

                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto'>
                                                        <h3 class='m-form__section'>3. Social Links</h3>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Facebook</label>
                                                    <div>
                                                        <input class='form-control' type='text' value='' placeholder='www.facebook.com' name='txtface' value='$master_row[13]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Email Address</label>
                                                    <div>
                                                        <input class='form-control' type='text' placeholder='example@gmail.com' name='txtemail' pattern='[a-z 0-9]{7,30}@[a-z]{3,5}[.][a-z]{2,4}' value='$master_row[3]'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto'>
                                                        <h3 class='m-form__section'>4. class</h3>
                                                    </div>
                                                </div>
                                                <div class='col-12'>
                                                    <div class='form-group col-6'>
                                                        <label class='col-form-label'>Class</label>
                                                        <div>
                                                            <input class='form-control' type='text' name='txtclass' value='$master_row[2]'>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Your Profile Views Chart END-->
                        </div>
                    </div>
                </main>
                <div class='ttr-overlay'></div>
                <!-- content area end -->
            </body>
            </html>";
                }
            }
        }
    }
else if (isset($_COOKIE['email'])) {
    echo "<!-- content area start -->
        <main class='ttr-wrapper' >
            <div class='container-fluid'>
                <h6 class='d'><b><i><h1>Choose a Class to mark it's attendence</h1></b></i></h6>
                <form action='' method='POST' class='text-center' style='margin-top: 50px;'>
                    <div class='form-group' style='margin-left: 0px;''>
                        <select name='student_select' class='form-control form-control-lg' required>'
                        <option value='' selected>Choose a class</option>";
    $query = mysqli_query($obj->connect(), "SELECT * FROM student");
    while ($student_row = mysqli_fetch_array($query)) {
        echo '<option value' . $student_row[1] . '>' . $student_row[1] . '</option>';
    }
    echo "</select>
                    </div>
                    <input type='submit' name='main_btn_sub' class='btn mt-2'>
                </form>
                </div><br>";
    if (isset($_POST['main_btn_sub'])) {
        $studentselect = $_POST['student_select'];
        if (isset($studentselect)) {
            $master_select = mysqli_query($obj->connect(), "SELECT * FROM student WHERE Student_name ='$studentselect'");
            while ($master_row = mysqli_fetch_array($master_select)) {
                echo "<div class='row'>
                            <!-- Your Profile Views Chart -->
                            <div class='col-lg-12 m-b30'>
                                <div class='widget-box admission'>
                                    <div class='wc-title'>
                                        <h4><b><i>Student admssion form</i></b></h4>
                                    </div>
                                    <div class='widget-inner'>
                                        <form class='edit-profile m-b30' method='POST' action='admissioncode.php'>
                                            <div class='row'>
                                                <div class='col-12'>
                                                    <div class='ml-auto'>
                                                        <h3>1. Personal Details</h3>
                                                    </div>
                                                </div>
                                                
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Student Name</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtfname' value='' . $master_row[1] . '' pattern='[a-z A-Z]{3,16}'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian Name</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtguarname' pattern='[a-z A-Z]{3,16}' value='$master_row[10]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian occupation</label>
                                                    <div>
                                                        <input class='form-control' type='text' value='' name='txtguardianoccupation' pattern='[a-z A-Z]{3,16}' value='$master_row[11]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Student Phone No.</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstudentphone' pattern='[0-9]{4}[-][0-9]{8}' value='$master_row[8]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Guardian Phone No.</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtguardianphone' pattern='[0-9]{4}[-][0-9]{8}' value='$master_row[12]'>
                                                    </div>
                                                </div>
                                                
                                                <div class='seperator'></div>
                                                
                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto m-b5'>
                                                        <h3>2. Address</h3>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Address</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtaddress' pattern='[A-Za-z0-9 #-./]{20,80}' value='$master_row[9]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>City</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtcity' pattern='[A-Za-z ]{3,25}' value='$master_row[5]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>State</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstate' pattern='[A-Za-z ]{3,25}' value='$master_row[6]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Status</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtstate' pattern='[A-Za-z]{13}' value='$master_row[13]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Postcode</label>
                                                    <div>
                                                        <input class='form-control' type='text' name='txtpostcode' pattern='[0-9 -]{5,13}' value='$master_row[7]'>
                                                    </div>
                                                </div>

                                                <div class='m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x'></div>

                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto'>
                                                        <h3 class='m-form__section'>3. Social Links</h3>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Facebook</label>
                                                    <div>
                                                        <input class='form-control' type='text' value='' placeholder='www.facebook.com' name='txtface' value='$master_row[13]'>
                                                    </div>
                                                </div>
                                                <div class='form-group col-6'>
                                                    <label class='col-form-label'>Email Address</label>
                                                    <div>
                                                        <input class='form-control' type='text' placeholder='example@gmail.com' name='txtemail' pattern='[a-z 0-9]{7,30}@[a-z]{3,5}[.][a-z]{2,4}' value='$master_row[3]'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-12 m-t20'>
                                                    <div class='ml-auto'>
                                                        <h3 class='m-form__section'>4. class</h3>
                                                    </div>
                                                </div>
                                                <div class='col-12'>
                                                    <div class='form-group col-6'>
                                                        <label class='col-form-label'>Class</label>
                                                        <div>
                                                            <input class='form-control' type='text' name='txtclass' value='$master_row[2]'>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Your Profile Views Chart END-->
                        </div>
                    </div>
                </main>
                <div class='ttr-overlay'></div>
                <!-- content area end -->
            </body>
            </html>";
            }
        }
    }
}
include('footer.php');
?>