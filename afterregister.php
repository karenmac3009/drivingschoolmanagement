<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pword']))
{
    $email=$_SESSION["email"];
    $pword=$_SESSION["pword"];
    $connection=mysqli_connect("localhost","root","","skr");     
        if(($email=='admin@gmail.com'and $pword='admin123')or ($email=='admin1@gmail.com' and $pword=='admin123'))
        {
            
            $query="SELECT * FROM packages";
            $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));            
        }
        else{
                  $query="SELECT * FROM users where email='$email' and pword='$pword'";
                  $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));         
                  $row=mysqli_fetch_assoc($result);
              if(($row["email"]==$email) && ($row["pword"]==$pword))
               {
                 
                 $query="SELECT * FROM packages where email='$email'";
                 $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));
                }
              else{header("Location:loginerror.php");}
            }     
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>PROFILE</title>
	<style>
	body {
  background-color: lightblue;
}
.button {
          background-color: #343a40;
          border: none;
          color: #007BFF;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        } 
.card{
margin:40px 100px;
padding:10px;
border: 10px solid blue;
}
</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="navimg.jpg" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="home.php">HOME</a>
                    <a class="nav-link" href="aboutus.php">ABOUT US</a>
                    <a class="nav-link" href="packages.php">PACKAGES</a>
                    <a class="nav-link" href="reachus.php">REACH US</a>
					          <?php
                    
                    if (isset($_SESSION['email']) && isset($_SESSION['pword']))
                    {
                      echo "<a class='nav-link' href='afterregister.php'>PROFILE</a>";
                      echo "<a class='nav-link' href='logout.php'>LOG OUT</a>";
                    }
                    else{
                          echo "<a class='nav-link' href='login.php'>LOGIN</a>";
                      }?>
                </form>
            </div>
        </nav>
        <?php
              
         if($result->num_rows>1)
            {
              echo "<br><center>";
              echo "<table border=1 width=2>";
              echo "<tr>
              <th>Profile</th><th>Email</th><th>  Type of Student </th><th> Type of Package  </th><th>Location</th><th>Batch</th></tr>";
              while($row=mysqli_fetch_assoc($result)) 
               { 
                 echo "<tr><td>"."<img src='test.png' width='200' height='200'>"."</td>";
                 echo "<td>".$row["email"]."</td>";
                 echo "<td>".$row["typeofstudent"]."</td>";
                 echo "<td>".$row["typeofpackage"]."</td>";
                 echo "<td>".$row["location"]."</td>";
                 echo "<td>".$row["batch"]."</td></tr>";
                }
            }
            elseif($result->num_rows==1)
              {
                         echo "<br><center>";
                          echo "<table border=1 width=2>";
              
                 echo "<tr><th>u_id</th><td>".$row["u_id"]."</td></tr>";
                 echo "<tr><th>Full Name</th><td>".$row["fullname"]."</td></tr>";
                 echo "<tr><th>Gender</th><td>".$row["gender"]."</td></tr>";
                 echo "<tr><th>Date of Birth</th><td>".$row["dob"]."</td></tr>";
                 echo "<tr><th>Email</th><td>".$row["email"]."</td></tr>";
                 echo "<tr><th>Contact Number</th><td>".$row["cno"]."</td></tr>";
                 while($row=mysqli_fetch_assoc($result))
                 {
                  echo "<tr><th>  Type of Student </th><td>".$row["typeofstudent"]."</td></tr>";
                  echo "<tr><th> Type of Package  </th><td>".$row["typeofpackage"]."</td></tr>";
                  echo "<tr><th>Location</th><td>".$row["location"]."</td></tr>";
                  echo "<tr><th>Batch</th><td>".$row["batch"]."</td></tr></table></center>";
                 }
                 if(($row["typeofpackage"]=="15 Days Personal Training for Rs1000/-")||($row["typeofpackage"]=="1 Month Personal Training for Rs2200/-")||($row["typeofpackage"]=="2 Months Personal Training for Rs3500/-"))
                 {

                 }
                 else{
                  echo "<center><button type='submit' class='button' name='submit' value='submit'><a href='videos.php'>Access Videos</a></button>
                          </center>";      
                 }
              }
          else 
            {
              echo "<br><center>";
            echo "<table border=1 width=2>";
              
                 echo "<tr><th>u_id</th><td>".$row["u_id"]."</td></tr>";
                 echo "<tr><th>Full Name</th><td>".$row["fullname"]."</td></tr>";
                 echo "<tr><th>Gender</th><td>".$row["gender"]."</td></tr>";
                 echo "<tr><th>Date of Birth</th><td>".$row["dob"]."</td></tr>";
                 echo "<tr><th>Email</th><td>".$row["email"]."</td></tr>";
                 echo "<tr><th>Contact Number</th><td>".$row["cno"]."</td></tr>";
              echo "<center><style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
          .flip-card-front {
             background-color: #bbb;
              color: black;
             }
          .flip-card-back {
             background-color: #2980b9;
                color: white;
              transform: rotateY(180deg);
            }
            </style>
            </head>
       <body>
      <div class='flip-card'>
             <div class='flip-card-inner'>
           <div class='flip-card-front'>
       <img src='test.png' style='width:300px;height:300px;'>
       </div>
        <div class='flip-card-back'>
       <h3><center>Check our driving school packages & get yourself registered with good discount.</center></h3></p> 
       </div>
          </div>
           </div></center>";
  } 
        ?>
      </body></html>