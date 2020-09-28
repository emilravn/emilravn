<!DOCTYPE html>
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
      <li><a href="#top">Emil Ravn</a></li>
      <li><a href="#myprojects">Projects</a></li>
      <li><a href="#contactform">Contact</a></li>
    </ul>
  </nav>
  <div id="main-container">
    <header id="introduction">
      <img id="portrait" src="img/placeholder_of_me.jpg" alt="An image of me." />
      <p id="intro_paragraph">
        Self-taught web and software developer through own research and project-based learning who
        enjoys to build and explore using all sorts of technologies. Currently undergoing a Bachelor's Degree in Information
        Technology 5<sup>th</sup> semester at Aalborg University.
      </p>
    </header>
    <section class="darkrow">
      <h2 class="heading_spaced">A little bit about me...</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio fuga illo animi voluptates maxime rerum asperiores, a voluptatem alias vero totam. Ex amet sint at esse repudiandae repellat reprehenderit numquam.
        At incidunt dolore veritatis assumenda! Labore suscipit est a, alias neque enim qui necessitatibus, ad excepturi nulla perspiciatis modi, corporis ipsam cupiditate tenetur doloribus sit minima reiciendis placeat consequuntur expedita!
        Quis adipisci rerum consectetur accusamus ut distinctio sequi laborum fugiat nihil pariatur? Ipsa voluptatum maxime reiciendis veniam, quod dolorum saepe non, consectetur quaerat, nemo obcaecati voluptatibus autem necessitatibus excepturi esse.</p>
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
            <li>I like to play with microcomputers such as the Raspberry Pi. Infact it is said that this website is hosted on one!</li>
            <li>Knowledge in evaluation of usability in products.</li>
            <li>UI design with Adobe XD and Photoshop.</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="myprojects">
      <h2 class="heading_spaced">Projects</h2>
      <div class="project">
        <img class="company_logo" src="img/projects/cf_logo.svg" alt="The Company Logo of Café Frederiksberg">
        <img class="product_screengrab" src="img/projects/cf_full.png" alt="A screengrab of the website at https://www.cafefrederiksberg.dk/">
        <p>A small description of the project alongside a list of technologies used.</p>
        <ul>
          <li>HTML5</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>Adobe XD</li>
          <li>Photoshop</li>
        </ul>
        <a href="https://github.com/simoneliasen/cafefrederiksberg" target="_blank">GitHub Link</a>
      </div>
      <div class="project">
        <h2>Yatzhee</h2>
        <p>Instead of an image, put a video in here showing the demonstration of the program.</p>
        <p>As part of an exam in Object Oriented Programming at Aalborg University; I was tasked with creating a Yatzhee console application. It was developed using OOP in C# with an effort on easily readible and maintable code. The game can be played single-player only and features all the necessary core concepts found in a game of real game of Yatzhee.</p>
        <ul>
          <li><code>C#</code></li>
          <li><code>Object Oriented Programming</code></li>
        </ul>
        <a href="https://github.com/simoneliasen/cafefrederiksberg" target="_blank">GitHub Link</a>
      </div>
    </section>
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