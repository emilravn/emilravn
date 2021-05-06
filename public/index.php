<!DOCTYPE html>
<html lang="en">

<?php

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   
    $from = $_POST['email'];
    $fromName = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // $to = "hidden ;)";
    $body = "";

    $body .= "From:" . $fromName . "\r\n";
    $body .= "Email:" . $from . "\r\n";
    $body .= "Message:" . $message . "\r\n";

    mail($to, $subject, $body);

    $message_sent = true;
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portfolio Website of Emil Ravn.">
  <!-- <link rel="icon" type="image/png" href="img/favicon.ico"> -->
  <title>Emil Ravn</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="#top">Emil Ravn</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contactform">Contact</a></li>
    </ul>
  </nav>
  <div id="main-container">
    <header id="introduction">
      <div class="flex-row"><img id="portrait" src="img/placeholder_of_me.jpg" alt="An image of me." /></div>
      <div class="flex-column">
        <p id="intro_paragraph">
          Self-taught web and software developer through own research and project-based learning who
          enjoys to build and explore using all sorts of technologies. Currently undergoing a Bachelor's Degree in Information
          Technology 5<sup>th</sup> semester at Aalborg University (AAU).
        </p>
        <p id="intro_name">Emil Ravn</p>
      </div>
    </header>
    <section class="darkrow">
      <h2 class="heading_spaced">A little about me...</h2>
      <div class="flexbox_skills">
        <div class="box-1">
          <h2 class="subject_title">Software Development</h2>
          <ul class="paragraph_text">
            <li>
              Website seen live at
              <a href="https://www.cafefrederiksberg.dk/" rel="noopener" target="_blank">Café Frederiksberg</a>
              created with HTML5, CSS, JavaScript, MySQL & PHP.
            </li>
            <li><a href="https://github.com/emilravn/yatzhee" rel="noopener" target="_blank">Yatzhee</a> made as a console application in C# with Object Oriented Programming.</li>
            <li>More projects can be seen on my <a href="https://github.com/emilravn" rel="noopener" target="_blank">GitHub</a></li>
          </ul>
        </div>
        <div class="box-2">
          <h2 class="subject_title">Technical Skills</h2>
          <ul class="paragraph_text">
            <li>Experience with Linux OS and the CLI.</li>
            <li>Virtualization/containerization with Docker and Docker Swarm.</li>
            <li>Configuration Management with Ansible.</li>
          </ul>
        </div>
        <div class="box-3">
          <h2 class="subject_title">Other Endeavours</h2>
          <ul class="paragraph_text">
            <li>Excited in working with microcomputers such as the Raspberry Pi.</li>
            <li>Knowledge in evaluation of usability in products.</li>
            <li>UI design with Adobe XD and Photoshop.</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="projects">
      <h2 class="heading_spaced">Projects</h2>
      <div class="grid-container">
        <div class="image"><img class="product_screengrab" src="img/projects/cf_full.png" alt="A screengrab of the website at https://www.cafefrederiksberg.dk/">
          <div id="technologies">
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/html5.svg" alt="Icon of HTML5">
              <p class="language-icon-size">HTML5</p>
            </div>
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/css-3.svg" alt="Icon of CSS">
              <p class="language-icon-size">CSS3</p>
            </div>
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/javascript.svg" alt="Icon of JavaScript">
              <p class="language-icon-size">JavaScript</p>
            </div>
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/php.svg" alt="Icon of PHP">
              <p class="language-icon-size">PHP</p>
            </div>
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/database.svg" alt="Icon of SQL">
              <p class="language-icon-size">MySQL</p>
            </div>
          </div>
        </div>
        <div class="description">
          <h3>Café Frederiksberg</h3>
          <p>Project at Information Technology (IT) at AAU for 1st Semester. A website created for a local business in Aalborg City with a CMS established on the ground on requirements gathering and generation.
            The goal was to make an IT-system that effectively communicated Café Frederiksbergs identity.</p>
          <a class="seemore" href="https://github.com/simoneliasen/cafefrederiksberg" rel="noopener" target="_blank">See More</a>
        </div>
      </div>
      <div class="grid-container">
        <div class="image"><video autoplay controls class="product_screengrab" src="videos/yatzhee_demonstration.mp4" alt="A video of my Yatzhee program."></video>
          <div id="technologies">
            <div class="language">
              <img class="language-icon-size" src="img/language_icons/csharp.svg" alt="Icon of HTML5">
              <p class="language-icon-size">C#</p>
            </div>
          </div>
        </div>
        <div class="description">
          <h3>Yatzhee Tabletop Game</h3>
          <p>As part of an exam in OOP at AAU, I created a game of Yatzhee as a console application. Developed with an effort on easily readible code. The game features all the necessary core concepts found in a real game of Yatzhee.</p>
          <a class="seemore" href="https://github.com/emilravn/yatzhee" rel="noopener" target="_blank">See More</a>
        </div>
      </div>
    </section>
    <?php
    if ($message_sent) :
    ?>
      <h3 style="text-align:center;">Thank you for your mail! Currently mail is not set to any address due to public repository so it won't go anywhere :)</h3>
    <?php
    else :
    ?>
      <div id="contactform">
        <h1>Contact Me</h1>
        <form action="index.php" method="POST" class="form">
          <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" tabindex="2" required>
          </div>
          <div class="form-group">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Message" tabindex="4"></textarea>
          </div>
          <div>
            <button type="submit" class="btn">Submit</button>
          </div>
        </form>
      </div>
    <?php
    endif;
    ?>
    <footer id="footer">
      <h3>Stay Connected</h3>
      <a class="img-link" href="https://github.com/emilravn" rel="noopener" target="_blank">
        <img id="githublogo" alt="Visit my GitHub Profile" src="img/github_logo_big.png" />
      </a>
      <a class="img-link" href="https://www.linkedin.com/in/emil-ravn-b4a778173" rel="noopener" target="_blank">
        <img id="linkedinlogo" alt="Visit my LinkedIn Profile" src="img/linkedin_logo.png" />
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</html>