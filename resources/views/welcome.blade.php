<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand" rel="stylesheet">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

        <title>Napitalai ICT Consultants</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
  
  <body>
    <div id="wallpaper" class="wallpaper" data-image="images/austria.jpg"></div>
    <div class="content">
    <aside class="side">
    <figure id="picture" class="picture">
      <div class="picture-shadow"></div>
      <img id="pictureImage" class="picture-image"
           src="images/sly.jpg"
           srcset="images/sly.jpg 1x,
                   images/sly.jpg 2x,
                   images/sly.jpg 3x
                   image/sly.jpg 4x"
           alt="Portrait of Alois Napitalai"
           width="320"
           height="320">
    </figure>
  </aside>
      <main class="about">
        <h1 class="name">
          Hi there, I am Alois Napitalai
        </h1>
        <p class="job">
          Self Taught Web Developer
        </p>
        <hr class="hr">
        <div class="description">
          <p>
             In learning,I believe in doing than talking and doing nothing!
          </p>
        </div>
        <div class="contact">
          <a class="button" href="mailto:anapitalai@example.com">
            Get in touch
          </a>
        </div>
        <ul class="social">
          <li>
            <a href="https://twitter.com/alois.napitalai">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/anapitalai">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </main>
    </div>
    <noscript>
      <style type="text/css">
        .wallpaper {
          animation-name: zoomOut;
        }

        .picture {
          animation-name: dropIn;
        }
      </style>
    </noscript>
    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>

