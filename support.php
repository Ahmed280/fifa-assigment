<?php
require('Dbcon.php');
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: enter.php");
        exit();
    }
?>

<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Shiphile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">



<style>
.accordion {
  background-color: #eee;
  color: #3f4a5c;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  /*background-color: #ccc; */
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>

</head>
<body id="top">

  <div class="wrapper row1">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Enter</a></li>

        <li class="active"><a href="register.php">Register</a></li>

        <li class="active"><a href="ranking.php">Ranking</a></li>

        <li class="active"><a href="support.php">Help</a></li>
      </ul> 
      <!-- ################################################################################################ -->
    </nav>
  </div>
  


<div class="wrapper row3">
  <main class="hoc container clear"> 
            <h1 style="text-align: center;"><b>Help</b></h1>



<button class="accordion">How do I open an account? </button>
<div class="panel">
  <p>Coming soon...</p>
</div>

<button class="accordion">How do I fund my account? </button>
<div class="panel">
  <p>Coming soon...</p>
</div>

<button class="accordion">Who is/owns UPAeSports</button>
<div class="panel">
  <p>Coming soon...</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>



    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <div class="group"> 
      <!-- ################################################################################################ -->
     <!--  <div class=""> -->
        <div class="float-left" style="margin-left: 38px;">
        <a href="support.php">SUPPORT / </a>
        <a href="terms.php">TERMS / </a>
        <a href="privacy.php">PRIVACY / </a>
        <a href="aboutus.php">ABOUT US / </a>
      </div>

        <br>
        <br>
        <ul class="nospace btmspace-30 linklist contact">
          <li><img src="images/demo/icon/icon.jpg" style="width: 30px;
          height: 28px;">
          OVER 18 ONLY
            
          </li>
          <li>© 2020 UPAESPORTS. ALL RIGHTS RESERVED</li>
          <li><P>EA Sports and the EA Sports logo are trademarks of Electronics Arts, Inc. All rights registered. Electronics Arts, Inc is not affiliated with UPAeSports. Trademarks of Sony Computer Entertainment. All rights reserved. Sony Computer Entertainment is not affiliated with UPAeSports. PS3 ©, PS4, Wii ©, PC, and iOS Mobile games for cash and prizes without ever getting up of the couch. Compete in daily cash tournaments.</P></li>
        </ul>
      </div>
 
    </div>
  </footer>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->

<script src="flip.js"></script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>