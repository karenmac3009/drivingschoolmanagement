<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Home</title>
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
            .col-sm{
                width:100%; padding: 0px 0px 0px 0px;
            }
            .col-lg{
                width:100%; padding: 0px 0px 0px 0px;
            }
            .col-md{
                width:100%; padding: 0px 0px 0px 0px;
            }
            .col{
                width:100%; padding: 0px 0px 0px 0px;
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
            <img src="img01.jpg" class="img-fluid" alt="Res image 1" style="width:100%;">
        </div>
        <div class="container-fluid">
            <img src="trial01.jpg" class="img-fluid" alt="Res image 2" style="width:100%;">
        </div>
        <div class="container-fluid">
            <img src="trial02.jpg" class="img-fluid" alt="Res image 2" style="width:100%;">
        </div>
        <div class="container-fluid">
            <img src="trial03.jpg" class="img-fluid" alt="Res image 2" style="width:100%;">
        </div>
        <!-- <div class="container-fluid" style="width:100%; padding:0px 0px 0px 0px;">
            <div class="row">
                <div class="col-xl">
                    <img src="img02.jpg" class="img-fluid" alt="Res img 2" style="width:100%;">
                </div>
                <div class="col-xl" id="idno01">
                    <p class="text-center" style="color: gray; font-size: 100px; padding-top: 180px;">DRIVE SAFELY</p>
                     <h1 class="text-center;" style="color: gray; padding: 230px 200px 200px 240px;">SAFE DRIVING</h1> 
                </div>
            </div>
        </div> -->
        <!-- <div class="container-fluid" style="width:100%; padding:0px 0px 0px 0px;">
            <div class="row">
                <div class="col-xl">
                    <p class="text-center" style="color: gray; font-size: 70px; padding-top: 180px;">DRIVING SIMULATOR</p>
                </div>
                <div class="col-xl">
                    <img src="img03.jpg" class="img-fluid" alt="Res img 3" style="width:100%;">
                </div>
            </div>
        </div>
        <div class="container-fluid" style="width:100%; padding:0px 0px 0px 0px;">
            <div class="row">
                <div class="col-xl">
                    <img src="img04.jpg" class="img-fluid" alt="Res img 4" style="width:100%;">
                </div>
                <div class="col-xl" id="idno01">
                    <p class="text-center" style="color: gray; font-size: 60px; padding-top: 180px;">ADVANCED TRAINING</p>
                </div>
            </div>
        </div> -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
