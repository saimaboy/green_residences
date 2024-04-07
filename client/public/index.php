<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hotel booking website-Home </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php require('../../server/links.php') ?>

  <style>
    * {

      font-family: 'Inter', sans-serif;

    }

    .h-font {
      font-family: 'Poppins', sans-serif;
    }

    .custom-bg {
      background-color: #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
    }

    .availabity-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .availabity-form {
        margin-top: 0px;
        padding: 0 35px;
      }

    }


    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

   
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</head>

<body class="bg-light">
  <?php require('../../components/header.php'); ?>

  
  <div class="container-fluid px-lg-4 mt-4">
    
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../../img/hostel_1.jpg" class="w-100 " />
        </div>
        <div class="swiper-slide">
          <img src="../../img/hosterl_2.jpg" class="w-100 " />
        </div>
        <div class="swiper-slide">
          <img src="../../img/hostel_3.jpg" class="w-100 " />
        </div>

      </div>
    </div>
  </div>


  <!-- availabity form -->
  <div class="container availabity-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow mt-lg-5  rounded">
        <h5 class="">search Hostels</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-4 mb-3">

              <label class="form-label" style="font-weight:500">Check-In Date</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-4 mb-3">
              <label class="form-label" style="font-weight:500">Check-Out Date</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Number Of Students</label>
              <select class="form-select shadow-none">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  </div>



  <!-- Rooms  -->

  <h2 class="mt-5 pt-4 md-4 text-center "></h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="width:350px; margin: auto;">
          <img src="../../img/home_1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Sample Room</h5>
            <h6 class="mb-4 ">Rs. 100000 per year </h6>
            <div class="fuatures md-4">
              <h6 class="mb-1">Fuatures</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">1 balcony</span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1 mt-4">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">Room Heater</span>
            </div>
            <h6 class="mb-1 mt-4 ">Student count</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">3 students</span>

            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

            </div>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="../pages/rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="width:350px; margin: auto;">
          <img src="../../img/home_2.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Sample Room</h5>
            <h6 class="mb-4 ">Rs. 100000 per year </h6>
            <div class="fuatures md-4">
              <h6 class="mb-1">Fuatures</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">1 balcony</span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1 mt-4">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">Room Heater</span>
            </div>
            <h6 class="mb-1 mt-4 ">Student count</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">3 students</span>
            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

            </div>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="../pages/rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="width:350px; margin: auto;">
          <img src="../../img/home_3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Sample Room</h5>
            <h6 class="mb-4 ">Rs. 100000 per year </h6>
            <div class="fuatures md-4">
              <h6 class="mb-1">Fuatures</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">2 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">1 balcony</span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1 mt-4">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-warp">Room Heater</span>
            </div>
            <h6 class="mb-1 mt-4 ">Student count</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">3 students</span>
            <div class="rating mb-4 mt-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light text-dark text-warp">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

            </div>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="../pages/rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">More Rooms<i class="bi bi-arrow-right p-1"></i></a>
      </div>
    </div>
  </div>




  
  <h2 class="mt-5 pt-4 md-4 text-center  ">Contact US </h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe height="320" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5758403132254!2d80.04157289999999!3d6.8213291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1708017488781!5m2!1sen!2slk" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call US</h5>
          <a href="tel:+941154566" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone"></i>tel:+941154566</a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          
        <div class="container mt-5">

     
          
              
                    <h3 class="card-title text-center mb-4">Feedback Form</h3>
                    <form>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="inputMessage" rows="5" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
             
         
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


  <?php require('../../components/footer.php'); ?>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    
  </script>


  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-testimonials', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>

</html>