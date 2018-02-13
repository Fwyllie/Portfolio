<?php

require_once("./includes/scripts/config.php");
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $street = $_POST['street'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  if($street === ""){
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
    <h2 class="hidden">Main Navigation</h2>
    <div>
      <a download href="includes/FrancesWyllieResume.pdf">
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
          <li class="resumeNav"><a download href="includes/FrancesWyllieResume.pdf">Resume</a></li>
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
  <div id="chatArea">
  <section id="welcome" class="grid-x">
    <h2 class="hidden">Welcome Message board</h2>
    <div id="welcomeMessage" class="chat bounceRight speech-bubble-left small-8 cell"><p>Thanks for checking out my portfolio site! What did you want to see?</p></div>
    <div id="helpMessage" class="chat bounceRight2 speech-bubble-left small-8 cell"><p>You can respond using the text box below</p></div>
    <div id="userBubble1" class="chat speech-bubble-right small-8 small-offset-4 cell"><p></p></div>
    <a id="message2link"><div id="myMessage2" class="chat speech-bubble-left bounceRight small-8 cell"><p></p></div></a>
    <div id="userBubble2" class="chat speech-bubble-right small-8 small-offset-4 cell"><p></p></div>
    <a id="message3link"><div id="myMessage3" class="chat speech-bubble-left bounceRight small-8 cell"><p></p></div></a>
      <ul id="response" class="grid-x">
        <li>
          <a id="user1" class="answer columns">
            <p>Let's see your resume!</p>
          </a>
        </li>
        <li><a id="user2" class="answer columns">
          <p>Tell me about yourself.</p>
        </a></li>
        <li><a id="user3" class="answer columns">
          <p>Let's see your portfolio.</p>
        </a></li>
        <li><a id="user4" class="answer columns">
          <p>How can I contact you?</p>
        </a></li>
      </ul>
      <p class="text"></p>
      <input class="large-10 cell" type="text" id="typeInput">
  </section>
  </div>

  <section class="grid-x small-collapse expanded" id="section1">
    <img id="selfImg" class="align-self small-6 medium-4 large-4 large-offset-4 cell" src="images/headshot.jpg" alt="Headshot">
    <div id="about" class="small-12 medium-8 large-8 cell">
      <h2 class="cell">About Me.</h2>
      <p class="cell">Hi, my name is Fran! I'm a professional Front End Developer who loves a good challenge. I'm very proficient in HTML, CSS, Javascript, and am always learning and staying up to date. I always put in an effort towards making every project special with great UI/UX considerations. I have great communication skills and I love meeting new people. You can checkout my past work below!</p>
      <a href="https://github.com/Fwyllie"><img class="socials" src="images/github-logo.png" alt="Github"></a>
      <a href="https://www.linkedin.com/in/fran-wyllie-1b9943125/"><img class="socials" src="images/linkedin-logo.png" alt="LinkedIn"></a>
      <a href="https://twitter.com/FranWyllie"><img class="socials" src="images/twitter-logo.png" alt="Twiter"></a>
    </div>
  </section>
  <section id="skillsArea" class="align-center">
    <h2 id="skillsTitle" class="cell">Skills.</h2>
<<<<<<< HEAD
    <div class="align-center grid-x">
      <img id="htmlLogo" class="mainSkills cell small-4 medium-3 large-2" src="images/htmlLogo-pink.png" alt="HTML5">
      <img id="cssLogo" class="mainSkills cell small-4 medium-3 large-2" src="images/cssLogo-pink.png" alt="CSS3">
      <img id="jsLogo" class="mainSkills cell small-4 medium-3 large-2" src="images/jsLogo-pink.png" alt="JavaScript">
    </div>
    <div class="align-center grid-x">
      <img class="secondSkills small-3 cell" src="images/sassLogo.png" alt="Sass">
      <img class="secondSkills small-3 cell" src="images/foundationLogo.png" alt="Foundation">
      <img class="secondSkills small-3 cell" src="images/nodeLogo.png" alt="Node JS">
      <img class="secondSkills small-3 cell" src="images/phpLogo.png" alt="PHP">
    </div>
=======
    <img id="htmlLogo" class="skills cell small-4 medium-3 large-2" src="images/htmlLogo-pink.png" alt="HTML5">
    <img id="cssLogo" class="skills cell small-4 medium-3 large-2" src="images/cssLogo-pink.png" alt="CSS3">
    <img id="jsLogo" class="skills cell small-4 medium-3 large-2" src="images/jsLogo-pink.png" alt="JavaScript">
>>>>>>> ff914c11b8566a842da2fff48d413a58af585f82
  </section>

  <section id="section2" class="grid-x">
    <h2 class="cell">Portfolio.</h2>
    <section class="lightbox">
<<<<<<< HEAD
      <h3 class="hidden">Lightbox for portfolio</h3>
  		<i class="fa fa-times close-lightbox"></i>
  		<img class="lightbox-img cell large-8" src="" alt="Image failed to load.">
      <p class="lightbox-name">Placeholder</p>
  		<p class="lightbox-desc">Placeholder</p>
=======
      <i class="fa fa-times close-lightbox"></i>
      <img class="lightbox-img" src="" alt="Image failed to load">
      <p class="lightbox-name">Placeholder copy</p>
      <p class="lightbox-desc">Placeholder copy</p>
>>>>>>> ff914c11b8566a842da2fff48d413a58af585f82
      <a class="githubLink">
        <img src="images/github-logo.png" alt="GitHub!">
        <p>Check it out on GitHub here!</p>
      </a>
<<<<<<< HEAD
  	</section>
=======
    </section>
>>>>>>> ff914c11b8566a842da2fff48d413a58af585f82
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
    <h3 id="messageSent" class="medium-8 medium-offset-2 large-6 large-offset-3 cell">
    <?php
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
    <script src="js/type.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
</body>
</html>
