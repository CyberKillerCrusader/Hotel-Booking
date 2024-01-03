<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php require ('inc/links.php');?>
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    .col-lg-6 {
        flex: 0 0 auto;
        width: 102%;
    }
</style>
<body id="wallpaper">
<?php require('inc/header.php');?>
<?php
  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
?>
    <div class = "my-5 px-4">
        <h2 class = "fw-bold h-font text-center">Contact Us</h2>
        <div class  = "h-line bg-dark"></div>
        <p class = "text-center mt-3">"We are here to assist you. Feel free to reach out to our dedicated team at our contact number: <?php echo $contact_r['pn1']?> or <?php echo $contact_r['email']?> for any inquiries, reservations, or special requests. Your comfort and satisfaction are our top priorities."</p>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class = "bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe']?>"  loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address']?>
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="Tel: <?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i><?php echo $contact_r['pn1']?>
                    </a>
                    <br>
                    <a href="Tel: <?php echo $contact_r['pn2']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i><?php echo $contact_r['pn2']?>
                    </a>
                    <br>                  
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>  <?php echo $contact_r['email']?>
                    </a>
                    <h5 class="mt-4">Follow us</h5>
                   <?php
                     if($contact_r['tw']!=''){
                        echo<<<data
                        <a href="$contact_r[tw]" class="d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-twitter"></i>
                        </a>
                        data;
                     }
                   ?>
                    <?php
                     if($contact_r['fb']!=''){
                        echo<<<data
                        <a href="$contact_r[fb]" class="d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        data;
                     }
                   ?>
                    <?php
                     if($contact_r['insta']!=''){
                        echo<<<data
                        <a href="$contact_r[insta]" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram"></i>
                        </a>
                
                        data;
                     }
                   ?>
                    
                   
                   
                </div>
            </div>
        </div>
    </div>


<?php require('inc/footer.php');?>


</body>
</html>
