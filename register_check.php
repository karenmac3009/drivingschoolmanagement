<?php
if(isset($_REQUEST['submit']))
{
	$connection=mysqli_connect("localhost","root","","skr");
    session_start();
    if(($_SESSION['email']==NULL) && ($_SESSION['pword']==NULL))
    { 
      header("Location:login.php");          
    }
    else {
           header("Location:register.php");
          }
       	
}
?>