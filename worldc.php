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
          <a class="dropdown-item" href="indiac.php">India Count</a>
          
          
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



<section class="corona_updates container-fluid1">
          
 <div class="mb-3">
    <h2 class="text-uppercase text-center"> Check out all stats of Corona affected Nations</h2>
  
</div>
<div class="table-responsive">
<table class=" table table-bordered table-striped text-center" id="tbval">
    <tr>
      <th>Country</th>
      <th>Total Confirmed</th>
      <th>Total Recoveries</th>
       <th>Total Deaths</th>
      <th>Total Deaths</th>
      <th>New Recoveries</th>
      <th>New Deaths</th>
    </tr>
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

<script>
function fetch()
{
$.get("https://api.covid19api.com/summary",

  function(data)
  {
    //console.log(data['Countries'].length);
    var tbval = document.getElementById('tbval');
    for(var i=1;i<(data['Countries'].length);i++)
    {
      var x=tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background='#4bb7d8';
      tbval.rows[i].cells[0].style.color='#fff';


      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background='#7a4a91';
      

      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background='#f36e23';
      


      x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background='#7a4a91';
      


      x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
      tbval.rows[i].cells[4].style.background='#f36e23';
      


      x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
      tbval.rows[i].cells[5].style.background='#4bb7d8';
      

      x.insertCell(6);
      tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
      tbval.rows[i].cells[6].style.background='#7a4a91';
      


    }
  }



  );
}
</script>
</body>
</html>