<?php    
$name = $_POST["name"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snip My Lawn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="thankYou.css" />
</head>
<body>
  <nav class="cf" style="border-bottom: 2px solid gold;">
    <div id="nav-container">
         <div id="inside-nav-container">             
           <div id="inside-nav-container-one">
             <img  src="icon.png" />
             <h1> Snip My Lawn</h1> 
           </div>
           <div class="toggle">
              <i class="fas fa-bars menu"></i>
           </div>
          <div id="inside-nav-container-two">
            <ul>
              <li><a href="index.html">Get A Quote</a></li>
              <li><a href="index.html#service-section">Services</a></li>
              <li><a href="index.html#contact-us-section">Contact Us</a></li>
           </ul>
          </div>
          <div id="inside-nav-container-three">
             <h4>456-885-9999</h4>
          </div>
        </div>
    </div>
  </nav>
 
<!--                Contact Us                    -->
    <section id="contact-us-section" class="cf">
    <div class="container">
   <h1>Thank you so much <?php echo $name  ?>! We look forward to reading your kind words</h1>
</div>
</section>


<footer class="cf">
    <div class="footer-wrapper" >
       <h4>Powered By Teron Sampson</h4>
        <span>Privacy Statement</span>
    </div>
</footer>
<!--                Scripts                    -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
 <script src="SnipMyLawn.js"></script> 
</html>