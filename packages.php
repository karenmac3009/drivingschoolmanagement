<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Packages</title>
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
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
        p{
          margin:0px;
        }
        .row{
          margin:0px;
        }
        #smid{
          padding:0px;
          position: relative;
        }
        h1{
          margin:0px;
        }
        h3{
          margin:0px;
          padding-bottom: 5px;
        }
        hr{
          margin:5px;
        }
        td{
          text-align: center;
        }
        table{
          margin:10px;
        }
    
        body {
        background-color: lightgrey;
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
      <div class="row">
        <div class="col-xl" id="smid">
    <br><br>
          <center><img src="p1img.jpg" alt="Res img 2" style="width:550px;height:500px;"></center>
        </div>
        <div class="col-xl" id="idno01">
    <br><br>
          <h1 id="idno2"><b>Personal Training</b></h1>
          <hr>
          <h3><b>Description:</b></h3>
          <P>A licensed personal trainer/mentor to guide the candidate according to their time schedule.The duration can be chosen by the candidate.</p>
          <p>The personal trainer will meet you at the alloted stop.</p>
          <p>The prices vary on the basis of the duration.</p><br>
          <table cellpadding="7">
            <tr>
              <td colspan="2"><b><centre>15 Days</centre></b></td>
              <td colspan="2"><b>1 Month </b></td>
              <td colspan="2"><b>2 Months</b></td>
            </tr>
            <tr>
              <td colspan="2"><centre>MRP:1200/-</centre></td>
              <td colspan="2"><centre>MRP:2500/-</centre></td>
              <td colspan="2"><centre>MRP:4000/-</centre></td>
            </tr>
            <tr>
              <td colspan="2"><centre>Price:1000/-</centre></td>
              <td colspan="2"><centre>Price:2200/-</centre></td>
              <td colspan="2"><centre>Price:3500/-</centre></td>
            </tr>
          </table>
          <br>
          <br>
          </form>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-xl" id="smid">
    <br><br>
          <center><img src="p2img.jpg"  alt="Res img 2" style="width:550px;height:500px;"><center>
        </div>
        <div class="col-xl" id="idno01">
          <br><br>
      <h1 id="idno2"><b>Video Training</b></h1>
          <hr>
          <h3><b>Description:</b></h3>
          <P>A special feature for all our remote customers,to aid you all to learn driving by watching basic and advanced level videos from specialized mentors.</p>
          <p>These video tutorials can be watched anytime and anywhere,thereby helping learn driving by merely watching video and making no adjustments to actually come and learn.</p>
          <br>
          <table cellpadding="7">
            <tr>
              <td colspan="2"><b>1 Year</b></td>
              <td colspan="2"><b>6 Months</b></td>
            </tr>
            <tr>
              <td colspan="2">MRP:1300/-</td>
              <td colspan="2">MRP:750/-</td>
            </tr>
            <tr>
              <td colspan="2">Price:900/-</td>
              <td colspan="2">Price:500/-</td>
            </tr>
          </table>
          <br>   
          <br>
          <br>
        </div>
      </div>
<div class="row">
     <div class="col-xl" id="smid">
    <br><br><br>
          <center><img src="p3img.jpg"  alt="Res img 2" style="width:550px;height:500px;"></center>
      <br>
      <center>
      <p><b>Any questions? Click below</b></p><br>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSdk9mTepDh_XDWjzqqICdbTfkryRTnDQBeBEszSFFPRY_5Qxw/viewform?usp=sf_link" class="button">INQUIRY</a>
          </center>
      <br><br><br>
        </div>
        <div class="col-xl" id="idno01">
    <br><br><br>
          <h1><b>Personal Mentoring & Video Training</b></h1>
          <hr>
          <h3><b>Description:</b></h3>
          <P>Our exclusive package of personal training as well as access to the video tutorials of both basic and advanced levels.</p>
          <p>The mentor alloted will help you gain practical knowledge of the video tutorials and learn safe driving abiding to all rules and regulations.</p>
          <p>The personal trainer will pick you up at the alloted stop and the videos will be accessable after you apply.</p>
          <br>
          <table cellpadding="7">
            <tr>
              <td colspan="2"><b>15 days training & 6 months videos</b></td>
              <td colspan="2"><b>1 month training & 1 year videos</b></td>
              <td colspan="2"><b>2 months training & 1 year videos</b></td>
            </tr>
            <tr>
              <td colspan="2">MRP:2000/-</td>
              <td colspan="2">MRP:3000/-</td>
              <td colspan="2">MRP:4000/-</td>
            </tr>
            <tr>
              <td colspan="2">Price:1500/-</td>
              <td colspan="2">Price:2500/-</td>
              <td colspan="2">Price:3500/-</td>
            </tr>
          </table>
          <br>
          <br>
      <br>
          <br><center><form action="register_check.php" method="REQUEST">
          <button type="submit" class="button" name="submit" value="submit">REGISTER</button>
          </center>
          <br><br>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></form>
  </body>
</html>