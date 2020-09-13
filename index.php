<?php
$insert = false;
if(isset($_POST['email'])){
     $server = "localhost";
    $username = "id14339352_root";
    $password = "o[+Gc1M+5%e|n-}f";
    $dbname ="id14339352_formdb";

    $con = mysqli_connect($server, $username, $password,$dbname);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $email = $_POST['email'];
    $sql = "  INSERT INTO `id14339352_formdb`.`formdb` (`email`, `dt`) VALUES ('$email', CURRENT_TIMESTAMP);";
    // echo $sql;
     // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Position Alert</title>

    <style media="screen">
      #bg1{
        background-image: url('/assets/images/hero.png');
        background-repeat: no-repeat;
        height: 720px;
        width: 100%;
        background-size: cover;
      }
    </style>
  </head>
<body>
  <section>
    <div id="bg1">
      <div class="container pt-3 pb-3">
        <nav class="navbar navbar-expand-lg navbar-light">
          <img width="150px" height="24px" src="./assets/images/Group 11.png">
          </nav>
          <div class="container">
            <div class="row">
              <div data-aos="fade-up" data-aos-duration="2000"
               class="col-md-8 justify-content-center " style="padding-top:40px;">
                <p class="intro-title" style="font-family: 'Montserrat', sans-serif; font-style: normal;
                font-weight: 600; font-size:36px; color:#ffffff;"><strong>
                Your Phone Can Now Notify and Tell You Exactly Where It Is</strong></p>
                <p class="intro-subtitle" style="font-family: 'Montserrat';
                font-style: normal;
                font-weight: 500; 
                font-size:18px; 
                color:#ffffff;"> Searching for your smartphone at home or office can be such a hectic task. PA enables your phone to tell you its exact position.
                  <div  class="avail">
                    <h5 class="intro-dist" style="font-family: 'Roboto'; font-style: normal;
                    font-weight: normal; font-size: 26px; color: #ffffff;">Available For: <img src="./assets/images/Vector.png" alt=""> <img src="./assets/images/ion_logo-apple.png" alt=""> </h5> 
                  </div>
                  <div class="inputs">
                    <h5 style= "font-family: Montserrat;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 18px; color: white; ">Get notified when we lunch</h5>
                    <form action="index.php" method="POST">
                      <input type="email" name="email" placeholder="Input Email" class="inp" required>
                      <button class="submitbtn">Notify me</button>
            </form>
            <?php
          if($insert == true){
            echo "<p class='submitMsg' style = 'color: #ffffff;'>Your submission has been recorded.</p>";
          }
        ?>
                  </div>
              </div>
            </div>
          </div>
          </div>
    </div>
  </section>
  <section id="features" class="container-fluid" style="background-color: #ffffff;">
    <div class="container py-5">
      <div class="section-head text-center mb-5 wow animate__animated animate__fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
        <h2>Main Features</h2>
      </div>
      <div class="row">
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="2000" class="col-md text-center">
          <img src="./assets/images/Rectangle1.png" alt="icon">
          <h5>Access with voice commands within 10m radius</h5>
        </div>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="2000" class="col-md text-center">
          <img src="./assets/images/Rectangle2.png" alt="icon">
          <h5>Compatible with android and IOS</h5>
        </div>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="2000" class="col-md text-center">
          <img src="./assets/images/Rectangle3.png" alt="icon">
          <h5>24/7 days support</h5>
          
        </div>
      </div>
    </div>
  </section>
  
  <section id="show" class="my-5">
    <div id="to" class="container pt-7 mx-3 row d-flex align-items-center mx-auto">
      <div class="wrapper col-md-6 order-md-2" data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine"
      >
        <div class="mx-auto d-flex justify-content-end"><a href="/assets/images/iPhone 11 Pro Max - 3d.png" data-toggle="lightbox"> <img src="./assets/images/iPhone_X.png" class="ml-3 img-fluid icon" width="100%" height="100%" alt="App Prototype"></a>
        </div>
      </div>
      <div data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="case col-md-5 order-md-1">
        <h5><span style="color:  #000000;">Customize what to say</span></h5>
        <p>Change the input phrase and say anything you want.</p>
      </div> 
    </div>
  </section>

  <section id="show" class="my-4">
    <div class="container pt-7 mx-3 row d-flex align-items-center mx-auto">
      <div data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="wrapper col-md-6 ">
        <div class="mx-auto"><a href="/assets/images/iPhone 11 Pro Max - 4g.png" data-toggle="lightbox"> <img src="./assets/images/iPhone_X (1).png" class="ml-3 img-fluid icon" width="60%" alt="App Prototype"></a>
        </div>
      </div>
      <div data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="case col-md-5">
        <h5><span style="color:  #000000;">And How The App Responds</span></h5>
        <p>Customize how your phone sounds when it responds. Even change what your phone says back!</p>
      </div>
    </div>
  </section>
  <section id="show" class="my-5">
    <div id="to" class="container pt-7 mx-3 row d-flex align-items-center mx-auto">
      <div data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="wrapper col-md-6 order-md-2 ">
        <div class="mx-auto d-flex justify-content-end"><a href="/assets/images/iPhone 11 Pro Max - 13.png" data-toggle="lightbox"> <img src="./assets/images/iPhone_X (2).png" class="ml-3 img-fluid icon" width="100%" height="100%" alt="App Prototype"></a>
        </div>
      </div>
      <div data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="case col-md-5 order-md-1 ">
        <h5><span style="color:  #000000;">Push Notifications</span></h5>
        <p>Notifications light up your screen  making it easy to find your phone in the dark.</p>
       
      </div> 
    </div>
  </section>

  <section id="show" class="my-4">
    <div class="container pt-7 mx-3 row d-flex align-items-center mx-auto">
      <div data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="wrapper col-md-6 ">
        <div class="mx-auto"><a href="/assets/images/iPhone 11 Pro Max - 13.png" data-toggle="lightbox"> <img src="./assets/images/iPhone_X (2).png" class="ml-3 img-fluid icon" width="60%" alt="App Prototype"></a>
        </div>
      </div>
      <div data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="case col-md-5 ">
        <h5><span style="color:  #000000;">Works in Sleep and Silent Mode</span></h5>
        <p>Put your phone to sleep or on mute. Still works! Position Alert overrides silent and muted stateto respond to your query</p>
      </div>
    </div>
  </section>
  <section id="show" class="my-5">
    <div id="to" class="container pt-7 mx-3 row d-flex align-items-center mx-auto">
      <div data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="wrapper col-md-6 order-md-2">
        <div class="mx-auto d-flex justify-content-end"><a href="/assets/images/iPhone 11 Pro Max - 4g.png" data-toggle="lightbox"> <img src="./assets/images/iPhone_X (1).png" class="ml-3 img-fluid icon" width="100%" height="100%" alt="App Prototype"></a>
        </div>
      </div>
      <div data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine" class="case col-md-5 order-md-1 " style="visibility: visible;">
        <h5><span style="color:  #000000;">Volume Boost</span></h5>
        <p> Volume boost maximizes your phones volume level, even if you left it low</p>
      </div> 
    </div>
  </section>
  <section id="stepss" class="container-fluid" style="background-color: #2B5E48;">
    <div class="container py-5">
      <div data-aos="fade-down" data-aos-duration="3000" class="section-head text-center mb-5 " data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible;">
        <h2 style="color: #ffffff; margin-bottom: 30px;">3 simple steps to use Position Alert</h2>
        
      </div>
      <div class="row wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible;">
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="3000" class="col-md text-center">
          <img src="./assets/images/Group 2.png" alt="icon">
          <h4>Sign Up Free</h3>
          <p> sign up for a free PA account. All you need is an existing email ID </p>
        </div>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="3000" class="col-md text-center">
          <img src="./assets/images/Group 5.png" alt="icon">
          <h4>Install Position Alert</h3>
          <p>Does the target device run on Android or IOS? Choose the target platform and follow the installation prompts. The setup takes only a handful of minutes</p>
        </div>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="3000" class="col-md text-center">
          <img src="./assets/images/Group 4.png" alt="icon">
          <h4>Begin</h3>
          <p>After position alert is up and running, log in to the position notifier control panel on your device.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="getaccess">
    <div class="container py-5">
      <div class="row col-md-12">
        <div data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500" class="col-md-4 get">
          <h5>Get Notified When we launch</h5>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 get">
            <div data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500" class="inputs1">
            <form action="index.php" method="POST">
              <input type="email" name="email" placeholder="Input Email" class="buton1" required>
              <button class="buton2">Notify me</button> </form>
			  </form>
			  <?php
				if($insert == true){
					echo "<p class='submitMsg' style = 'color: #000000;'>Your submission has been recorded.</p>";
				}
			?>
            </div>
            </div>
            </div>
    </div>
  </section>
  <footer>
    <div class="footer-section" id="footer" style=" background-color: #2B5E48;padding-bottom: 20px;">
        <div class="text-white container-fluid padding">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h3 class="h5 font-weight-normal mt-5">All rights reserved.</h3>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="image-group">
                      <h3 class="h5 font-weight-normal mt-5"> Follow Us on: &nbsp;<img src="./assets/images/tw.png"> <img src="./assets/images/Vector (1).png" alt=""> <img src="./assets/images/Vector (2).png" alt=""></h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</footer>
    <script src="./assets/js/jquery/jquery.slim.min.js"></script>
		<script src="./assets/js/popper/popper.min.js" ></script>
    <script src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/js/mdb/mdb.min.js"></script>
    <script src="./assets/js/index.js" charset="utf-8"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

  </body>

</html>