<?php 
    $result = "";
    define('SITE_KEY', '6LfQ4JQUAAAAAAtfE2Vne8s5R6UWbwo2iDqR94FC');
    define('SECRET_KEY', '6LfQ4JQUAAAAAIZC65cMnbTsnJ5CV7WWGHlv--mT');

    if(isset($_POST['submit'])) {

      function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);

      if($Return->success == true && $Return->score > 0.5) {

        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "hollyjrobertson@hollyjrobertson.com";
        $headers = "From:".$mailFrom;
        $subject = "Holly, You have mail from ".$name;
        $txt = "You have received an e-mail from ".$name.":\r\n"."\r\n".$message;

        if (mail($mailTo, $subject, $txt, $headers)){
            $result = "Thank you ".$name." for your message. <br>I will get back with you ASAP!";
        }
        else {
            $result = "Your message did not send. <br>I am working on this right now.";
        }
      }
      else {
        $result = "Google thinks you're a robot. <br>If you're not, please email me at hollyjrobertson@hollyjrobertson.com.";
      }
}

 ?>
<!DOCTYPE html>
<html>
<title>Holly Robertson</title>
<script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Holly <span class="w3-hide-small">Robertson</span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love developing websites</em></p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="assets/images/me.png" class="w3-round w3-image" alt="Photo of Me" width="450%" height="400%">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>My name is Holly Robertson and I'm an aspiring Full Stack Web Developer in Austin, Tx. <br><br>

        I'm currently a student at Franklin University, in pursuit of a Bachelor's Degree in Computer Science with a minor in Web Development. My expected graduation is in Fall 2019.<br><br>

        After working nine years in the financial industry as a District Manager, I decided to change careers and deep dive into Web Development. <br><br>

        I am also in the process of receiving multiple certifications in AWS (Amazon Web Services). Currently, I hold the AWS Certified Cloud Practitioner as of January 2019 and will be taking the AWS Certified Solutions Architect - Associate exam in March and the Certified Developer - Associate exam in June.<br><br>

        When I need to relax, I spend time with my Pug, Gizmo, and Hockey - Go Stars! </p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">My areas of focus:</p>
  <p class="w3-wide"><i class="fa fa-terminal"></i>Java</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-free-code-camp"></i>Python</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:65%">65%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-html5"></i>HTML5</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:95%">95%</div>
  </div>
   <p class="w3-wide"><i class="fa  fa-css3"></i>CSS3</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:85%">85%</div>
  </div>
   <p class="w3-wide"><i class="fa fa-code"></i>JavaScript</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:75%">75%</div>
  </div>
  <p class="w3-wide"><i class="fa  fa-usd"></i>PHP</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:85%">75%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-diamond"></i>Ruby on Rails</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-teal w3-center" style="width:75%">70%</div>
  </div>
</div>

<!-- <div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section"> -->
<!--     <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings -->
  <<!-- /div> 
</div> -->

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here is the project I'm currently working on:</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="assets/images/banner.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Home Page">
    </div>
    <div class="w3-col m3">
      <img src="assets/images/banner1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="About Section">
    </div>
    <div class="w3-col m3">
      <img src="assets/images/banner2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Menu Section">
    </div>
    <div class="w3-col m3">
      <img src="assets/images/banner3.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Services Section">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <a href="http://www.papajoeshometownbbq.com" target="_blank"><button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">Go see Papa Joe</a></button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

 <!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div> 

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">SAY HELLO</h3>
  <p class="w3-center"><em>I'd love your feedback!</em><?php echo "<br>".$result; ?></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="assets/images/austin.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Austin, TX, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: <a href="tel:737-210-1465">737.210.1465</a><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: hollyjrobertson@hollyjrobertson.com<br>
      </div>
      <p>Feel free to call or leave me a note:</p>
      <form action="index.php#contact" method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" id="name" type="text" placeholder="Name" name="name" required>
          </div>
           <div class="w3-half">
            <input class="w3-input w3-border" id="email" type="text" placeholder="Email" name="email" required>
          </div>
        </div>
        <input class="w3-input w3-border" id="message" type="text" placeholder="Message" name="message" required>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br>
        <input class="w3-button w3-black w3-right w3-section" type="submit" name="submit">
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://github.com/hollyjrobertson" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/holly-robertson/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <a href="https://www.facebook.com/hollyjrobertson" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/hollyjrobertson/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/add/hollyjorob87" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i>
    <a href="https://www.pinterest.com/hollyjrobertson/" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/HollyRo10307571" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  </div>
</footer>
  <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
    .then(function(token) {
        //console.log(token);
        document.getElementById('g-recaptcha-response').value=token;
    });
    });
    </script>
</body>
</html>
