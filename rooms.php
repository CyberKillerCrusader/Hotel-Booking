<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <!-- <title>Hotel blue bird</title> -->
  <!-- boot -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- fontowesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="./css/roombook.css">
  <style>
    #guestdetailpanel {
      display: none;
    }

    #guestdetailpanel .middle {
      height: 450px;
    }
    .asm{
      margin: 1.5rem;
      border: 1px solid red;
      border-radius: 0.5rem;
      height: 2rem;
      width: 450px;
    }
    .sam{
      margin: 1.5rem;
      border: 1px solid red;
      border-radius: 0.5rem;
      height: 2rem;
      width: 450px;
    }
    .checkavail{
      text-align: center;
      justify-content: center;
      padding-bottom: 4rem;
    }
  </style>
</head>

<body style="background-color:  rgb(207, 223,223);">
  <?php require('inc/header.php'); ?>

  <!-- bookbox -->
  <div id="guestdetailpanel">
    <form action="" method="POST" class="guestdetailpanelform">
      <div class="head">
        <h3>RESERVATION</h3>
        <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
      </div>
      <div class="middle">
        <div class="guestinfo">
          <!-- <h4>Guest information</h4>
          <input type="text" name="Name" placeholder="Enter Full name">
          <input type="email" name="Email" placeholder="Enter Email">




          <input type="text" name="Phone" placeholder="Enter Phoneno"> -->
        </div>

        <div class="line"></div>

        <div class="reservationinfo">
          <h4>Reservation information</h4>
          <select name="RoomType" class="selectinput">
            <option value selected>Type Of Room</option>
            <option value="Superior Room">SUPERIOR ROOM</option>
            <option value="Deluxe Room">DELUXE ROOM</option>
            <option value="Guest House">GUEST HOUSE</option>
            <option value="Single Room">SINGLE ROOM</option>
          </select>
          <select name="Bed" class="selectinput">
            <option value selected>Bedding Type</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
            <option value="None">None</option>
          </select>
          <select name="NoofRoom" class="selectinput">
            <option value selected>No of Room</option>
            <option value="1">1</option>
            <!-- <option value="1">2</option>
                        <option value="1">3</option> -->
          </select>
          <select name="Meal" class="selectinput">
            <option value selected>Meal</option>
            <option value="Room only">Room only</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
          </select>
          <div class="datesection">
            <span>
              <label for="cin"> Check-In</label>
              <input name="cin" type="date">
            </span>
            <span>
              <label for="cin"> Check-Out</label>
              <input name="cout" type="date">
            </span>
          </div>
        </div>

      </div>
      <div class="footer">
        <button class="btn btn-success" name="guestdetailsubmit">Proceed to Payment</button>
        <script>
          if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
          }
        </script>
      </div>
    </form>

    <!-- ==== room book php ====-->
    <?php
    //REFERRENCING THE UserID column from signup to roombook column
    // $UserID = $_POST['UserID'];
    // $sqld = "INSERT INTO roombook(UserID) VALUES ('$UserID')";
    // $result = mysqli_query($conn, $sqld);

    if (isset($_POST['guestdetailsubmit'])) {
      if (isset($_SESSION['Login']) && $_SESSION['Login'] == true) {
        // $Name = $_POST['Name'];
        // $Email = $_POST['Email'];
        // $Phone = $_POST['Phone'];
        $RoomType = $_POST['RoomType'];
        $Bed = $_POST['Bed'];
        $NoofRoom = $_POST['NoofRoom'];
        $Meal = $_POST['Meal'];
        $cin = $_POST['cin'];
        $cout = $_POST['cout'];
        $ID = $_SESSION['id'];

        //ALTERNATE METHOD : NO. OF DAYS
        $startDateString = $cin;
        $endDateString = $cout;
        $startDate = new DateTime($startDateString);
        $endDate = new DateTime($endDateString);
        $interval = $startDate->diff($endDate);
        $noofday = $interval->days;
        $type_of_room = 0;
        $type_of_bed = 0;
        $type_of_meal = 0;


        if ($RoomType == "Superior Room") {
          $type_of_room = 3000;
        } else if ($RoomType == "Deluxe Room") {
          $type_of_room = 2000;
        } else if ($RoomType == "Guest House") {
          $type_of_room = 1500;
        } else if ($RoomType == "Single Room") {
          $type_of_room = 1000;
        }


        if ($Bed == "Single") {
          $type_of_bed = $type_of_room * 1 / 100;
        } else if ($Bed == "Double") {
          $type_of_bed = $type_of_room * 2 / 100;
        } else if ($Bed == "Triple") {
          $type_of_bed = $type_of_room * 3 / 100;
        } else if ($Bed == "Quad") {
          $type_of_bed = $type_of_room * 4 / 100;
        } else if ($Bed == "None") {
          $type_of_bed = $type_of_room * 0 / 100;
        }

        if ($Meal == "Room only") {
          $type_of_meal = $type_of_bed * 0;
        } else if ($Meal == "Breakfast") {
          $type_of_meal = $type_of_bed * 2;
        } else if ($Meal == "Half Board") {
          $type_of_meal = $type_of_bed * 3;
        } else if ($Meal == "Full Board") {
          $type_of_meal = $type_of_bed * 4;
        }
        $ttot = $type_of_room *  $noofday * $NoofRoom;
        $mepr = $type_of_meal *  $noofday;
        $btot = $type_of_bed * $noofday;
        $fintot = $ttot + $mepr + $btot;
        $_SESSION['Razorpay'] = $fintot;
        $_SESSION['roomtypee'] = $RoomType;
        $sql = "SELECT * FROM room WHERE type = '$RoomType' AND bedding = '$Bed'";
        $result = mysqli_query($conn, $sql);
        if ($cin > $cout) {
          echo "<script>swal({
                        title: 'Fill the proper check-in and check-out dates!',
                        icon: 'error',
                    });
                    </script>";
        } else if ($result->num_rows == 0) {
          echo "<script>swal({
            title: 'Something went wrong',
            text: 'Room not available',
            icon: 'error',
          });
          </script>";
        } else {
          echo "<script>window.location.href = '/razorpay.php';</script>";
          $sql = "INSERT INTO roombook(RoomType,Bed,NoofRoom,Meal,cin,cout,nodays, UserID, roomtotal, mealtotal, bedtotal, finaltotal) VALUES ('$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$noofday', '$ID', '$ttot', '$mepr', '$btot', '$fintot')";
          $result = mysqli_query($conn, $sql);
          $deleteSql = "DELETE FROM room WHERE type = '$RoomType' AND bedding = '$Bed' LIMIT 1";
        }
      } else {
        echo "<script>swal({
                  title: 'Something went wrong',
                  text: 'Please log in!',
                  icon: 'error',
                });
                </script>";
      }
    }
    ?>
  </div>

  </div>
  </section>

  <section id="secondsection">
    <!-- <img src="./image/homeanimatebg.svg"> -->
    <div class="ourroom">
      <div class="checkavail">
        <h3>check room availability</h3>
        <select name="RoomType" class="asm">
            <option value selected>Type Of Room</option>
            <option value="Superior Room">SUPERIOR ROOM</option>
            <option value="Deluxe Room">DELUXE ROOM</option>
            <option value="Guest House">GUEST HOUSE</option>
            <option value="Single Room">SINGLE ROOM</option>
          </select>
          <select name="Bed" class="sam">
            <option value selected>Bedding Type</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
            <option value="None">None</option>
          </select>
        <button class="btn btn-primary bookbtn">check </button>
      </div>

      <h1 class="head">≼ Our room ≽</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Delux Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Guest Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require 'inc/footer.php' ?>
</body>

<script>
  var bookbox = document.getElementById("guestdetailpanel");

  function openbookbox() {
    bookbox.style.display = "flex";
  }
  closebox = () => {
    bookbox.style.display = "none";
  }
</script>

</html>