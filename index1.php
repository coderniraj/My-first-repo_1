<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Us Page Design </title>
    <link rel="stylesheet" href="work.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.css">
   
     <script src="bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <style>

            /* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
/* .sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
} */

/* When you mouse over the navigation links, change their color */
/* .sidenav a:hover {
  color: #f1f1f1;
} */

/* Position and style the close button (top right corner) */
/* .sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
} */

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
/* #main {
  transition: margin-left .5s;
  padding: 20px;
} */

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        </style>
</head>
<script>
    const hamBurgerBtn = document.getElementById('hamBurger');
hamBurgerBtn.addEventListener('click', function () {
    const responsiveRight = document.querySelector('.responsive')
    hamBurgerBtn.classList.toggle('active')
    if (hamBurgerBtn.classList.contains('active')) {
        responsiveRight.classList.add('active')
    }
    else {
        responsiveRight.classList.remove('active')
    }
})




</script>

<script>
    
    /* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px"
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
    
    </script>



<body style="background-image:aprt.jpg;">
    <!--================== Header  ==================-->
    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"style="background-color: aqua; padding: 10px;">
          <a class="navbar-brand" href="#"><img src="ekta.jpg" height="38rem" style="border-radius: 50%;" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="font-weight: bolder;font-size: larger;">Home Page</a>
              </li>
             
             
              <li class="nav-item">
                <a class="nav-link " href="ragistration.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;">Ragistration Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="aboutus.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> About us </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="signin.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Login Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="view.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Hotel Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="book.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> My booking Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Logout </a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

        <!--navbar -->
      


    <!--================== Header Section Ends Here -->


    <!--================== Home Section Starts from Here ==================-->
    <section id="home">
        <div class="home-left">
            <img src="room4.jpg" alt="">
        </div>
        <div class="home-right">
            <h2 class="home-heading"> Room Information System For Rent. </h2>
            <p class="home-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quibusdam blanditiis
                quas assumenda nam error vel dolores suscipit ad, sapiente deleniti ipsum, obcaecati perspiciatis.</p>
            <a href="" class="btn"> Our Work</a>
        </div>
    </section>
    <!--================== Home Section Ends Here -->

    <!--================== Workflow Section Starts from Here ==================-->
    <section id="workFlow">
        <h2 class="heading"> Room Information System For Rent. </h2>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, commodi sint. <br>Ipsam molestias
            nemovel laboriosam consequatur, perferendis<br> minima soluta? Natus necessitatibus autem suscipit!</p>
        <div class="num-container">
            <div class="num-item"><span>27,882 <br>Customers</span></div>
            <div class="num-item"><span>90% <br>Action Plans</span></div>
            <div class="num-item"><span>70,592 <br>Downloads</span></div>
        </div>
    </section>
    <!--================== Workflow Section Ends Here -->


    <!--================== Goal Section Starts from Here ==================-->
    <section id="goal">
        <div class="goal-left">
            <h2>Our Goal</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore omnis obcaecati incidunt asperiores,
                mollitia quibusdam velit at itaque sunt, culpa in pariatur quas, temporibus repellendus vitae! Vitae,
                illum asperiores.</p>
            <ul>
                <li> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, atque!</li>
                <li> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, atque!</li>
                <li> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, atque!</li>
            </ul>
            <a href="" class="btn"> Contact Us</a>
        </div>
        <div class="goal-right">
            <img src="room4.jpg" alt="">
        </div>
    </section>
    <!--================== Goal Section Ends Here -->
    

    <!--================== Our Team Section Starts from Here ==================-->
    <section id="our-Team">
        <h2>Our Members</h2>
        <p><a href="responsivenavbar.html"> team </a></p>
        <div class="teamContainer">
            <div class="team-item">
                <img src="room4.jpg" alt="">
                <h5 class="member-name">Varsha</h5>
                <span class="role">room</span>
            </div>
            <div class="team-item">
                <img src="room4.jpg" alt="">
                <h5 class="member-name">Krishna</h5>
                <span class="role">room</span>
            </div>
            <div class="team-item">
                <img src="room4.jpg" alt="">
                <h5 class="member-name">Akshita</h5>
                <span class="role">room</span>
            </div>
            <div class="team-item">
                <img src="room4.jpg" alt="">
                <h5 class="member-name">Aadhya</h5>
                <span class="role">room</span>
            </div>
        </div>
    </section>
    <!--================== Our Team Section Ends Here -->

    <!--================== Footer Starts from Here ==================-->
    <footer>
       


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Footer </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">

    <div class="footer-section">
        <div class="footer-item">
            <h2>Company</h2>
            <p><a href="aboutus.php"> About Us</a></p>
            <p><a href="contact.php"> Contact Us</a></p>
            <p><a href="ourservice.php"> Our Services</a></p>
            <p><a href="aboutus.php"> Privacy Policy</a></p>
        </div>
        <div class="footer-item">
            <h2>Get Help </h2>
            <p><a href="view.php"> Room</a></p>
            <p><a href="roominfo.php"> Society </a></p>
            <p><a href="roominfo.php"> Villa </a></p>
            <p><a href="view.php"> Apartment </a></p>
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

        <p> &copy;  Created this page Ekta Tiwari</p>
    </footer>
    <!--================== Footer Ends Here -->

</body>
</html>