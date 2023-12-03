<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOME PAGE </title>
    <link rel="icon" type="image/x-icon" href="./Images/favicon.png">
    <link rel="stylesheet" href="front.css">
    <link rel="stylesheet" media="screen and (max-width: 821px)" href="responsive.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
 integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.css">
   
     <script src="bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style=" background-image: linear-gradient(rgb(212, 226, 169),rgb(212, 226, 169),rgb(212, 226, 169));">
   <script>
    function scrolltop() {
    let a = window.document;
    a = location.href = '#home';
}
let contact = document.getElementById('contactForm');
contact.addEventListener('submit', function (e) {
    e.preventDefault();
    alert(`Sorry Request cannot be accepted due to some technical errors`);
})
   </script>
   

    <!-- Navbar Section -->
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
                <a class="nav-link " href="hotel.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> Hotel Page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="book.php" tabindex="-1" aria-disabled="true" style="font-weight: bolder;font-size: larger;"> My booking Page </a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>
    <!-- Bottom Navigator -->
    <section id="bottom">
        <div class="bottom-nav flex s-center items-center">
            <ul class="flex s-around items-center">
                <a href="#home">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-house"></i></li>
                </a>
                <a href="#about">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-user"></i></li>
                </a>
                <a href="#skills">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-code"></i></li>
                </a>
                <a href="#services">
                    <li class="bottomo-hover flex s-center items-center">
                        <i class="fa-solid fa-rocket"></i>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <!-- Home Section -->
    <section id="home" class="flex s-around sw-80 m-auto">
        <div class="home-left flex items-center">
            <div class="home-content">
                <h6 class="poppinss">Hi, I'm</h6>
                <h1>Ekta Tiwari</h1>
                <h4 class="poppinss">Room Information System For Rent</h4>
               
               
            </div>
        </div>
        <div class="home-right flex s-center items-center">
            <div class="circle flex s-center items-center" id="mainImage">
                <!-- Here in src replace the given link with your image link -->
                <img src="ekta.jpg" alt="">
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h1 class="t-center my-2  f-2">About Me</h1>
        <div class="about-container flex s-around ">
            <div class=" about-left flex s-center items-center">
                <!-- Here in src replade the given link with your secondary image link -->
                <img src="room4.jpg" alt="" style="width: 50%;">
            </div>

            <div class="about-right flex">
                <div class="about-content">
                    <h1 class="m-b-1 poppins">Ekta Tiwari</h1>
                    <p class=" poppins">A self-tought Frontend Web Developer pgdca student looking for
                        an opportunity in Web Development. <br>
                        Who is committed to study web development. Mindset to fullfill the life with
                        wonderful memories and knowledge.</p>
                    <a class="btn live poppins" id="hireme"
                        href="https://in.linkedin.com/in/raju-sheoran-b220781b8">Hire Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h1 class="t-center my-2  f-2">Our Management</h1>
        <div class="services-container flex s-around h-50">
        <div class=" skills-left flex s-center items-center">
            <img src="home4.jpg" alt="">
        </div>

        <div class="skills-right flex items-center">
            <div class="skillss-container">
                <div class="html bar p-relative"><span class="bar-content left text-dark"><h3>Security</h3></span><span
                        class="bar-content right-skills">90%</span></div>
                <div class="css bar p-relative"><span class="bar-content left"><h5 style="margin-top: 5rem;">facilities</h5></span><span
                        class="bar-content right-skills">80%</span></div>
                <div class="js bar p-relative"><span class="bar-content left "><h5>Avilability</h5></span><span
                        class="bar-content right-skills ">75%</span></div>
                <div class="bootstrap bar p-relative"><span class="bar-content left ">Society</span><span
                        class="bar-content right-skills">50%</span></div>
                <div class="reactjs bar p-relative"><span class="bar-content left ">Transpotation</span><span
                        class="bar-content right-skills ">30%</span></div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <h1 class=" t-center my-2 t-white f-2">Services</h1>
        <div class="services-container flex s-center">
            <div class="test-item flex f-col items-center">
                <img src="home4.jpg" alt="">
                <h1 class="t-white poppins">Villa</h1>
                <p class="t-white poppins">Web Development is envolving everywhere. Every startup and every bussines
                    have their own websites. As my passion I will help you to build your clean and fast website for your
                    startup or your bussines.</p>
            </div>
            <div class="test-item flex f-col items-center">
                <img src="room4.jpg" alt="">
                <h1 class="t-white poppins">Society</h1>
                <p class="t-white poppins">Social Media is the power of future. So I'll help in developing brand
                    awareness thow managing your social media handles and will to increase customer loyalty.</p>
            </div>
            <div class="test-item flex f-col items-center">
                <img src="home4.jpg" alt="">
                <h1 class="t-white poppins">Apartment</h1>
                <p class="t-white poppins">As a web developer also I will help your brand to grow up . I will provide
                    the growth strategies for your brand. And also help in searching techniques for your brand.</p>
            </div>

        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h1 class=" t-center my-2 t-white f-2">Projects</h1>
        <div class="projects-container flex s-center">
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one">
                    <img src="home4.jpg" alt="">
                </div>
                <h1 class="t-white poppins">Room</h1>
                <p class="t-white poppins"> A room app using HTML, CSS and JavaScript. Fetch the room information 
                    near by your location.</p>
                <div class="buttons flex s-around">
                    <a href="#"
                        target="_blanks" class="btn mx-1 m-top">Society</a>
                    <a href="#" target="_blanks" class="btn m-top live">
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one">
                    <img src="room4.jpg" alt="">
                </div>
                <h1 class="t-white poppins">Villa</h1>
                <p class="t-white poppins">A villa page using HTML and CSS. This webiste is for villa who
                    are fully luxiries.</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blanks"
                        class="btn mx-1 m-top">visit</a>
                    <a href="#" target="_blanks" class="btn m-top live">
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-two">
                    <img src="home4.jpg" alt="">
                </div>

                <h1 class="t-white poppins">Apartment</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</sp>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">visit</a>
                    <a href="#" target="_blank"
                        class="btn m-top live"> Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three">
                    <img src="room4.jpg" alt="">
                </div>

                <h1 class="t-white poppins">Resident</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">visit</a>
                    <a href="#" target="_blank" class="btn m-top live">
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three">
                    <img src="home4.jpg" alt="">
                </div>

                <h1 class="t-white poppins">Login Form</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">visit</a>
                    <a href="#" target="_blank" class="btn m-top live">Live
                        Link</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Me Section -->
    <section id="contact" class="m-b-1">
        <h1 class=" t-center my-2  f-2" style="font-family: cursive;font-weight: bolder;">Contact Me</h1>
        <div class="contact-container flex s-around items-centers">
            <div class="form" id="contactForm">
                <form action="" id="contactFrom">
                    <div class="name form-div">
                        <input type="text" name="name" id="name" class="poppins" placeholder="Enter Your Name">
                    </div>
                    <div class="email form-div">
                        <input type="email" name="email" id="email" class="poppins" placeholder="Enter Your Email"
                            required>
                    </div>
                    <div class="phone form-div">
                        <input type="phone" name="phone" id="phone" class="poppins" placeholder="Enter Your Phone"
                            required>
                    </div>
                    <div class="textarea form-div">
                        <textarea name="text" id="textarea" cols="30" rows="10" class="poppins"
                            placeholder="Enter Messages"></textarea>
                    </div>
                    <button type="submit" class="btn poppins" id="submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer">
        <ul class="flex s-center w-80 m-auto my-2 res">
            <li><a href="#home" class="poppinss">Home</a></li>
            <li><a href="#about" class="poppinss">About</a></li>
            <li><a href="#skills" class="poppinss">Our Management</a></li>
            <li><a href="#projects" class="poppinss">Projects</a></li>
            <li><a href="ourservice.html" class="poppinss">Our Service</a></li>
        </ul>
        <ul class="flex s-center w-80 font-awesome ">
            <a href="https://in.linkedin.com/in/ektatiwari" target="_blank">
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </a>
           
            <a href="https://www.instagram.com/ekta3962" target="_blank">
                <li><i class="fa-brands fa-instagram"></i></li>
            </a>
            <a href="https://www.youtube.com/channel/@ekta553" target="_blank">
                <li><i class="fa-brands fa-youtube"></i></li>
            </a>
        </ul>
        <p> created - <span class="cpy-white poppins">Ekta Tiwari
                </span></p>

    </footer>

    <div id="scroll-top" onclick="scrolltop()">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div>

</body>
</html>