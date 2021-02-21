<?php 
include('../config.php');

session_start();
/*if(isset($_COOKIE['email'])=='' || isset($_SESSION['email'])=='' )
{
setcookie("email", $email, time()+0, "/");  
setcookie("pass", $pass, time()+0, "/");  

header('Location:index.php');	

}
else if(isset($_COOKIE['email']) && isset($_SESSION['email']))
{*/
include('header.php');
include('sidebar.php');
/*}*/

?>

<?php 
include('footer.php');
 ?>