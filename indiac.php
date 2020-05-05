<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Covid-19</title>
	 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
  <link rel="stylesheet" href="steel.css">

  <script src="https://kit.fontawesome.com/8d2d337e02.js" crossorigin="anonymous"></script>


</head>
<body onload="fetch()">













  
  
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Corona Virus</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    
                    <li class="nav-item"><a href="#index.php" class="nav-link text-uppercase font-weight-bold">symptoms</a></li>
                    <li class="nav-item"><a href="#index.php" class="nav-link text-uppercase font-weight-bold">Cure</a></li>
                   
                   <li class="nav-item dropdown text-uppercase font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Count
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="worldc.php">World Count</a>
          
         
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



<section class="corona_updates container-fluid1">
          
          
 <div class="mb-3">
    <h2 class="text-uppercase text-center"> Check out all recent corona affected states of India</h2>
  
</div>
<div class="table-responsive">
<table class=" table table-bordered table-striped text-center" id="tbval">
    <tr>
      <th class="text-capitalize">Latest Update</th>
      <th class="text-capitalize">State</th>
      <th class="text-capitalize">Confirmed</th>
       <th class="text-capitalize">Active</th>
      <th class="text-capitalize">Recovered</th>
      <th class="text-capitalize">Deaths</th>
      
    </tr>

<?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive=json_decode($data,true);
$statescount=count($coronalive['statewise']);

$i=1;
while($i< $statescount)
{

  ?>
<tr>
  <td><?php  echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
  <td><?php  echo $coronalive['statewise'][$i]['state'] ?></td>
  <td><?php  echo $coronalive['statewise'][$i]['confirmed'] ?></td>
  <td><?php  echo $coronalive['statewise'][$i]['active'] ?></td>
  <td><?php  echo $coronalive['statewise'][$i]['recovered'] ?></td>
  <td><?php  echo $coronalive['statewise'][$i]['deaths'] ?></td>
</tr>
 


  <?php

  $i++;
}


?>

  </table>


  
</div>
</div>
</section>
          
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>