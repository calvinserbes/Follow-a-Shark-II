<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow a Shark</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/home.css">
    <?php include_once "assets/fonts/font.php";?>
</head>
<body>
    <?php include_once "navigation.php";?>

    <div id="home background">

      <video 
        autoplay loop muted class="background-video"
        src="assets/media/video.mp4">
      </video>

      <header class="header">

              <div class="present">
                <h2 class="text-shadow">"All fish eat people, only the shark is blamed."</h2>
                <h1 class="text-shadow">Follow a Shark</h1>
                <btn id="scrollButton" class="nav-item btn decouverte text-shadow">Découvrez</btn>
              </div>

              <div class="audioplayer">
                <audio
                  class="audio"
                  controls
                  src="assets/audio/sea-ambiance.mp4">
                </audio>
              </div>
                
                <button id="btnVideo" onclick="playAndPause()">II</button>
        </header>

        <article class="plonger">

          <div class="width">
            <div class="picture">
              <img src="assets/images/pictures/plongeur.jpg" alt="Photo de plongeur" class="plongeur_pic">
            </div>

            <div class="text_plongeur">
              <h2>Lorem Ipsum</h2>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Rem maxime nisi expedita unde reiciendis, 
                perspiciatis officia consequuntur libero laudantium in quam 
                corrupti culpa vitae non similique. 
                Sunt necessitatibus earum similique?
              </p>
              <button class="btn">Lorem</button>
            </div>
        </div>

        </article>
        
          <?php include_once "social.php";?>
    </div>


    <script>
      // responsive navbar
    const burger = document.querySelector(".burger")
    const navItems = document.querySelector(".nav-items")
 
    burger.addEventListener('click',()=>{
    navItems.classList.toggle('mobile-menu')
    })
    
    // change color navbar on scroll
    document.addEventListener("DOMContentLoaded", function () {
    let nav = document.querySelector(".navigation");
    let btn = document.querySelector(".btn");
    let logo = document.querySelector(".logo")
  
    window.addEventListener("scroll", function () {
    let scrollPosition = window.scrollY;
    let navHeight = (82.5 / 100) * window.innerHeight;

    if (scrollPosition >= navHeight) {
      nav.classList.add("color-change");
      btn.classList.add("color-btn-change");
      logo.src = "assets/images/logo_white.svg";
    } else {
      nav.classList.remove("color-change");
      btn.classList.remove("color-btn-change");
      logo.src = "assets/images/logo_linear.svg";
    }
    });
    });

    // video player
    let video = document.querySelector(".background-video");
    let play = document.getElementById("btnVideo");

    function playAndPause () {
      if (video.paused) {
        video.play();
        play.innerHTML = "II";
      } else {
        video.pause();
        play.innerHTML = "▶";
      }
      }

      // btn scroll down
      function scrollToNextSection() {
      const windowHeight = window.innerHeight;
          window.scrollBy({
            top: windowHeight,
            left: 0,
            behavior: 'smooth'
          });
        }
        const scrollButton = document.getElementById('scrollButton');
        scrollButton.addEventListener('click', scrollToNextSection);
</script>
    
</body>
</html>