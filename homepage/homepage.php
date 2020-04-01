<!DOCTYPE html>
<html>
<title>CropUp | Welcome</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  
    <p class="w3-display-topright" style="padding-right: 20px"> <img src="../images/loca.png" width="40px"> Kedungkandang, East Java, Indonesia  | <i class="glyphicon glyphicon-asterisk"></i> 30°C</p>

  <marquee><h7><i> Check server status.</i></h7></marquee>
  <h4 class="w3-animate-bottom">Hello, what are you searching for?</h4>
    <div class="w3-padding-32">
<img src="../images/backtrace.png" class="w3-display-topleft w3-animate-opacity" width="1200px">
  <a href="../index.php">
      <button class="w3-btn w3-large w3-green w3-hover-light-grey w3-round-xxlarge" style="font-weight:100;">Back To Login Page?</button>
    </a>
    </div>
  </div>
</header>

<!-- perhatian gaess -->

<div class="w3-panel w3-blue">
  <h3>Perhatian!</h3>
  <p>Server sedang dalam peningkatan dalam 48 jam kedepan.</p>
  Proses Maintenance :
  <div class="w3-light-grey w3-round-xxlarge">

  <div class="w3-container w3-round-xxlarge w3-green" style="width:17%">17%</div>
<p></p>
<p></p>
</div>
</div> 



<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>


<a href="https://google.com"></a>
<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container w3-round-xlarge w3-animate-left w3-hover-light-grey" style="min-height:420px">
  <h3>Marketplace</h3><br>
  <img src="../images/marketicon.png" width="150px">
  <p>Anda dapat menjual dan membeli hasil panen secara online.</p>

  <a href="../product/product.php">
     <button class="w3-btn w3-light-green w3-hover-green w3-round-xxlarge w3-text-white" style="font-weight:100;">Cari Hasil Panen</button>
  </a>
  </div>
</div>

</a>


<div class="w3-third">
  <div class="w3-card w3-container w3-round-xlarge w3-animate-zoom w3-hover-light-grey" style="min-height:420px">
  <h3>CropUP Technology</h3><br>
  <img src="../images/techlogo.png" width="150px">
  <p>Anda dapat mencari dan membeli alat-alat bantu pertanian otomatis yang modern dan berbasis <i>Internet of Things.</i></p>
c
  <a href="https://google.com">
     <button class="w3-btn w3-light-green w3-hover-green w3-round-xxlarge w3-text-white" style="font-weight:100;">Cari Tools</button>
  </a>

  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container w3-animate-right w3-round-xlarge w3-hover-light-grey" style="min-height:420px">
  <h3>CropUP Educate</h3><br>
  <img src="../images/cropeducate.png" width="185px">
  <p>Bagi para pelajar dan petani pemula, anda dapat mendapat pendidikan mengenai pertanian, peternakan dan perkebunan disini. Setelah menyelesaikan semua modul anda akan mendapat sertifikat.</p>
<a href="../edukasi/cropedu.php">
     <button class="w3-btn w3-light-green w3-hover-green w3-round-xxlarge w3-text-white" style="font-weight:100;">Get Educated</button>
  </a>
  </div>
</div>
</div>


<hr class="w3-center">

<h2 class="w3-center">Slideshows</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-left" src="../images/petmod1.jpg" style="width:100%">
<div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
    Teknologi Pertanian
  </div>

<img class="mySlides w3-animate-left" src="../images/petmod2.jpg" style="width:100%">
<div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
    Bertani itu keren!
  </div>

<img class="mySlides w3-animate-left" src="../images/petmod3.jpg" style="width:100%">
<div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
    Dengan teknologi, pertanian tidak ketinggalan jaman lho
  </div>

<img class="mySlides w3-animate-left" src="../images/petmod4.jpg" style="width:100%">

<a class="w3-button w3-green" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-button w3-green" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>

<div id="Demo3" class="w3-hide w3-black">
  <div class="w3-container">
    <p>Accordion with Images:</p>
    <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
    <p>French Alps</p>
  </div>
</div>

<hr>
<h2 class="w3-center">CropUP Medicine Info</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">Ginseng</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Jahe</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Pakcoy</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>Khasiat Ginseng</h2>
  <p>www.hellosehat.com</p>
  <p>Nutrisi yang terdapat pada ginseng yaitu kalsium, serat, folat, zat besi, magnesium, mangan, fosfor, potasium, silikon, zinc, vitamin Bi, B2, B3, B5, dan C. <br>1. Efek antiperadangan<br>
2. Mengurangi stres<br>
3. Membantu mengontrol diabetes<br>
4. Mencegah kanker<br>
5. Mencegah penuaan dini</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Jahe</h2>
  <p> USDA (United States Department of Agriculture)</p> 
  <p>
Kalori  80kcal  <br>
Karbohidrat 17,77g  <br>
Air 78,89g  <br>
Protein 1,82g <br>
Gula  1,7g  <br>
Serat 1,7g  <br>
Lemak 0,75g <br>
Vitamin A 0µg <br>
Vitamin C 5mg 6%<br>
Vitamin D 0µg <br>
Vitamin E 0mg <br>
Vitamin B1 (Thiamine) 0,025mg 2%<br>
Vitamin B2 (Riboflavin) 0,034mg 3%<br>
Vitamin B3 (Niacin) 0,75mg  5%<br>
Vitamin B5 (Panthothenic acid)  0,203mg 4%<br>
Vitamin B9 (Folat)  11µg  3%<br>
Kalsium 16mg  2%<br>
Zat Besi  0,6mg 5%<br>
Magnesium 43mg  12%<br>
Fosfor  34mg  5%<br>
Potassium (Kalium)  415mg 9%<br>
Sodium  13mg  1%<br>
Seng (Zinc) 0,34mg  4%<br><br>
    1. Membantu mencegah Penyakit Kanker
Beberapa penelitian menunjukan bahwa Jahe memiliki senyawa yang dapat menghambat pertumbuhan dan pengembangbiakan sel kanker pada usus besar dan sel-sel kanker pada lambung, pankreas dan kanker hati.<br><br>

3. Meredakan Rasa Mual
Penelitan menunjukan bahwa beberapa Kandungan yang terdapat didalam Jahe dapat secara efektif meredakan rasa mual seperti morning sickness, mabuk perjalanan dan mual pasca operasi.
<br><br>
4. Mengendalikan Tekanan Darah dan Kadar Kolesterol
Senyawa tumbuhan tertentu yang terkandung di dalam Jahe dapat membantu mengurangi hipertensi atau tekanan darah tinggi dengan cara mencegah gumpalan darah terbentuk di arteri dan pembuluh darah. Kandungan dalam Jahe tersebut juga dapat menurunkan kadar kolesterol  darah secara keseluruhan terutama kadar kolesterol LDL yang biasanya kita sebut dengan kolesterol jahat.
<br><br>
5. Menghilangkan Bau Mulut
Air Jahe juga dapat menghilangkan bau mulut. Vitamin C yang terkandung dalam Jahe ini dapat membunuh bakteri di mulut yang menyebabkan bau mulut. Caranya adalah dengan mencampurkan satu senduk air jahe ke dalam air hangat dan kumur selama beberapa menit.
<br><br>
6. Mengurangi Pembengkakan dan Peradangan
Gingerol yang dikandung oleh Jahe merupakan senyawa anti peradangan atau anti-inflamasi yang sangat ampuh. Kandungan tersebut dapat mengurangi gejala pembengkakan dan peradangan serta meredakan rasa nyeri di sendi dan otot.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Pakcoy</h2>
  <p>www.hellosehat.com</p>
  <p>1 gram protein<br>
1,5 gram karbohidrat<br>
0,7 gram serat<br>
5 persen kalium<br>
62 persen vitamin A<br>
52 persen vitamin C<br>
7 persen kalsium<br>
5 persen vitamin B6<br>
3 persen magnesium<br>
3 persen zat besi</p>
</div>
</div>

<hr>


<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3><<< UPProduction - CropUP >>></h3>
  <p>Jl. Danau Ranau No.1, Kecamatan Kedungkandang, Kota Malang. </p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Any Question? Contact us -->  <a href="https://www.instagram.com/crop.up/?hl=id" class="w3-btn w3-theme-light" target="_blank">Instagram</a></p>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 4000); // Change image every 2 seconds
}


// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
