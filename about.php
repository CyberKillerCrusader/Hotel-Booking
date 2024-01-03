<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial Palace - ABOUT</title>
    <?php require ('inc/links.php');?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/room.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        .roombox{
            background-color: #d1d7ff;
            padding: 10px;
        }
    </style>

</head>
<body id="wallpaper">
<?php require('inc/header.php');?>
<style>
    .box{
        border-top-color: var(--teal) !important;
    }
</style>    
<style>
    .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.02);
        transition: all 0.3s ;
    }
</style>
    <div class = "my-5 px-4">
        <h2 class = "fw-bold h-font text-center">About us</h2>
        <div class  = "h-line bg-dark"></div>
        <p class = "text-center mt-3">"At Celestial Palace, we are dedicated to providing an unparalleled experience of luxury, comfort, and warm hospitality. With a commitment to excellence and a passion for creating unforgettable memories, we invite you to discover the essence of indulgence and relaxation at our exquisite destination."</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class = "mb-3">Celestial Palace</h3>
                <p>Welcome to Celestial Palace, where every moment is designed to transport you to a world of celestial luxury and unparalleled comfort. Discover a place where the stars align to create an extraordinary stay, weaving together impeccable service, celestial-inspired design, and heavenly amenities that elevate your experience to new heights.</p>
            </div>
            <div class = "col-lg-5 col-md-5 mb-4 order-lg-2 odrer-md-2 order-1">
                <img src = "image/hotel1.jpg" class = "w-100">
            </div>
       
        </div>
    </div>


    <h3 class = "my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
     <swiper-container style = "width:400px; left:435px;"class="mySwiper d-flex justify-content-center" pagination="true" pagination-dynamic-bullets="true">
        <?php 
            $about_r=selectAll('staff');
            while($row = mysqli_fetch_assoc($about_r)){
                echo<<<data
                    <swiper-slide class = "d-flex justify-content-center bg-white  overflow-hidden text-center rounded ">
                        <div class='roombox text-center'>
                            <div class='text-center no-boder'>
                                <i class='fa fa-users fa-5x'></i>
                                <h3>$row[name]</h3>
                                <div class='mb-1'>$row[work]</div>
                            </div>
                        </div>
                    </swiper-slide>
                data;
            }
        ?>

  </swiper-container>

    </div>
<?php require('inc/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</body>
</html>
