<?php include './header.php';?>
<div id="Preloader"></div>
<body>
    <div id="Preloader"></div>
    <header>
        <div class="logo">
            <a href="./index.php">Discover Lanka</a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            <div class="menu">
                <i class="bi bi-list"></i>
            </div>
        </label>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="../about us/index.php">About us</a>
            <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Advanture</a></li>
              <li><a href="#">Luxury</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Wild Life</a></li>
              <li><a href="#">Heritage</a></li>
            </ul>
            <a href="../contact/index.html">Contact</a>
        </nav>
    </header>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./img/place.jpg" class="d-block w-100" alt="elephant">
          <div class="carousel-caption d-none d-md-block">
            <h5>Beach</h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./img/sigiriya.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Culture</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/elephant.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wild Life</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/food.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Food</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php include './footer.php'; ?>