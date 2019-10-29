<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Page</title>
	<style>
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
                      echo "<a class='nav-link' href='afterregister.php'>LOG OUT</a>";
                      echo "<a class='nav-link' href='logout.php'>LOG OUT</a>";
                    }
                    else{
                          echo "<a class='nav-link' href='login.php'>LOGIN</a>";
                      }?>
                </form>
            </div>
        </nav>
		<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <div class="media">
  <img src="img2.png" class="align-self-center mr-3" alt="..." style="width:750px;height:500px>
  <div class="media-body">
  <p>
      <p><div class="container">
    <h3 class="display-4"><b>Login</b></h3>
    <p class="lead">
	<form action="login_check.php" method="POST">
  <div class="form-group">
   <label for="exampleInputEmail1">Email</label>
    <input type="username" class="form-control" id="exampleInputUsername1" name="email" aria-describedby="UsernameHelp" placeholder="Enter Email address" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pword" id="exampleInputPassword1" placeholder="Password" required>
  </div>
<font size="3" color="red">Invalid Details!!</font>
<br>
<center>
<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button><br><br>
  <a href="create.php">Create New Account</a></center>
</form></p>
  </div></p>
   </p>
	</div>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>