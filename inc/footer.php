<div class="container-fluid mt-5" style = "background-color: rgb(167, 201, 201)">
  <div class="row">
    <div class="col-lg-4">
      <h class="h-font fw-bold fs-3 mb-2">Celestial Palace</h3>
        <p>
          <small style="font-size: 15px;">
        Escape to a world of tranquility and luxury at Celestial Palace, where every moment is designed to be an unforgettable experience. Nestled amidst breathtaking natural beauty, our resort offers a sanctuary of peace and rejuvenation.
          </small>
        </p>
    </div>
    <div class="col-lg-4">
      <h4 class="mb-2">Links</h4>
      <a href="home.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a>
      <br><a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a>
      <br><a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilites</a>
      <br><a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a>
      <br><a href="about.php" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4">
      <h4 class="mb-2">Follow us</h4>
      <?php
        if($contact_r['tw']!=' '){
          echo<<<data
          <a href="<?php echo $contact_r[tw]?>" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-twitter"></i> Twitter 
          </a>
          <br>
          data;
        }
      ?>
     
      <a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook"></i> Facebook 
      </a>
      <br>
      <a href="<?php echo $contact_r['insta']?>" class="d-inline-block text-dark text-decoration-none mb">
        <i class="bi bi-instagram"></i> Instagram 
      </a>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by TEAM-5</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function setActive(){
      let navbar = document.getElementById('nav-bar');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++){
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];
        if(document.location.href.indexOf(file_name)>=0){
          a_tags[i].classList.add('active');
        }
      }
    }
    setActive();
</script>