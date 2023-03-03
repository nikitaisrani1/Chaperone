 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
  <include("s1_li.php")>
   <meta charset="utf-8">
   <meta name="viewport" content="with=device-width, initial-scale=1.0" />
   <title>Chaperone</title>
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

 <body>
  <?php
  session_start();
  $Name=$_SESSION["Name"];
  $Age=$_SESSION["Age"];
  $Gender=$_SESSION["Gender"];
  $Experience=$_SESSION["Experience"];
  ?>
  <section class="header-signup">
    <!-- navigation -->
    <nav>
<a href="home_li.html"> <img src="logo.png" /></a>
  <div class="nav-links" id="navlinks">
    <i class="fa fa-window-close" onclick="hidemenu()"></i>
    <ul>
      <li><a href="home_li.html">HOME</a></li>
      <li><a href="about_li.html">ABOUT US</a></li>
      <li><a href="history_li.html">BOOKED SERVICES</a></li>
      <li><a href="yourprofile_li.php">YOUR PROFILE</a></li>
    </ul>
  </div>
  <i class="fa fa-bars" onclick="showmenu()"></i>

    </nav>
    <!-- background main -->
<div class="signup-page"> <br><br><br><br><br><br><br>
  <h1>BOOK NOW</h1><br>
  <div class="reviews-col">
    <img src="profile1.jpeg" />
    <div>
    <p>
      Name: <span  id="namect"><?php echo $Name?></span><br>
      Age: <span id="agect"><?php echo $Age?></span><br>
      Gender: <span id="genderct"><?php echo $Gender?></span><br>
      Experience: <span id="expct"><?php echo $Experience?></span><br>
      Rating: <span id="ratingct">234 ratings</span><br>
    </p>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
  </div>
  <p style="display:inline;"">Sub Total:</p>
  <p id="subtotal" style="display:inline;">₹2000
  </p><br /><br />
  <a href="bill_li.html" class="hero-btn">BOOK NOW</a></a>
  </p>


</div>
  </section>
  <!-- next sections of services*/ -->




  <!-- footer -->
  <section class="footer">
    <h4> About Us</h4>
    <p>
      The most trusted caretaking service in India for over a decade.<br /><br />
    </p>
  <div class="icons">

  <i class="fa fa-facebook-square" aria-hidden="true"></i>
  <i class="fa fa-instagram" aria-hidden="true"> </i>
  <i class="fa fa-twitter" aria-hidden="true"></i>


  </div>
  </section>
  <script>
    var navLinks=document.getElementById("navlinks");
    function showMenu()
    {
      navLinks.style.right="0";
    }
    function hideMenu()
    {
      navLinks.style.right="-200px";
    }
  </script>
 </body>

 </html>
