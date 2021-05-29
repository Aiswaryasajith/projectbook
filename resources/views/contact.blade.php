<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('')">
<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img weight='500px' src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnIf2Zd_1ONzpemTS1TfctjlWAa57mzE4K-A&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-text-top">
      BOOKCARNIVEL
    </a>
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">LOGIN</a>
  </li>
 </ul>
  </div>
</nav>
</div>
</div>
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">SHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">COMBO OFFER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/track">TrackYourOrder</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          SelectLanguage
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#"></a>English</li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a>Malayalam</li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a>Hindi</li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="row">
<div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>
</div>
<div class="row">
<div class="alert alert-light" role="alert">

</div>
<div class="row">
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
             </div>

</div>
</div>


<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

<form action="forms/contact.php" method="post" role="form" class="php-email-form">
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
  </div>
  <div class="form-group mt-3">
    <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
  </div>
  <div class="my-3">
    <div class="loading">Loading</div>
    <div class="error-message"></div>
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>
  <div class="text-center"><button type="submit">Send Message</button></div>
</form>
</div>

</div>


</div>






</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
</body>
</html>