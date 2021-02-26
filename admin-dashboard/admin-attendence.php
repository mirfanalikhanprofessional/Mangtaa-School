<?php
include('../config.php');
$obj = new connectiondbp2;

include('top-header.php');

?>
<style>
  .d {
    background: yellow;
    width: 220%;
    height: 70px;
    padding: 2%;
    color: purple;
    text-align: center;
  }

  body {
    background-image: url(assets/images/maain.jpg);
  }
</style>
<div class="container-fluid">
  <div class="col-4"><?php include('sidebar.php'); ?></div>
  <div class="col-8" style='margin-left: 350px;'>


    <!-- main content area start -->
    <div class="container">
      <div class="row mt-5">
        <div class="col-6 mt-5">
          <h1 class="d"><b><i>List of students</i></b></h1>
          <form action="" method="POST">
            <select name="month-filter" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <option selected="" value="" disabled="">Choose filter</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">june</option>
              <option value="7">Julyy</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
        </div>
        <div class="col-6" style="margin-top: 143px;">
          <select name="mark_date-filter" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected="" value="" disabled="">Choose filter</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
        </div>
        <input type="submit" class="btn btn-block" name="btn_sub" value="Go" style="width: 6%; height: 50px; margin-left: 100%; margin-top: -7%; background-color: #f6c2ff">
        </form>
      </div>
      <table class='table table-sm table-striped table-hover' style="margin-top: 100px;" style="background-color: #f6c2ff">
        <thead>
          <tr>
            <th scope='col' style="background-color: #f6c2ff">S.no</th>
            <th scope='col' style="background-color: #f6c2ff">Student Name</th>
            <th scope='col' style="background-color: #f6c2ff">Date</th>
            <th scope='col' style="background-color: #f6c2ff">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_POST['month-filter'])) {
            $select1 = $_POST['month-filter'];
            if (isset($_POST['btn_sub'])) {
              if ($select1 == "1") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 01");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "2") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 02");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "3") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 03");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "4") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 04");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                      </tr>";
                }
              }
              if ($select1 == "5") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 05");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "6") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 06");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "7") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 07");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "8") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 08");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "9") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 09");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "10") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 10");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "11") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 11");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select1 == "12") {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE month(mark_date) = 12");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
            }
          }
          if (isset($_POST['mark_date-filter'])) {
            $select2 = $_POST['mark_date-filter'];
            if (isset($_POST['btn_sub'])) {
              if ($select2 == '1') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 01");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '2') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 02");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '3') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 03");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '4') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 04");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '5') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 05");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '6') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 06");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '7') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 07");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '8') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 08");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '9') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 9");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '10') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 10");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '11') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 11");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '12') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 12");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '13') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 13");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '14') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 14");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '15') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 15");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '16') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 16");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '17') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 17");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '18') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 18");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '19') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 19");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '20') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 20");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '21') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 21");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '22') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 21");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '23') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 23");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '24') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 24");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '25') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 25");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '26') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 26");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '27') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 27");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '28') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 28");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '29') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 29");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '30') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 30");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
              if ($select2 == '31') {
                $count = 1;
                $query = mysqli_query($obj->connect(), "SELECT * FROM `attendence` WHERE day(mark_date) = 31");
                while ($row = mysqli_fetch_array($query)) {
                  echo "<tr>
                      <th scope='row'>" . $count++ . "</th>
                        <td>" . $row[2] . "</td>
                      <td>" . $row[3] . "</td>
                      <td>" . $row[4] . "</td>
                    </tr>";
                }
              }
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- main content area start -->
<?php
include('footer.php');
?>