<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial Palace - HOME</title>
    <link rel="stylesheet" href="css/home.css">
    <?php require ('inc/links.php');?>
<style>
    .availability-form{
        margin-top:-50px;
        z-index:2;
        position: relative;
    }
    @media screen and (max-width:575px) { 
        .availability-form{
        margin-top:25px;
        padding:0px 35px;
    }
    }

</style>

</head>
<body id = "wallpaper">
<?php require('inc/header.php');?>
<!-- <a href="./logout.php"><button class="btn btn-danger" style="position:fixed; z-index: 5000; right:10px; top:20px;">Logout</button></a> -->
<!-- carousel -->
<div class="container-fluid">
<div class="swiper swiper-container px-lg-4 mt-4">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/img1.png" class="w-100 d-block" />
         </div>
         <div class="swiper-slide">
        <img src="images/img2.png" class="w-100 d-block"/>
         </div>
         <div class="swiper-slide">
        <img src="images/img3.png" class="w-100 d-block"/>
         </div>
         <div class="swiper-slide">
        <img src="images/img4.png" class="w-100 d-block"/>
         </div>
         <div class="swiper-slide">
        <img src="images/img6.png" class="w-100 d-block"/>
         </div>
         <div class="swiper-slide">
        <img src="images/carousel/IMG_99736.png" class="w-100 d-block"/>
         </div>
    </div>
  </div>

</div>


<!-- <div class="asma" style = "margin-left:20px;">
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
</div> -->

<!-- Our Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilites</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4" id = "oyeye">
            <img src="images/wifi2.png" width="120px">
            <h5 class="mt-3" >WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4" id = "oyeye">
            <img src="images/swmp2.svg" width="160px">
            <h5 class="mt-3">SWIMMING POOL</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4" id = "oyeye">
            <img src="images/gym3.jpeg" width="190px">
            <h5 class="mt-3">GYM</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4" id = "oyeye">
            <img src="images/dining2.jpeg" width="190px">
            <h5 class="mt-3">DINING</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4" id = "oyeye">
            <img src="images/bar2.jpg" width="190px">
            <h5 class="mt-3">BAR</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="./facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities -></a>
        </div>
    </div>
</div>

<!-- Our Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                
                <h6 class = "m-0 ms-2">atharva</h6>
            </div>
            <p>
            My stay at the Celestial Palace was absolutely delightful. The staff was incredibly accommodating and friendly, always going the extra mile to ensure that my needs were met.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star" text-warning></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                
                <h6 class = "m-0 ms-2">aditya</h6>
            </div>
            <p>
            My family and I had an amazing time at the Ceestial Paradise. The entire property was surrounded by lush greenery, creating a tranquil and rejuvenating atmosphere. 
            </p>
            <div class="rating">
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star" text-warning></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                
                <h6 class = "m-0 ms-2">siddhesh</h6>
            </div>
            <p>
            My stay at the Celestial Palace was nothing short of perfect. The peaceful ambiance of the hotel provided a much-needed escape from the hustle and bustle of everyday life!
            </p>
            <div class="rating">
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
                <i class="bi bi-star-fill" text-warning></i>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Reach us -->

<?php
  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
?>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe']?>"  loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="Tel: <?php echo $contact_r ['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r ['pn1']?>
        </a>
        <br>
        <?php
        if($contact_r['pn2']!=''){
          echo<<<data
          <a href="Tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +$contact_r[pn2] 
          </a>
          data;
        }
        ?>
        
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <?php
        if($contact_r['tw']!=''){
          echo<<<data
          <a href="$contact_r[tw]" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>
              <br>
          data;
        }
        ?>
        
        <a href="<?php echo$contact_r['fb'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
            <i class="bi bi-facebook"></i> Facebook
          </span>
        </a>
        <br>
        <a href="<?php echo$contact_r['insta'] ?>" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2"> 
            <i class="bi bi-instagram"></i> Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });

</script>
</body>
</html>
