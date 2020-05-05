<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Covid-19</title>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="stylesheet" href="steel.css">

  <script src="https://kit.fontawesome.com/8d2d337e02.js" crossorigin="anonymous"></script>


</head>
<body>
<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
  $username=mysqli_real_escape_string($con,$_POST['username']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$feel=mysqli_real_escape_string($con,$_POST['feel']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$insertquery="INSERT INTO `corona`(`Name`, `Email`, `Mobile`, `feel`, `address`) VALUES ('$username','$email','$mobile','$feel','$address')";
$iquery=mysqli_query($con,$insertquery);
if($iquery){
  echo "hela";
}
}

?>























































<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Corona Virus</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    
                    <li class="nav-item"><a href="#syms" class="nav-link text-uppercase font-weight-bold">symptoms</a></li>
                    <li class="nav-item"><a href="#cure" class="nav-link text-uppercase font-weight-bold">Cure</a></li>
                   
                   <li class="nav-item dropdown text-uppercase font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Count
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="indiac.php">India Count</a>
          <a class="dropdown-item" href="worldc.php">World Count</a>
          
        </div>
      </li>
                
                    <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="main">
  <div class="row w-100 h-100">
    <div class="col-lg-4 col-md-4">
      <div class="left w-100 h-100 d-flex justify-content-center align-items-center">
      <img src="https://media.giphy.com/media/gkXSfmA8ynT59X9rr4/giphy.gif" width="300" height="300">
    </div>
  </div>
  <div class="col-lg-7 col-md-7">
     <div class="right w-100 h-100 d-flex justify-content-center align-items-center">
    <h2><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">It's your time to save the world😉😉<br> Stay home Stay Safe</h2>
    
    </div>
  </div>
  </div>
</div>



<section class="corona_updates">
  
  <section id="syms">
<div class="album py-5 bg-light" id="gallery">
        <div class="container">
          
 <div class="mb-3">
    <h2 class="text-uppercase text-center"> symptoms  </h2>
  
</div>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Fever</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap2.jpg" alt="Card image cap wow bounceInUp">
                <div class="card-body">
                  <p class="card-text">Tiredness</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">HeadAche</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

            

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap4.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Breathing Problem</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap13.jpg" alt="Card image cap wow bounceInUp">
                <div class="card-body">
                  <p class="card-text">Cough</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="cap6.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Throat Problems</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
</section>
<div class="container marketing" id="cure">

          
 <div class="mb-3">
    <h2 class="text-uppercase text-center">Cure   </h2>
  
</div>

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <img class="rounded-circle" src="cap8.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Wear Masks</h2>
            
           
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="cap9.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Stay Home Stay safe</h2>
            
            
           
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 wow fadeInRight">
            <img class="rounded-circle" src="cap10.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Social Distancing</h2>
            
            
           
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>
<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <img class="rounded-circle" src="cap7.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Regular Checkups</h2>
           
            
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="cap11.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Avoid Travelling</h2>
            
            
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 wow fadeInRight">
            <img class="rounded-circle" src="cap12.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Wash your hands</h2>
            
           
           
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="contact">
  <div class="section_header text-center mb-5 mt-4">
<h1>Contact Us</h1>
</div>
<div class="container">
  <div class="row">
  <div class="col-lg-8 offset-lg-2">
    <form action=""  method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="username" required>
  </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="E mail" name="email" required>
  </div>
   <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control"  placeholder="Mobile number" name="mobile">
  </div>
 

  <div class="form-group">
    <label> Describe your feeling</label>
    <input type="text" textarea class="form-control"  rows="3" name="feel"></textarea>
  </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" textarea class="form-control" rows="3" name="address"></textarea>
  </div>
  <button type="submit" class="btn" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
<footer class="white-section" id="contact">
    <div class="container-fluid1">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
     
    </div>
  </footer>













<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>