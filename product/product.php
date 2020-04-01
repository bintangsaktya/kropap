<!DOCTYPE html>
<html>
<title>CropUP Marketplace</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="../homepage/homepage.php" class="w3-bar-item w3-button w3-teal"></i> < Back</a>
  
  
  
  
    <div class="w3-dropdown-hover w3-hide-small">
  
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Welcome</h2>
<p>What are you searching for?</p>

<div class="w3-row"><br>
<a href="serealia.php">
<div class="w3-quarter w3-container w3-round-xlarge">
  <img src="../images/padi01.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Padi dan Serealia </h6>
  
</div></a>

<a href="bawang.php">
 <div class="w3-quarter w3-container w3-round w3-shadow">
  <img src="../images/bawang1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Bawang</h6>
</div>
</a>

<a href="umbi.php">
<div class="w3-quarter w3-container w3-round">
  <img src="../images/umbi1.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Umbi-Umbian</h6>
  
</div>
</a>
<div class="w3-quarter w3-container w3-round">
  <a href="buah.php">
  <img src="../images/buah1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Buah-Buahan</h6>
  </a>
</div>

<div class="w3-quarter w3-container w3-round">
  <img src="../images/meat1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Daging(Coming soon)</h6>
  
</div>

<div class="w3-quarter w3-container w3-round">
  <img src="../images/cow1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h6>Hewan Ternak<br><i>(coming soon)</i></h6>
  
</div>

</div>
</div>



<!-- Image of location/map -->


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  
  
  
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  </a>
  <p>Powered by CropUP - UPProduction</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
