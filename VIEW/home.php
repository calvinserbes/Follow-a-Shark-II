<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow a Shark</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/home.css">
    <?php include_once "assets/fonts/font.php";?>
    <?php 
      include_once "../MODEL/article.php";
      $newarticle = readArticle($mysqli);
    ?>
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
                
                <h3>Hi, <b class="hi"><?php echo $_SESSION["username"];?></b>.</h3>
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
                <a class="btn" href="quiz.php">Essayer notre Quizz !</a>
              </div>
          </div>
        </article>
        
          <?php include_once "social.php";?>

        <article id="about_us">
            <div class="about">
              <h2>About us</h2>
            </div>
            <div class="about_text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Pellentesque non ornare mauris, in finibus lacus.
                In interdum tellus nulla, vitae pretium nibh dapibus quis. 
                Proin ante odio, euismod vitae leo sed, interdum commodo felis. 
                Nam ultricies vulputate sem luctus eleifend. 
                Fusce suscipit rutrum est, id pretium risus aliquet et. 
                Nullam nec mi sit amet metus fringilla mattis. 
                Nulla bibendum elit augue, sit amet lacinia ante vulputate interdum. 
                Vestibulum semper, justo ac posuere sodales, odio odio volutpat ipsum, ac ullamcorper elit odio at arcu. 
                Pellentesque ultricies, erat sit amet bibendum tempus, quam nunc feugiat nulla, id condimentum ante nisl non lectus. 
                Etiam dapibus libero metus, vel lobortis arcu viverra ut. 
              </p>
              <div class='img_about'></div>
            </div>
        </article>

        <div class="lesarticles">
          <?php foreach ($newarticle as $article) {?>
            <article class="articles">
              <div class="article_image" style="background: url('<?php echo $article["a_image"]; ?>') center; background-size: cover;">
                <h3 class="article_title"><?php echo $article["a_title"];?></h3>
              </div>
              <div class="article_text">
                <p>
                    <?php echo $article["a_text"];?>
                </p>
              </div>
            </article>
          <?php }; ?>
        </div>


    </div>


    <script src="script/mobileMenu.js"></script>
    <!-- <script src="script/colorScrollNav.js"></script> -->
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