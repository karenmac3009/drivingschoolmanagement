<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Registeration Page</title>
	<style>
	body {
  background-color: lightblue;
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
    <form action="a23.php" method="REQUEST">
	<div class="card">
  <div class="card-body">
  <form>
 <center> <h1>Registration Form</h1></center>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  Select a Package:
  <div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="15 Days Personal Training for Rs1000/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    15 Days Personal Training for Rs1000/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="1 Month Personal Training for Rs2200/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    1 Month Personal Training for Rs2200/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="2 Months Personal Training for Rs3500/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    2 Months Personal Training for Rs3500/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="6 Months Video Training for Rs500/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    6 Months Video Training for Rs500/-
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="1 Year Video Training for Rs900/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    1 Year Video Training for Rs900/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="15 Days Training & 6 Months Video Training for Rs1500/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    15 Days Training & 6 Months Video Training for Rs1500/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="1 Month Training & 1 Year Video Training for Rs2500/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    1 Month Training & 1 Year Video Training for Rs2500/-
  </label>
</div><div class="form-check">
  <input class="form-check-input" type="radio" name="typeofpackage" id="exampleRadios1" value="2 Months Training & 1 Year Video Training for Rs3500/-" checked>
  <label class="form-check-label" for="exampleRadios1">
    2 Months Training & 1 Year Video Training for Rs3500/-
  </label>
</div><br>
Select a Location:<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="location" id="inlineRadio1" value="Andheri(HQ)">
  <label class="form-check-label" for="inlineRadio1">Andheri(HQ)</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="location" id="inlineRadio2" value="Bandra">
  <label class="form-check-label" for="inlineRadio2">Bandra</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="location" id="inlineRadio1" value="Dadar">
  <label class="form-check-label" for="inlineRadio1">Dadar</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="location" id="inlineRadio2" value="Borivali">
  <label class="form-check-label" for="inlineRadio2">Borivali</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="location" id="inlineRadio2" value="Other">
  <label class="form-check-label" for="inlineRadio2">Other</label>
</div><br><br>
(If your Location is not Present in List.Please select Type of Student as Remote<br>
Type of Student:
<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="typeofstudent" value="Remote" id="inlineRadio3" >
  <label class="form-check-label" for="inlineRadio3">Local </label>
</div><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="typeofstudent" value="Local" id="inlineRadio3" >
  <label class="form-check-label" for="inlineRadio3">Remote</label>
</div><br><br>
Batch:<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="batch" id="inlineRadio4" value="Morning">
  <label class="form-check-label" for="inlineRadio2">Morning</label>
</div><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="batch" id="inlineRadio4" value="Afternoon">
  <label class="form-check-label" for="inlineRadio4">Afternoon</label>
</div><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="batch" id="inlineRadio4" value="Evening">
  <label class="form-check-label" for="inlineRadio4">Evening</label>
</div>
<br>
<br>
<center><button type="submit" name="proceed" class="btn btn-primary btn-lg active">Proceed for Payment </button></center>
</form>
</div>
</div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>