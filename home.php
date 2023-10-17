<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="car.css">
      <title>Bootstrap navbarCarousel</title>
  </head>
  <body>
<div class="container">
   <img src="Sneakers/11.jpg" class="bg-image" alt="bg1">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Shoe-reffic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
      </ul>
    </div>
  </div>

</nav>


    <!--carousel-->
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="Sneakers/11.jpg" class="d-block w-100 c-img" alt="Slide 1">
    </div>
    <div class="carousel-item c-item">
      <img src="Sneakers/111.jpg" class="d-block w-100 c-img" alt="Slide 2">
    </div>
    <div class="carousel-item c-item">
      <img src="Sneakers/22.jpg" class="d-block w-100 c-img" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   </div>
   </div>
  </body>
  <style>
    body{
  height: 5000px;
  overflow-x: hidden ;
}
.bg-image{
  height:100%;
  width:100vw;
  object-fit: cover;
  filter: brightness(0.6);
  position: absolute;
  top:0;
  left: 0;
  z-index: -1;
}
.c-item{
  height: 500px;
}
.c-img{
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);

}
.navbar-brand{
  font: bold;
}
  </style>
</html>