<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body style="background-image:url('https://i.pinimg.com/originals/00/48/b3/0048b3cd28d6ad9715934107e1a615ec.jpg')">



<div class="containter">
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
    <a class="nav-link active" aria-current="page" href="/">LOGOUT</a>
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
    <a class="navbar-brand" href="/admin">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/customerview">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/order">Orders</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORY
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/categorydetails">Add category</a></li>
            <li><a class="dropdown-item" href="/categoryview">view category</a></li>
           
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           SUBCATEGORY
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/subcategorydetails">Add subcategory</a></li>
            <li><a class="dropdown-item" href="/subcategoryview">view subcategory</a></li>
            
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ITEM
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/itemdetails">Add item</a></li>
            <li><a class="dropdown-item" href="/itemview">view item</a></li>
           
          </ul>
         
          
         
        </li>
       
       
        <li class="nav-item">
          <a class="nav-link" href="/review">Reviews</a>
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


@yield("content")



</div>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
</body>

</html>