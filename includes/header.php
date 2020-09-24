<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide" style="text-decoration:none;"><img style="margin-top:-7px;" src="../img/nav-logo.png"> Agro CheckMake</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <!-- <a href="#start" class="w3-bar-item w3-button"><i class="fa fa-leaf"></i> START</a> -->
<?php  
	if(!isset($_SESSION['email']))
	{
?>       
      <a href="../#about" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-book"></i> ABOUT</a>
      <a href="../#team" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> TEAM</a>
      <a href="../#work" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> WORK</a>
      <a href="../#contact" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="login.php" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-sign-in"></i> LOGIN</a>
<?php
	}
	else
	{
?>
	<a href="profile.php" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user-circle"></i> PROFILE</a>
	<a href="logout.php" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-sign-out"></i> LOGOUT</a>
<?php
	}
?>      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16" style="text-decoration:none;">Close ×</a>
  <!--<a href="#start" onclick="w3_close()" class="w3-bar-item w3-button">START</a>-->
<?php  
	if(!isset($_SESSION['email']))
	{
?>    
  <a href="../#about" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">ABOUT</a>
  <a href="../#team" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">TEAM</a>
  <a href="../#work" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">WORK</a>
  <a href="../#contact" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">CONTACT</a>
  <a href="login.php" onlclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">LOGIN</a>
<?php
	}
	else
	{
?>
  <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">PROFILE</a>
  <a href="logout.php" onlclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none;">LOGOUT</a>
<?php
	}
?>   
</nav>
<script>
// Modal Image Gallery



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
