<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("admin/scripts/config.php");
if(isset($_POST['submit'])){
  //echo "YOU DID IT YOU CLICKED THE BUTTON";
  //echo "works";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $street = $_POST['street'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  //echo $name;
  if($street === ""){
    //echo "Human";
    $sendMail = submitMessage($name, $email, $subject, $message);
  }
}
 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fran.</title>
<link href='http://fonts.googleapis.com/css?family=Mystery+Quest' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css" media="screen">
</head>
<body>
  <header>
    <h1 class="hidden">Header</h1>
    <div>
      <a href="resume.html">
          <div id="resumeArrow">
            <h3 id="resumeText">Resume.</h3>
            <p id="r">R.</p>
          </div>
      </a>
    </div>
    <div id="offcanvas-full-screen" class="offcanvas-full-screen" data-off-canvas data-transition="overlap">
      <div class="offcanvas-full-screen-inner">
        <button class="offcanvas-full-screen-close" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>
        <ul class="offcanvas-full-screen-menu" id="mainNav">
          <li><a href="#" id="1" data-close>About</a></li>
          <li><a href="#" id="2" data-close>Portfolio</a></li>
          <li><a href="resume.html">Resume</a></li>
          <li><a href="#" id="3" data-close>Contact</a></li>
        </ul>
      </div>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <div id="headerItems" class="top-bar grid-x align-center">
        <div id="logoArea" class="top-bar-title small-6 medium-4 large-2 cell">
          <img id="logo" src="images/logo.svg" alt="Fran.">
        </div>
        <div id="hamButton" class="top-bar-right small-3 align-center grid-x">
          <button class="menu-icon dark" type="button" data-toggle="offcanvas-full-screen"></button>
        </div>
      </div>
    </div>
  </header>
  <section id="welcome" class="grid-x">
    <div id="welcomeMessage" class="chat bounceRight speech-bubble-left small-8 cell"><p>Hi, my name is Fran. I am a front end developer. Welcome to my portfolio site!</p></div>
    <div id="helpMessage" class="chat bounceRight2 speech-bubble-left small-8 cell"><p>You can respond using the text box below</p></div>
    <div id="userBubble1" class="chat speech-bubble-right small-8 small-offset-4 cell"><p></p></div>
    <div id="myMessage2" class="chat speech-bubble-left bounceRight small-8 cell"><p></p></div>
    <div id="userBubble2" class="chat speech-bubble-right small-8 small-offset-4 cell"><p></p></div>
    <div id="myMessage3" class="chat speech-bubble-left bounceRight small-8 cell"><p></p></div>
      <ul id="response" class="grid-x">
        <li><a id="user1" class="answer columns">
          <p>I want to see your resume.</p>
        </a></li>
        <li><a id="user2" class="answer columns">
          <p>Tell me more about you.</p>
        </a></li>
        <li><a id="user3" class="answer columns">
          <p>I want to see sites you have coded in the past.</p>
        </a></li>
        <li><a id="user4" class="answer columns">
          <p>How can I contact you?</p>
        </a></li>
      </ul>
      <input type="text" id="typeInput" placeholder="Type here...">
  </section>

  <section class="grid-x small-collapse expanded" id="section1">
    <img id="selfImg" class="small-12 medium-6 cell" src="images/about-placeholder.jpg" alt="Video">
    <div id="about" class="small-12 medium-6 large-6 cell">
      <h2 class="cell">About Me.</h2>
      <p class="cell">This is all about me, everything is about me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me and me</p>
      <a href="https://github.com/Fwyllie"><img class="socials" src="images/github-logo.png" alt="Github"></a>
      <a href="https://www.linkedin.com/in/fran-wyllie-1b9943125/"><img class="socials" src="images/linkedin-logo.png" alt="LinkedIn"></a>
      <a href="https://twitter.com/FranWyllie"><img class="socials" src="images/twitter-logo.png" alt="Twiter"></a>
    </div>
  </section>

  <section id="section2" class="grid-x">
    <h2 class="hidden cell">Portfolio</h2>
    <!--<div class="small-12 medium-6 cell imgHolder"><img class="example"  data-dbindex="1" src="images/filler.jpg" alt="Portfolio Piece 1"></div>
    <div class="small-12 medium-6 cell imgHolder"><img class="example" data-dbindex="2" src="images/filler.jpg" alt="Portfolio Piece 2"></div>
    <div class="small-12 medium-6 cell imgHolder"><img class="example" data-dbindex="3" src="images/filler.jpg" alt="Portfolio Piece 3"></div>
    <div class="small-12 medium-6 cell imgHolder"><img class="example" data-dbindex="4" src="images/filler.jpg" alt="Portfolio Piece 4"></div>
  -->
  </section>
  <section class="lightbox">
		<i class="fa fa-times close-lightbox"></i>
		<img class="lightbox-img" src="" alt="WOW look at this lightbox image">
    <p class="lightbox-name">Placeholder copy</p>
		<p class="lightbox-desc">Placeholder copy</p>
    <ul class="subImagesContainer"></ul>
	</section>
  <section id="section3" class="grid-x">
    <h2 class="cell">Contact</h2>
    <p class="small-10 medium-offset-1 cell">im the best so you should contact me and give me all of your money. okay thanks bye</p>
    <form action="index.php" class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell" id="contactInputs" method="post">
			<input name="name" type="text" required placeholder="Name: (REQUIRED)">
			<input name="email" type="email" required placeholder="Email: (REQUIRED)">
      <input name="street" class="street" type="text" placeholder="Street:">
      <input name="subject" type="text" placeholder="Subject: ">
			<textarea name="message" rows="8" cols="50" required placeholder="Your Message: (REQUIRED)"></textarea>
      <input id="submitButton" name="submit" type="submit">
		</form>
    <h3 id="messageSent"><?php
    if (!empty($sendMail)) {
      echo $sendMail;
    }
    ?></h3>
  </section>


  <footer class="grid-x align-center">
      <div class="small-12 medium-6 large-4 cell" id="footerNav">
        <a href="https://github.com/Fwyllie"><img class="socials" src="images/github-logo.png" alt="Github"></a>
        <a href="https://www.linkedin.com/in/fran-wyllie-1b9943125/"><img class="socials" src="images/linkedin-logo.png" alt="LinkedIn"></a>
        <a href="https://twitter.com/FranWyllie"><img class="socials" src="images/twitter-logo.png" alt="Twiter"></a>
      </div>
  </footer>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/chat.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
</body>
</html>
