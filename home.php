<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sanjeevani HealthCare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:white;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="pharmacy.php">pharmacy</a></li>
        <li><a href="charges.php">Charges and payment</a></li>
        <li><a href="search.php">search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="clogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="location.php">location</a></p>
      <p><a href="search.php">patient search</a></p>
      <p><a href="lindex.php">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="p2.jpg" alt="Chania" width="860" height="500">
              </div>

              <div class="item">
                <img src="p1.jpg" alt="Chania" width="860" height="500">
              </div>

              <div class="item">
                <img src="p2.jpg" alt="Flower" width="860" height="500">
              </div>

              <div class="item">
                <img src="p1.jpg" alt="Flower" width="860" height="500">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><a href="pindex.php">patient Login</a></p>
      </div>
      <div class="well">
          <p><a href="lindex.php">staff Login</a></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p><blockquote>
<h2 class="text-warning">Sanjeevni</h2>
Sanjeevani Hospitals is an Indian hospital chain based in Chennai, India.It was founded by Dr Selvan C. Reddy in 1983 and has hospitals in India, Bangladesh, Kuwait and Qatar. Several of the group's hospitals have been among the first in India to receive international healthcare accreditation by America-based Joint Commission International (JCI).
The group has developed services in telemedicine, after starting a pilot project in 2000 in Pratap Reddy's home village. At present, Apollo hospitals are present in 120 countries around the world.
<footer>from wiki</footer>
</blockquote></a></p>
</footer>

</body>
</html>
