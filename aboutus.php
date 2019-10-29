<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>About Us</title>
<style>
.container-fluid{
                width:100%; padding: 0px 0px 0px 0px;
            }
            .row{
                width:100%; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;
            }
            .col-xl{
                width:100%; padding: 0px 0px 0px 0px;
            }
            #parastyle{
              color: black; background-color: #e4e8f0; font-size: 20px;
              padding-top: 20px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px;
              margin: 0px;
            }
            #parastyle2{
              color: black; font-size: 20px;
              padding-top: 20px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px;
              margin: 0px;
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
                    session_start();
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
      <div class="container-fluid">
        <img src="img05.jpg" class="img-fluid" alt="Res image 1" style="width:100%;">
      </div>
    <div clas="container-fluid">
        <p class="text-center" style="color: black; font-size: 50px; margin:0px;">AIM</p>
        <p class="text-center" id="parastyle">To provide access to anyone aspiring to learn driving from anywhere</p>
      <p class="text-center" id="parastyle2">We provide personal and efficient training for learners in the localities of our branches.</p>
        <p class="text-center" id="parastyle">Choose your preffered schedules with video tutorials</p>
      </div>
      <div class="container-fluid">
        <img src="trial07.jpg" class="img-fluid" alt="Res image 1" style="width:100%;">
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>