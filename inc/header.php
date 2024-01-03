<?php
require('admin/inc/db_config.php');

?>

<?php
$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
?>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">Celestial Palace</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About Us</a>
        </li>

      </ul>

      <?php
      // echo "Hello<br>";
      // $link = "logout.php";
      // $css = " z-index: 5000; right:10px; top:20px;";
      // $classname = "btn btn-danger";
      session_start();
      if (isset($_SESSION['Login']) && $_SESSION['Login'] == true) {
        $linka = "logout.php";
        $css = " z-index: 5000; right:10px; top:20px;";
        $classname = "btn btn-danger";
        echo "<a href=\"$linka\"> <button class=\"$classname\" style=\"$css\">Logout</button></a>";
      }
      else{
        $stylea = "margin-left:20px; margin-right:20px; background-color:green";
        $type = "button";
        $classa = "btn btn-secondary";
        $linkb = "logoutb.php";
        $linka = "logout.php";
        $linkc = "logoutc.php";
        echo "
                <a href=\"$linkc\"><button type=\"$type\" style = \"$stylea\" class=\"$classa\">Login</button></a>
                <a href=\"$linkb\"><button type=\"$type\" style = \"$stylea\" class=\"$classa\">Register</button></a>
              ";
      }
      ?>
      

    </div>
</nav>