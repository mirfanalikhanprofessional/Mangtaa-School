<?php
include('../config.php');
$obj = new Connectiondbp2;
session_start();
/* if (isset($_COOKIE['email']) == '' && isset($_SESSION['email']) == '') {
    setcookie('email', $email, time() + 0, '/');
    setcookie('pass', $pass, time() + 0, '/');

    header('Location:index.php');
} */

include('header.php');
include('sidebar.php');
/* if (isset($_COOKIE['email']) || isset($_SESSION['email'])) { */
    echo "<html>
<head>
	<title>Admission form</title>

</head>
<body>

	<!-- content area start -->
	<main class='ttr-wrapper' >
		<div class='container-fluid'>
            <h6>Choose a Class to mark it's attendence</h6>
			<form action='' method='POST' class='text-center' style='margin-top: 50px;'>
				<div class='form-group' style='margin-left: 300px;''>
					<select name='student_select' class='form-control form-control-lg'>";
						$query = mysqli_query($obj->connect(), "SELECT * FROM student");
						while ($student_row = mysqli_fetch_array($query)) {
							echo "<option value'$student_row[1]'>$student_row[1]</option>";
						}
				echo "</select>
				</div>
				<input type='submit' name='main_btn_sub' class='btn mt-2'>
			</form>
            </div>";
            if(isset($_POST['main_btn_sub'])){
                $studentselect = $_POST['student_select'];
                if(isset($studentselect)){         
                    $master_select = mysqli_query($obj->connect()   ,"SELECT * FROM student WHERE Student_name ='$studentselect'");
                    while ($master_row = mysqli_fetch_array($master_select)) {
                    echo "<div class='row'>
                    <!-- Your Profile Views Chart -->
                    <div class='col-lg-12 m-b30'>
                        <div class='widget-box'>
                            <div class='wc-title'>
                                <h4>Student admssion form</h4>
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
                                            <label class='col-form-label'>First Name</label>
                                            <div>
                                                <input class='form-control' type='text' name='txtfname' value='$master_row[1][5]' pattern='[a-z A-Z]{3,16}'>
                                            </div>
                                        </div>
                                        <div class='form-group col-6'>
                                            <label class='col-form-label'>last Name</label>
                                            <div>
                                                <input class='form-control' type='text' name='txtlname' value='$master_row[1][8]' pattern='[a-z A-Z]{3,16}'>
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
                                                <h3 class='m-form__section'>4. Enroll for selected classes</h3>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <table id='item-add' style='width:100%;'>
                                                <tr class='list-item'>
                                                    <td>
                                                           
                                                            
                                                        
                                                    </td>
                                                </tr>
                                            </table>
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
        }                                        }
                                    }
/* } */

include('footer.php');
