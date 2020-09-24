<!DOCTYPE html>
<html>
    
<title>Agro CheckMake</title>
<link rel=“icon” href=“img/icon.jpg” type="image/jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: grey;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;

}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/bg.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img style="margin-top:-7px;" src="img/nav-logo.png"> Agro CheckMake</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <!-- <a href="#start" class="w3-bar-item w3-button"><i class="fa fa-leaf"></i> START</a> -->
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-book"></i> ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
       <!--<a href="php/login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> LOGIN</a>-->
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <!--<a href="#start" onclick="w3_close()" class="w3-bar-item w3-button">START</a>-->
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <!--<a href="php/login.php" onclick="w3_close()" class="w3-bar-item w3-button"> LOGIN</a>-->
</nav>

<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Integrating Engineering and Agricultural</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Integrating Engineering and Agricultural</span><br>
    <span class="w3-large">In every farm, for every buyer</span>
    <p><a href="Agro CheckMake.apk" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"><i class="fa fa-android w3-xlarge w3-text-green" aria-hidden="true"></i> <b>Download App</b></a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-white w3-xxlarge" style="padding:24px 48px">
    <a href="https://www.instagram.com/agrocheckmake?r=nametag"><i class="fa fa-instagram w3-hover-opacity" style="padding-right:12px"></i></a>
    <a href="https://www.facebook.com/Agro-Chechmake-100551861527187/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  </div>
</header>

<!-- Start Section -->
<!-- <div class="w3-row-padding" style="margin-top:64px">
<div class="w3-container w3-center w3-dark-grey" style="padding:75px 16px" id="start">
  <h3>Agro CheckMake</h3>
  <p class="w3-large">Who are You?</p>
  <div class="w3-row-padding" style="margin-top:30px">
    <div class="w3-third w3-half w3-section">
      <a href="#start" style="text-decoration: none;">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-green w3-xlarge w3-padding-32">Farmer</li>
          <li class="w3-padding-16"><img src="img/farmer.png"></li>
        </ul>
      </a>
    </div>
    <div class="w3-third w3-half w3-section">
      <a href="#start" style="text-decoration: none;">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-green w3-xlarge w3-padding-32">Buyer</li>
          <li class="w3-padding-16"><img src="img/buyer.png"></li>
        </ul>
      </a>
    </div>
  </div>
</div> -->

<!-- About Section -->
<div class="w3-container" style="padding:75px 16px" id="about">
  <h3 class="w3-center">ABOUT Agro CheckMake</h3>
  <p class="w3-center w3-large">Key features of our Project</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-lightbulb-o w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Motto</p>
      <p>In every farm, for every buyer</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-rocket w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Vision</p>
      <p>We are widening the communication streams for farmers and buyers, which will help making agricultural market stable.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-mobile w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Android Application</p>
      <p>We are developing an Android application to connect farmers with buyers and to guide farmers for effective farming.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Our project is backed by Enlectic Research Centre. Supported by respected faculty and Principal.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Integrating Engineering and Agricultural.</h3>
      <p>To elevate economical status of farmers and agricultural sector on<br/> a broader area, we are developing an Android Application.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="img/weknow.jpg" alt="Smart Agriculture" width="700" height="400">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this Project</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/rakesh.jpg" alt="Rakesh" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Rakesh More</h3>
          <p class="w3-opacity text">Mentor</p>
          <p class="text">Have experties in Sales and Marketing</p>
        </div>
      </div>
    </div>
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/abhishek.jpg" alt="abhishek" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Abhishek Wadmare</h3>
          <p class="text">TE Computer Engineer</p>
          <p class="w3-opacity text">Web Developer</p>
        </div>
      </div>
    </div>
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/gautam.jpg" alt="Gautam" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Gautam Helange</h3>            
          <p class="text">TE Computer Engineer</p>
          <p class="w3-opacity text">Android Developer</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/kaunain.jpg" alt="Kaunain" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Syed Kaunain</h3>
          <p class="text">TE Civil Engineer</p>
          <p class="w3-opacity text">Resource Manager</p>
        </div>
      </div>
    </div>
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/rohini.jpg" alt="rohini" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Rohini Kulkarni</h3>
          <p class="text">TE Mechanical Engineer</p>
          <p class="w3-opacity text">Public Relations</p>
        </div>
      </div>
    </div>
    <div class="w3-col container l4 m4 s12 w3-margin-bottom">          
      <div class="w3-card">
        <img src="img/khemraj.jpg" alt="Khemraj" style="width:100%">
        <div class="w3-container overlay">
          <h3 class="text">Khemraj Bagal</h3>
          <p class="text">TE Instrumentation And Control Engineer</p>
          <p class="w3-opacity text">IOT Expert</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Meetings with Farmers and Buyers
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">230+</span>
    <br>Instagram Followers
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">24+</span>
    <br>Facebook Followers
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">6+</span>
    <br>Villages 
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="img/1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Talk with nearby Farmers">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Nutrient analysis of soil. Preperation of soil testing kit">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Collecting reviews of the Farmers on our project">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Taking reviews of local retailers in the vegitable market">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="img/5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Understanding the Traders point of view">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Talk with young Farmers">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Connecting with local Farmers">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Understanding the environmental problems faced by local Farmers">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Experties of Web and Android Application Development.<br/>Experienced multi-lingual Public Speaker.<br/>Communication Skills with qualities of getting interacted<br/> with anyone within shortest time.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-gears w3-margin-right"></i>Problem solving &amp; Technology</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-handshake-o w3-margin-right"></i>Marketing &amp; Branding</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-line-chart w3-margin-right"></i>Financial management</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Government College of Engineering And Research Avasari,  Pune.</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9067649737</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: abhishek.wadmare@gmail.com</p>
    <br>
    <form action="php/message.php" method="POST">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="img/clg.jpg" class="w3-image" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
  <a href="https://www.instagram.com/agrocheckmake?r=nametag"><i class="fa fa-instagram w3-hover-opacity"></a></i>
  <a href="https://www.facebook.com/Agro-Chechmake-100551861527187/"><i class="fa fa-facebook-official w3-hover-opacity"></a></i>
 
  </div>
  <p>Powered by Enlectic Research Centre @ <a href="https://www.gcoeara.ac.in" title="W3.CSS" target="_blank" class="w3-hover-text-green">GCOEARA</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
