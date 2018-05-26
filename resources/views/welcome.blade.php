<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Eloquent</title>
      <meta name="description" content="IPMEDT4 Project: interactie tussen Lyme patienten en zorgverleners.">
      <meta name="author" content="Eloquent">

      <!-- Styles -->
      <link rel="stylesheet" href="/css/landing.css">
  </head>
  <body>
    <div class="background-image" id="background">
      {{-- Old background image --}}
      {{-- <img src="/img/splash-bg.jpg" alt="background of tall grass"> --}}
      <video src="/vid/splash-bg.mp4" autoplay loop muted>
        Your browser does not support this video.
      </video>
    </div>

    <div class="wrapper">
      <main id="splash">
        <div class="splash-left">
          <h1>Welcome to Lyme4un't</h1>
          <p>Krijg in 10 minuten het antwoord op uren zoeken van onzekerheid.</p>
          <p>Nu met directe PDF service!</p>
        </div>
        <div class="splash-right">
          <button id="startBtn" type="button" name="button">Start de test</button>
        </div>
      </main>
    </div>
  </body>

  <script type="text/javascript">
    window.onload = function () {
      document.getElementById('background').style.filter = "grayscale(30%) blur(2px) brightness(100%)";
      setTimeout(function () {
        document.getElementById('splash').classList.add('slide-in-top');
      }, 500);

      document.getElementById('startBtn').addEventListener("click", startTest);

      function startTest() {
        document.getElementById('splash').classList.add('slide-out-top');
      }

    }
  </script>

</html>
