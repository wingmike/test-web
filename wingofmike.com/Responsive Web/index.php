<!DOCTYPE html>
<html>
<head>
  <title>WM TECH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<style>
  .copy{
    bottom: 0px;
    position: absolute;
    text-align: center;
    width: 100%;
    color: white;
    margin-bottom: 20px;
  }
  .copy a{
    text-decoration: none;
    color: #ff7200;
    font-weight: bold;
  }
</style>
</head>
<body>
  <div class="logo">
    <h1>WM TECH</h1>
    <h3>የቴክኖሎጅ ት/ትና መረጃ </h3>
  </div>
<div class="navbar" id="mynavbar">

  <a href="http://localhost/wingofmike.com/login-signup/login.php">HOME</a>
  <a href="http://localhost/wingofmike.com/login-signup/login.php">DESIGN</a>
  <div class="dropdown">
    <button class="dropbtn"><b>SUBJECT</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-list">
      <a href="GRADE 7/TEXTBOOK/MATHIMATICS/MATHIMATICS.pdf">MATHIMATICS</a>
      <a href="GRADE 7/TEXTBOOK/አማርኛ/አማርኛ.pdf">AMHARIC</a>
      <a href="GRADE 7/TEXTBOOK/KAFINOONOO/K.N.N.pdf">KAFINOONOO</a>
      <a href="GRADE 7/TEXTBOOK/PERFORMING & VISUAL ART/PVA.pdf">PVA</a>
      <a href="GRADE 7/TEXTBOOK/ENGLISH/ENGLISH.pdf">ENGLISH</a>
      <a href="GRADE 7/TEXTBOOK/">MORE</a>
    </div>
  </div> 
  <a href="#contact">CONTACT</a>
  <a href="#about">ABOUT</a>
  <a href="http://localhost/wingofmike.com/login-signup/login.php" class="ri">LOGIN</a>
  <a href="http://localhost/wingofmike.com/login-signup/signup.php" class="ri">SIGNUP</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="cont">
  <h1>Learn <br> <span>Technology</span></h1>
  <p class="para"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. <br> Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. </p>


  <button class="learn"><a href="http://localhost/wingofmike.com/login-signup/login.php">Start Now</a></button>
</div>
<div class="copy">
  Copyright &copy; 2010-<?php echo date("Y"); ?> <a href="http://localhost/wingofmike.com/login-signup/login.php">WM Tech</a> All rights reserved!
</div>
<script>
function myFunction() {
  var x = document.getElementById("mynavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>

</body>


</html>