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
          <a class="nav-link" href="create.php">Create account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
      </ul>
    </div>
  </div>

</nav>
   </div>
   <div class="container  d-flex justify-content-center align-items-center vh-100">
     <form method="POST" action="formconn.php" class="form-border">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="text" class="form-control" name="email" id="Email" >
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
.navbar-brand{
  font: bold;
}

.form-label{
  color: White;
}
.form-text{
  color: white;
}
.form-check-label{
  color: white;
}
.form{
    background-color: floralwhite;
    width: 25%;
    margin: 120px auto;
    padding:50px;
    box-shadow: 10px 10px 5px rgb(0, 0, 39, 1.0);
    border-radius: 14px;
}
  </style>
</html>