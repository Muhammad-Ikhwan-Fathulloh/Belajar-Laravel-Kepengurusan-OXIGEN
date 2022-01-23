<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#featured">Featured</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#information">Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Navbar -->

   <div class="container">
   	 <!-- Carousel -->
    <div id="home">
    	<div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.istockphoto.com/photos/cryptoart-display-in-art-gallery-picture-id1307112137?b=1&k=20&m=1307112137&s=170667a&w=0&h=mOYzSSKNchyiGXN0p8opkHezYiNtwXm8Y1Bdk3pWIGA=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/photos/looking-at-the-display-picture-id474223303?b=1&k=20&m=474223303&s=170667a&w=0&h=Bdxthr_JdFJE9LD25HSr8NCXc9BDwMSEhgi6-ueHVSA=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/photos/kids-in-modern-art-museum-picture-id1324782241?b=1&k=20&m=1324782241&s=170667a&w=0&h=R0yybYFObv9lcpcsGBOG1JixtTbcpVlklFTbahJRJeg=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <!-- Carousel -->

    <!-- Card -->
    <div id="featured" class="card text-center mb-3">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
    <!-- Card -->

    <!-- Card -->
    <div id="information" class="row row-cols-1 row-cols-md-4 g-4 mb-3">
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/cryptoart-display-in-art-gallery-picture-id1307112137?b=1&k=20&m=1307112137&s=170667a&w=0&h=mOYzSSKNchyiGXN0p8opkHezYiNtwXm8Y1Bdk3pWIGA=" class="d-block w-100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/looking-at-the-display-picture-id474223303?b=1&k=20&m=474223303&s=170667a&w=0&h=Bdxthr_JdFJE9LD25HSr8NCXc9BDwMSEhgi6-ueHVSA=" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/kids-in-modern-art-museum-picture-id1324782241?b=1&k=20&m=1324782241&s=170667a&w=0&h=R0yybYFObv9lcpcsGBOG1JixtTbcpVlklFTbahJRJeg=" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/photos/africanamerican-man-looking-at-modern-art-picture-id1280209674?b=1&k=20&m=1280209674&s=170667a&w=0&h=Cde8Zx1Pkof0FSI-hZsNF6zRvBnOi2ndJL9r4E7khew=" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
    <!-- Card -->

    <!-- Contact Us -->
    <div id="contact">
    	<h4 class="mb-3">Contact Us</h4>
    	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    </div>
    <!-- Contact Us -->

    <!-- Footer -->
    <div class="row mb-3">
    	<div class="col">
    		<img src="https://images.unsplash.com/photo-1496200186974-4293800e2c20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bG9nb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" width="200">
    	</div>
    	<div class="col">
    		<ul>
    			<li>Hello</li>
    			<li>Word</li>
    			<li>Oxigen</li>
    		</ul>
    	</div>
    	<div class="col">
    		<ul>
    			<li>Hello</li>
    			<li>Word</li>
    			<li>Oxigen</li>
    		</ul>
    	</div>
    </div>
    <!-- Footer -->
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>