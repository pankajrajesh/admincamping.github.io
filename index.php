<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project-php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Camping-Lake</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">AdminLogin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/1photo.jpg" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="images/2photo.webp" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="images/3photo.jpg" alt="New York" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<section class="my-5">
  <div class="py-4">
    <h2 class="text-center">About Us</h2>
  </div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/6photo.webp" class="img-fluid">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h4 class="display-4 pt-3">Adventure Camping East-Side</h4>
    <p class="about">Adventure camping is a great way to spend your time exploring the outdoors. It’s an adventure unlike any other, and it involves all of your senses! This blog post will discuss adventure camping, what adventure camping is, how to get started with adventure camping trips, and tips for safe adventure camps. So grab a tent and prepare to have some real adventure!(swoop swing(100ft),ATV 700CC,Buggy-ride,cycling,)</p>
  </div>
</div>
</div>
</section>

<section class="my-5" id="services">
  <div class="py-4">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="images/4photo.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="text-2">Breakfast buffet/Dinner buffet</h4>
    <a href="#" class="btn btn-primary">See Profile</a>
       </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="images/8photo.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="text-2">Dome Tent</h4>
    <a href="#" class="btn btn-primary">See Profile</a>
       </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="images/9photo.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="text-2">Luxury Bell Tents</h4>
    <a href="#" class="btn btn-primary">See Profile</a>
       </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-4">
    <h2 class="text-center">Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/10photo.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/11photo.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/12photo.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/13photo.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/15photo.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/16photo.jpg" class="img-fluid pb-3">
      </div>
    </div>
  </div>
</section>
<section class="my-5" id="contact">
  <div class="py-4">
    <h2 class="text-center">Contact</h2>
</div>
      <div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
      <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" class="form-control">
 </div>
 <div class="form-group">
  <label>Mobile</label>
  <input type="text" name="mobile" class="form-control">
</div>
<div class="form-group">
  <label>Comments</label>
  <textarea class="form-control" name="comments"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
     </form>
    </div>
</section>
<footer>
       <p class="p-2 bg-dark text-white text-center"><span>Created By <a herf="#">Pankaj sharma</a> | <span class="far fa-copyright"> <span> pankaj  sharma  Desgin By Pankaj </span> </span></span></p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;1,100&family=Jost:wght@100&display=swap" rel="stylesheet">
</body>
</html>