<?php
$message_sent = false;
if (isset($POST['email']) && $POST['email'] != '') {

  if (filter_var($POST['email'], FILTER_VALIDATE_EMAIL)) {
    // submit form
    $userName = $POST['name'];
    $userEmail = $POST['email'];
    $subject = $POST['subject'];
    $message = $POST['message'];

    $to = "emilravn@outlook.com";
    $body = "";

    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $subject, $body);

    $message_sent = true;
  }
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emil Ravn</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
  <a class="burger-nav"></a>
  <nav>
    <ul>
      <li><a href="#">Emil Ravn</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div id="main-container">
    <header id="introduction">
      <img id="portrait" src="img/placeholder_of_me.jpg" alt="An image of me." />
      <p id="intro_paragraph">
        Self-taught software and web developer through own research and project-based learning who
        strives to pursue a career in software development. Currently studying Information
        Technology 5<sup>th</sup> semester at Aalborg University.
      </p>
    </header>
    <section class="darkrow">
      <h2 class="heading_spaced">My Skills</h2>
      <div class="flexbox_skills">
        <div class="box-1">
          <h2 class="subject_title">Software Development</h2>
          <ul class="paragraph_text">
            <li>
              Website seen live at
              <a href="https://www.cafefrederiksberg.dk/" target="_blank">Café Frederiksberg</a>
              created with HTML5, CSS, JavaScript, MySQL & PHP.
            </li>
            <li>Yatzhee made as a console application in C# with OOP.</li>
            <li>More projects can be seen on my <a href="https://github.com/emilravn" target="_blank">GitHub</a></li>
          </ul>
        </div>
        <div class="box-2">
          <h2 class="subject_title">Tech Skills</h2>
          <ul class="paragraph_text">
            <li>Experience with Linux and the use of the CLI.</li>
            <li>Docker and Docker Swarm.</li>
            <li>Configuration Management in Ansible.</li>
            <li>Version Control with Git.</li>
          </ul>
        </div>
        <div class="box-3">
          <h2 class="subject_title">Other Endeavours</h2>
          <ul class="paragraph_text">
            <li>I like to play with microcomputers such as the Raspberry Pi.</li>
            <li>Knowledge in evaluation of usability in products.</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="myprojects"></section>
    <?php
    if ($message_sent) :
    ?>

      <h1>Your message has been sent! Thanks!</h1>

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
      <a class="img-link" href="https://github.com/emilravn" target="_blank">
        <img id="githublogo" alt="Visit my GitHub Profile" src="img/github_logo_big.png" />
      </a>
      <a class="img-link" href="https://www.linkedin.com/in/emil-ravn-b4a778173" target="_blank">
        <img id="linkedinlogo" alt="Visit my LinkedIn Profile" src="img/linkedin_logo.png" />
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</html>