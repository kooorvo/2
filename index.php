<?php require "head.php" ?>
  <body>
    <nav>
      <img src="/assets/pdp.png" alt="Logo" class="pdp">
      <div class="section">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#videos">Videos</a></li>
          <li><a href="#websites">Webistes</a></li>
        </ul>
      </div>
      <a href="/views/contact-page.php"><button>Contact Me</button></a>
    </nav>
    <main>
      <header>
        <h2>Welcome To My Personnal Website</h2>
        <h1>Koorvo</h1>
        <a href="#about"><i class="fa-solid fa-chevron-down seeMore-btn">&nbsp;See More</i></a>
      </header>
      <section class="about" id="about">
        <h2>About</h2>
        <p>
          Hi ! My name is Koorvo (or Koorvonix sometimes), I'm 15 years old and I love creating websites using HTML, CSS and PHP now. I also like to create YouTube videos (there are 2 videos after the "about" section). I created this website to help people discover me. This is a portfolio. I started web developpement after my observation stage (that's something we do at school in France). There's many many technologies that I want to learn like : javascript, vue.js, react.js... 
        </p>
      </section>
      <!-- in style.css -->
      <button onclick="scrollUp()" class="scrollUpBtn" id="scrollUpBtn"><i class="fa-solid fa-chevron-up"></i></button>
      <section class="videos" id="videos">
        <h2>Videos</h2>
        <p>
          As I say before, I am making some videos, here it's my 2 bests videos :
        </p>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/2V6f0r0LZcY?si=jo919RFlxyuCwIP4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/cQDkMwMxxNA?si=STLt9XPoQ2z2iy00"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
      </section>
      <section class="websites" id="websites">
        <h2>Websites</h2>
        <p>Here is 2 websites that I made :</p>
        <div class="cards">
          <div class="card1">
            <img src="/assets/koorvo-www-screen.png" alt="This one Webiste" class="img-card1">
            <h3 class="website-title"><span class="website-title-span">My personnal website</span> - Koorvo</h3>
          </div>
          <div class="card2">
            <img src="/assets/scriptfinder-www-screen.png" alt="SCRRIPTFINDER" class="img-card2">
            <h3><span class="website-title-span">SCRIPTFINDER</span> - database to never lose videos scripts</h3>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="infos">
        <p>&copy;2024 - Koorvo</p>
        <p><a href="/views/contact-page.php">Contact me here</a></p>
        <img src="/assets/pdp.png" alt="Logo" class="pdp-footer">
      </div>
      <div class="social">
        <a href="https://www.youtube.com/@koorvo_" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://github.com/kooorvo" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-github"></i></a>
      </div>
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>