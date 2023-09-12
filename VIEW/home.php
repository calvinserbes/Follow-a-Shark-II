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
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Rem maxime nisi expedita unde reiciendis, 
                perspiciatis officia consequuntur libero laudantium in quam 
                corrupti culpa vitae non similique. 
              </p>
              <button class="btn">Lorem</button>
            </div>
        </div>

        </article>
        
          <?php include_once "social.php";?>

        <div class="test">

        </div>

        <div class="testt"></div>
    </div>


    <script src="script/navigation.js"></script>
    <script>
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