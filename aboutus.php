<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        #nav{
            height: 100px;
            width: auto;
            background: gray;
            display: flex;
        }
        li{
            text-decoration: none;
            float: left;
            list-style-type: none;
            padding: 20px;
        }
        #b{
            height: 400px;
            width: auto;
            background: blue;
            border: 1px solid black;
        }
        .a{
            height: 300px;
            width: 300px;
            background: yellow;
            margin-top: 50px;
            margin-left: 30px;
            float: left;
        }
        #c{
            height: 400px;
            width: auto;
            background: gray;
        }
        .c{
            height: 400px;
            width: 663px;
            background: yellow;
            float: left;
        }
        #d{
            height: 400px;
            width: auto;
            background: rgb(170, 166, 166);
        }
    </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid"style="background-color: aqua;">
          <a class="navbar-brand" href="#"><img src="ekta.jpg" height="25rem" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html" style="font-weight: bolder;font-size: larger;">Home Page</a>
              </li>
             
             
              <li class="nav-item">
                <a class="nav-link " href="ragistration.html" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;">Ragistration Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="aboutus.html" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> About us </a>
              </li>
      
              <li class="nav-item">
                <a class="nav-link " href="signin.html" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Login Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="view.html" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Hotel Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="book.html" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> My booking Page </a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

    <!-- end navbar -->
    <!-- start slider -->


  
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="font-style: italic; font-weight: 100px;">My Dream house</h4>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="homep.jpg" class="d-block w-100" alt="...">
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


    <!-- end slider -->


    <!-- start card -->
     
    <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <img src="aprt.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="aprt.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               
              </div>
            </div>
          </div>
        <div class="col-sm-3">
          <div class="card">
            <img src="aprt.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
             
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="aprt.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
          </div>
      </div>

    <!-- card end  -->
    <footer>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Footer </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <div class="footer-section">
        <div class="footer-item">
            <h2>Company</h2>
            <p><a href="card.html"> About Us</a></p>
            <p><a href="contact.html"> Contact Us</a></p>
            <p><a href="ourservice.html"> Our Services</a></p>
            <p><a href="team.html"> Privacy Policy</a></p>
        </div>
        <div class="footer-item">
            <h2>Get Help </h2>
            <p><a href="view.html"> Room</a></p>
            <p><a href="roominfo.html"> Society </a></p>
            <p><a href="roominfo.html"> Villa </a></p>
            <p><a href="view.html"> Apartment </a></p>
        </div>
        <div class="footer-item">
            <h2>Contact</h2>
            <p><a href=""> Mobile-9451633597 </a></p>
            <p><a href=""> Email-infoekta0@gmail.com </a></p>
            <p><a href="">Address- Lucknow </a></p>
            <p><a href="location.html"> Location </a></p>
        </div>
        <div class="footer-item social">
            <h2> Follow Us </h2>
            <ul>
                <li> <i class="fa-brands fa-instagram"></i> </li>
                <li> <i class="fa-brands fa-linkedin-in"></i> </li>
                <li> <i class="fa-brands fa-youtube"></i> </li>
                <li> <i class="fa-brands fa-twitter"></i> </li>
            </ul>
        </div>
        <p style="text-align: center;"> created - <span class="cpy-white poppins">Ekta Tiwari
        </span></p>

    </div>
</body>
</html>
        <p> &copy;  Created this page Ekta Tiwari</p>
    </footer>

    <!-- start footer -->
    
    <!-- end footer -->


</body>
</html>