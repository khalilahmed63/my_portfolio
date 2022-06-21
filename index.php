<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


  <title>Khalil</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/style.css">


  <script>
          function form_validation(){
            var is_validate = true;
                // Input Fields Data
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;
          

            // Input Fields Patterns

            var alphabets_pattern = /^[a-z 0-9]{3,200}$/i;
            var email_pattern = new RegExp(/^[a-z0-9]{3,30}@[a-z]{2,20}\.(com|org)$/i);
           
              if(name == ""){
                is_validate = false;
                document.getElementById("name_msg").innerHTML  = "Please Enter Your Name";
              }
              else{
                document.getElementById("name_msg").innerHTML = "";
                if(!alphabets_pattern.test(name)){
                  is_validate = false;
                  document.getElementById("name_msg").innerHTML  = "First Name Should Contain only Alphabets range[3-15]";
                }
              }

             

              if(email == ""){
                is_validate = false;
                document.getElementById("email_msg").innerHTML  = "Please Enter Email";
              }
              else{
                document.getElementById("email_msg").innerHTML = "";
                if(!email_pattern.test(email)){
                  is_validate = false;
                  document.getElementById("email_msg").innerHTML  = "Email Should Be Like: abc@gmail.com";
                }
              }

              if(subject == ""){
                is_validate = false;
                document.getElementById("subject_msg").innerHTML  = "Please Enter Your Subject";
              }
              else{
                document.getElementById("subject_msg").innerHTML = "";
                if(!alphabets_pattern.test(subject)){
                  is_validate = false;
                  document.getElementById("subject_msg").innerHTML  = "Subject Should Contain Alphabets range[3-15]";
                }
              }
              

              if(message == ""){
                is_validate = false;
                document.getElementById("message_msg").innerHTML  = "Please Enter Message";
              }
              else{
                document.getElementById("message_msg").innerHTML = "";
                if(!alphabets_pattern.test(message)){
                  is_validate = false;
                  document.getElementById("message_msg").innerHTML  = "Message range[3-15]";
                }
              }

  

            if(is_validate){
              return true;
            }
            else{
              return false;
            }
          }
        </script>
</head>

<body>


<!-- <button onclick="setTimeout(myFunction, 3000)">Try it</button> -->

<?php 
if (isset($_REQUEST['msg'])) {
  ?>
 <script>
  myFunction();
function myFunction() {
  alert('Your message sent Successfully');
}
</script>
  <?php
}
?>


<!-- message Alert -->
<!-- <div class="alert alert-warning alert-dismissible fade show m-0" role="alert" style="position: fixed; width: 100%; z-index:100;">
  <strong>Congrates!</strong> Your message Sent Successfull.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<!-- message Alert -->



  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none text-white"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a>
        </li>
        <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  <div id="first_sec_dark_bg"></div>

  <!-- ======= Hero Section ======= -->
  <div class="top_background d-flex justify-content-center">
    <div class="col-2 yellow_div"></div>
    <div class="col-10 dark_div"></div>
  </div>
  <div id="hero" class="row m-0 p-0 justify-content-center align-items-center ">
    <div class="profile_img col-md-4 col-md-4 col-sm-12">
      <img src="assets/images/profile-img.jpg" class="img-fluid" alt="profile">
    </div>
    <div class="col-md-8 col-sm-12 px-lg-5 " data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 ml-5">Khalil Ahmed.</h1>
      <h1 class="text-white">I'm <span class="typed"
          data-typed-items="WEB Designer,WEB Developer, Freelancer, Photographer"></span></h1>
      <p class="text-muted">I'm a Pakistan based Web developer and web designer focused on crafting clean &
        user-friendly experiences, I am passionate about building excellent software that improve the lives of those
        around me.</p>
      <div class="row ">
        <div class="col-lg-3 col-md-12 col-sm-12 mt-3">

        <p><a href="download.php?path=khalil-cv.pdf" class="btn btn-warning rounded-pill " style="background-color: #ffb400; border: 4px solid #9a7318;">Download Cv</a></p>
        </div>
        <div class="col-md-9 col-md-12 col-sm-12">

          <div class="social-links ">
            <a href="https://twitter.com/khalilahmedpan5" class="twitter"><i class="bx bxl-twitter text-white"></i></a>
            <a href="https://web.facebook.com/khalil.ahmedp63/" class="facebook"><i class="bx bxl-facebook text-white"></i></a>
            <a href="https://www.instagram.com/khalil_ahmed_panhwar/" class="instagram"><i class="bx bxl-instagram text-white"></i></a>
            <a href="https://github.com/khalilahmed63" class="google-plus"><i class="bx bxl-github text-white"></i></a>
            <a href="https://www.linkedin.com/in/khalil-ahmed-308a061a6/" class="linkedin"><i class="bx bxl-linkedin text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Hero -->

  <div id="about" class="about ">
    <!-- second section start -->
    <div class="container">

      <div class="about_heading d-flex align-items-center justify-content-center">
        <h1 class="fw-bold ">RESUME</h1>
        <h2 class="fw-bold text-white">ABOUT <span style="color: #ffb400;">ME</span> </h2>
      </div>
      <div class="container row d-flex m-0 p-0 text-white justify-content-center">
        <div class="col-md-6 col-sm-12 row">
          <h3 class="text-white fw-bold mb-3">PERSONAL INFO</h3>
          <div class="col-6">
            <ul>
              <li class="fw-bold">
                <P> First Name : <span class=" text-muted">Khalil</span> </P>
              </li>
              <li class="fw-bold">
                <P> Age : <span class=" text-muted">20</span></P>
              </li>
              <li class="fw-bold">
                <P> Freelance : <span class=" text-muted">Avaliable</span></P>
              </li>
              <li class="fw-bold">
                <P> Phone : <span class=" text-muted">+923070599766</span></P>
              </li>
              
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li class="fw-bold">
                <P> Last Name : <span class=" text-muted">Ahmed</span></P>
              </li>
              <li class="fw-bold">
                <P> Natoinality : <span class=" text-muted">pakistan</span></P>
              </li>
              <li class="fw-bold">
                <P> Address : <span class=" text-muted">hyderabad</span></P>
              </li>
              <li class="fw-bold">
                <P> Language : <span class=" text-muted">English, Urdu, Sindhi</span></P>
              </li>
            </ul>
          </div>

        </div>
        <div class="col-md-6 col-sm-12 row  justify-content-center ">

          <div class="col-md-5 col-sm-12 rounded p-3 m-3" style="border: 2px solid gray;">
            <h1 class="fw-bold " style="color: #ffb400; border-bottom: 2px solid gray;">2+</h1>
            <p class="" style="margin-left: 20px;">YEARS OF EXPERIENCE</p>
          </div>
          <div class="col-md-5 col-sm-12 rounded p-3 m-3" style="border: 2px solid gray;">
            <h1 class="fw-bold" style="color: #ffb400; border-bottom: 2px solid gray;">18+</h1>
            <p class="" style="margin-left: 20px;">COMPLETED PROJECTS</p>
          </div>


          <div class="col-md-5 col-sm-12 rounded p-3 m-3" style="border: 2px solid gray;">
            <h1 class="fw-bold" style="color: #ffb400; border-bottom: 2px solid gray;">87+</h1>
            <p class="" style="margin-left: 20px;">HAPPY COUSTOMERS</p>
          </div>
          <div class="col-md-5 col-sm-12 rounded p-3 m-3" style="border: 2px solid gray;">
            <h1 class="fw-bold" style="color: #ffb400; border-bottom: 2px solid gray;">12+</h1>
            <p class="" style="margin-left: 20px;">AWARDS WON</p>
          </div>

        </div>
      </div>
    </div>
  </div><!-- second section end -->

  <div id="resume">
    <!-- third section start -->
    <div class=" d-flex align-items-center justify-content-center">
      
      <div class="container">
        <h2 class="fw-bold py-5 text-white text-center">MY <span style="color: #ffb400;">SkILLS</span> </h2>
        
        <div class="row py-2">
          <div class="col-md-6 py-3">
            <h4 class="fw-bold text-white text-center">HTML </h4>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6 py-3">
              <h4 class="fw-bold text-white text-center">CSS </h4>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
          <div class="col-md-6 py-3">
            <h4 class="fw-bold text-white text-center">JAVASCRIPT </h4>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6 py-3">
              <h4 class="fw-bold text-white text-center">BOOTSTRAP </h4>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
          <div class="col-md-6 py-3">
            <h4 class="fw-bold text-white text-center">PHP </h4>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6 py-3">
              <h4 class="fw-bold text-white text-center">JQUERY </h4>
              <div class="progress">
                <div class="progress-bar bg-warning " role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
          <div class="col-md-6 py-3">
            <h4 class="fw-bold text-white text-center">REACT </h4>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6 py-3">
              <h4 class="fw-bold text-white text-center">WORDPRESS </h4>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
            
        </div>
    </div>
    </div>
  </div><!-- thrid section end -->

  <div class=" fourth_section" id=""><!-- fourth section start -->
    <div  class="container ">
      <h2 class="fw-bold py-5 m-0 text-white text-center">EXPERIENCE & <span style="color: #ffb400;">EDUCATION</span> </h2>
      
      <div class="container row d-flex text-white m-0 ">
        <div class="col-md-6 col-sm-12 ">
          <h4 class="fw-bold text-white ">.Education </h4>
          
          <ul>
            <li class="border-bottom mt-5">
              <P class="fw-bold m-0 p-0">BACHELOR OF COMPUTER SCIENCE</P>
              <P><span class=" text-muted ">2018 - 2021</span> </P>
              <P> UNIVERSITY OF SINDH JAMSHORO</P>
              </li>
              <li class="border-bottom mt-5">
                <P class="fw-bold m-0 p-0">Oracle(ERP) 6 month traning</P>
                <P><span class=" text-muted ">sep-2020 - Mar-2020</span> </P>
                <P>(IMCS) Institute of Mathematics & Computer Science</P>
              </li>
              <li class="border-bottom mt-5">
                <P class="fw-bold m-0 p-0">(php) Web Development 4 Month Traning</P>
                <P><span class=" text-muted ">Feb-2022 - May-2022</span> </P>
                <P>(HIST) Hidaya Institute of Science & technology</P>
              </li>
              
            </ul>
            
          </div>
          <div class="col-md-6 col-sm-12">
            <h4 class="fw-bold text-white   ">.Professional Experience </h4>
            <ul>
              <li class="border-bottom mt-5">
                <P class="fw-bold m-0 p-0">(HIST) Hidaya Institute of Science & technology</P>
                <P><span class=" text-muted ">Feb-2022 - May-2022</span> </P>
                <P>Full-Stack Developer</P>
              </li>
              <li class="border-bottom mt-5">
                <P class="fw-bold m-0 p-0">Digiventic</P>
                <P><span class=" text-muted ">Aug-2020 - jan-2021</span> </P>
                <P>Front-End Developer</P>
              </li>
              
            </ul>
          </div>
    </div>

  </div><!-- fourth section end -->
  
  <div class="container fifth_section" id="portfolio" ><!-- fifth section start -->
    <h2 class="fw-bold py-5 m-0 text-white text-center">PORT<span style="color: #ffb400;">FOLIO</span> </h2>
    <div class="row">  
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="greenzone"><img  src="assets/images/greenzone.png" class="img-fluid" alt="profile" ></a></div>
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="http://khalilahmed.epizy.com/?i=1"><img  src="assets/images/bookmark.png" class="img-fluid" alt="profile" ></a></div>
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="Goazad"><img  src="assets/images/azad.png" class="img-fluid" alt="profile" ></a></div>
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="Digiventic"><img  src="assets/images/digiventic.png" class="img-fluid" alt="profile" ></a></div>
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="#"><img  src="assets/images/portfolio.png" class="img-fluid" alt="profile" ></a></div>
      <div class="col-lg-4 col-md-6 col-sm-12 p-4 " ><a href="http://khalil.move.pk/?i=1"><img  src="assets/images/blog63.png" class="img-fluid" alt="profile" ></a></div>

    </div>

  </div ><!-- fifth section end -->

  <div class="container" id="contact" style="width: 100%;"> <!-- sixth section start -->
    <h2 class="fw-bold py-5 m-0 text-white text-center">CONTACT <span style="color: #ffb400;">ME</span> </h2>
    <div class="row m-0 p-0">
      <div class="col-md-4 col-sm-12 text-white">
        <h2 class="fw-bold pb-3 m-0 text-white ">(: DON'T BE  <span style="color: #ffb400;">SHY !</span> </h2>
        <p>Feel free to get in touch with me. I am always open to discussing new Projects, creative ideas or opportunities to be part of your vision.</p>
        <div class="d-flex">
          <div>
            <i class="fa-solid fa-map p-1" style="color: #ffb400; font-size: 2rem; "></i>
          </div>
          <div>

            <h5 class="fw-bold">Address Point</h5>
            <p>Happy Homes Colony, Hyderabad Sindh, Pakistan .</p>
          </div>

        </div>
        <div class="d-flex">
          <div>
            <i class="fa-solid fa-envelope p-1" style="color: #ffb400; font-size: 2rem;"></i>
          </div>
          <div>

            <h5 class="fw-bold">Mail Me</h5>
            <p>panhwarkhalilahmed@gmail.com</p>
          </div>

        </div>
        <div class="d-flex">
          <div>
            <i class="fa-solid fa-phone p-1" style="color: #ffb400; font-size: 2rem;"></i>
          </div>
          <div>

            <h5 class="fw-bold">Call Me</h5>
            <p>+923070599766</p>
          </div>

        </div>
       
      </div>
      <div class="col-md-8 col-sm-12 text-white p-0">
        <form action="contact.php" method="POST" onsubmit="return form_validation()">
        <div class="row m-0 p-0">
          
          <div class="col-md-6 col-sm-12  px-2"><p class="text-danger" id="name_msg"></p><input id='name' name="name" class="p-2 form_field"  type="text" placeholder="Your name " style="width: 100%; background-color: #45505b; border: 4px solid #333b43; border-radius: 30px;" ></div>
          <div class="col-md-6 col-sm-12  px-2"><p class="text-danger " id="email_msg"></p><input id="email" name="email" class="p-2 form_field"  type="email" placeholder="Your Email " style="width: 100%; background-color: #45505b; border: 4px solid #333b43; border-radius: 30px;"></div>
        </div>
        <div class=" p-1"><p class="text-danger" id="subject_msg"></p><input class="col-12 p-2" id="subject" name="subject" class="form_field" type="text" placeholder="Your Subject " style="width: 100%; background-color: #45505b; border: 4px solid #333b43; border-radius: 30px;"></div>
        <div class=" p-1"><p class="text-danger" id="message_msg" ></p><textarea class="col-12 p-2" id="message"  name="message" class="form_field" cols="30" rows="7" placeholder="Your Message " style="width: 100%; background-color: #45505b; border: 4px solid #333b43; border-radius: 20px;"></textarea></div>
        <div class=" p-1"> <button type="submit" name="send" class="btn btn-warning rounded-pill " style="background-color: #ffb400; border: 4px solid #9a7318;" >Send Message</button></div>
        </form>
      </div>
    </div>

  </div> <!-- sixth section end -->











  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


   
 




</body>

</html>