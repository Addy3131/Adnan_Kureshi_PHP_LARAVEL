<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
        </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color:rgb(213, 228, 10) ;">
        <div class="container-fluid">
            <img src="photos/logo.png" alt="Logo" height="80px" width="80px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Electronics</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">TV</a></li>
                            <li><a class="dropdown-item" href="#">SmartPhone</a></li>
                            <li><a class="dropdown-item" href="#">Printer</a></li>
                            <li><a class="dropdown-item" href="#">Computers</a></li>
                            <li><a class="dropdown-item" href="#">Smart-Watches</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Furniture</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Beds</a></li>
                            <li><a class="dropdown-item" href="#">Sofa</a></li>
                            <li><a class="dropdown-item" href="#">Chair</a></li>
                            <li><a class="dropdown-item" href="#">Desk</a></li>
                            <li><a class="dropdown-item" href="#">Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Clocks</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Waist watches</a></li>
                            <li><a class="dropdown-item" href="#">Wall Clocks</a></li>
                            <li><a class="dropdown-item" href="#">Antique Clocks</a></li>
                            <li><a class="dropdown-item" href="#">Cuckoo Clocks</a></li>
                            <li><a class="dropdown-item" href="#">Alarm Clocks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Automobiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cars</a></li>
                            <li><a class="dropdown-item" href="#">Bikes</a></li>
                            <li><a class="dropdown-item" href="#">Motor bikes</a></li>
                            <li><a class="dropdown-item" href="#">Antique Cars</a></li>
                            <li><a class="dropdown-item" href="#">Antique Bikes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Books</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Fictional Books</a></li>
                            <li><a class="dropdown-item" href="#">Non-Fictional Books</a></li>
                            <li><a class="dropdown-item" href="#">Biography</a></li>
                            <li><a class="dropdown-item" href="#">Encyclopedia</a></li>
                            <li><a class="dropdown-item" href="#">Philosophy</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <div >
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
    
     
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="photos/pic1.jpg" alt="Los Angeles" class="d-block center" >
          <div class="carousel-caption">
            <h3 style="color: black;">Clock</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic2.jpg" alt="Chicago" class="d-block center" >
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="photos/pic3.jpg" alt="New York" class="d-block center" >
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>  
        </div>
      </div>
      
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    

    <div class="card-group">
        <div class="card text-center">
          <img src="photos/pic1.jpg" class="card-img-top center" alt="..." style="width: 300px;" >
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary">See Product</a>
          </div>
        </div>
        <div class="card text-center">
          <img src="photos/pic2.jpg" class="card-img-top center" alt="..." style="width: 300px;">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary">See Product</a>
          </div>
        </div>
        <div class="card text-center">
          <img src="photos/pic3.jpg" class="card-img-top center" alt="..."  style="width: 300px;">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary">See Product</a>
          </div>
        </div>
      </div>
</body>

</html>