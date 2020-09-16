
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>emilravn.io</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#">Home</a>
      <ul>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div id="wrapper">
      <header class="introduction">
        <img class="whoiam" src="img/placeholder_of_me.jpg" alt="An image of me." />
        <p class="introduction_paragraph">
          Self-taught software and web developer through own research and project-based learning who
          strives to pursue a career in software development. Currently studying Information
          Technology 5<sup>th</sup> semester at Aalborg University.
        </p>
      </header>
      <section class="darkBackground">
        <div id="wrapper">
          <h2 class="thin">My Skills</h2>
          <div class="flexcontainer_skills">
            <div class="box-1">
              <h2 class="thinner">Software Development</h2>
              <ul class="thinnest">
                <li>
                  Website seen live at
                  <a href="https://www.cafefrederiksberg.dk/" target="_blank">Café Frederiksberg</a>
                  created with HTML5, CSS, JavaScript, MySQL & PHP.
                </li>
                <li>Yatzhee made as a console application in C# with OOP.</li>
                <li>More projects can be seen on my GitHub.</li>
              </ul>
            </div>
            <div class="box-2">
              <h2 class="thinner">Tech Skills</h2>
              <ul class="thinnest">
                <li>Experience with Linux and the use of the CLI.</li>
                <li>Docker and Docker Swarm.</li>
                <li>Configuration Management in Ansible.</li>
                <li>Version Control with Git alongside GitHub.</li>
              </ul>
            </div>
            <div class="box-3">
              <h2 class="thinner">Other Endeavours</h2>
              <ul class="thinnest">
                <li>I like to play with microcomputers such as the Raspberry Pi.</li>
                <li>Knowledge in evaluation of usability in products.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="myprojects"></section>
      <div id="contactform">
        <h3>CONTACT ME</h3>
      </div>
      <footer id="footer">
        <h3>Stay Connected</h3>
        <a href="https://github.com/emilravn" target="_blank">
          <img alt="Visit my GitHub Profile" src="img/GitHub-Mark-32px.png" />
        </a>
      </footer>
    </div>
    <script src="script.js"></script>
  </body>
</html>