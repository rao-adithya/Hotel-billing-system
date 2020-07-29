<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid black;
  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: green;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: green;
}
  img {
  border-radius: 15px;
  border: 2px solid black;
  width:100%;
  height:800px;
}
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <label style="font-size:25px;color:white;">Gallery</label>
    </li>
  </ul>
</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  <ul class="navbar-nav">
    <li class="nav-item">
      <label style="color:white;font-size:20px;"></label>
    </li>
  </ul>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul><br>
  <div class="container" style="margin-top:40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/848/84837133.jpg" >
    </div>
    <div class="carousel-item">
      <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/130/130619315.jpg" >
    </div>
    <div class="carousel-item">
      <img src="https://www.hotelsandvillasincrete.com/images/search-results/Lassithi/Elounda/Ocean-Pearl-Villa/ocean-pearl-villa-17.jpg">
    </div>
    <div class="carousel-item">
      <img src="http://www.theoceanpearl.in/wp-content/uploads/2018/01/hotel-view2.jpg">
    </div>
        <div class="carousel-item">
      <img src="https://www.pearlsouthpadre.com/site/assets/files/2246/pearl-south-padre.jpg">
    </div>
        <div class="carousel-item">
      <img src="https://www.hotelsandvillasincrete.com/images/search-results/Lassithi/Elounda/Ocean-Pearl-Villa/ocean-pearl-villa-20.jpg">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
  </body>
