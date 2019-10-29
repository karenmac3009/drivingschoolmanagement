<?php
if(isset($_POST['submit']))
{
    $email=$_POST["email"];
    $pword=$_POST["pword"];
    $connection=mysqli_connect("localhost","root","","skr");     
        if(($email=='admin@gmail.com'and $pword='admin123')or ($email=='admin1@gmail.com' and $pword=='admin123'))
        {
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['pword']=$pword;
            $query="SELECT * FROM packages";
            $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));            
        }
        else{
                  $query="SELECT * FROM users where email='$email' and pword='$pword'";
                  $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));         
                  $row=mysqli_fetch_assoc($result);
              if(($row["email"]==$email) && ($row["pword"]==$pword))
               {
                 session_start();
                 $_SESSION['email']=$email;
                 $_SESSION['pword']=$pword;
                 $query="SELECT * FROM packages where email='$email'";
                 $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));
                }
              else{header("Location:loginerror.php");}
            }     
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Profile</title>
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
         if($result->num_rows>0)
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
          else 
            {
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

        <h1>Welcome to SKR Driving School!!</h1>

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
</body>
</html>