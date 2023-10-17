
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="car.css">
      <title>Create Account</title>
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
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Sign up!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
      </ul>
    </div>
  </div>

</nav>
<div class="container  d-flex justify-content-center align-items-center vh-100">
     <form  method="POST" action="createconn.php" class="form-border">
  <div class="mb-3">
    <label for="Fname" class="form-label">First name</label>
    <input type="text" name="Fname" class="form-control" placeholder="First name" >
  </div>
  <div class="mb-3">
    <label for="Lname" class="form-label">Last name</label>
    <input type="text" name="Lname" class="form-control" name="Lname" placeholder="Last name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="register" class="btn btn-primary">Create</button>
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
.form-border {
    border: 2px solid white;
    padding: 20px;
    backdrop-filter: blur(5px);
    background-color: rgba(255, 255, 255, 0.1);
    width: 400px; 
     border-radius: 14px;
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
.form-control {
    width: 100%; 
}

  </style>
</html>