<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eloquent</title>
    <meta name="description" content="IPMEDT4 Project: interactie tussen Lyme patienten en zorgverleners.">
    <meta name="author" content="Eloquent">

    {{-- Styles --}}
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">

    {{-- Scripts --}}
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.scrollify.js"></script>
    <script src="js/main.js"></script>
  </head>

  <body>
    <section id="splash-section" data-section-name="splash">
      <div class="wrapper" id="splash-box">
        <div class="infoblock">
          <h1>Welkom bij Lymen't</h1>
          <p>U kunt hier in heldere stappen een diagnose document opstellen,
            bijvoorbeeld handig voor uw afspraak bij de huisarts.</p>
          <p>Aan het einde van de test heeft u de optie dit document per mail op te sturen.</p>
          <h3 class="btn-next" id="infoknop">Begin nu</h3>
        </div>
        <div class="infoblock">
          <img class="infoicon" src="img/medical-history.png" alt="Kladblok icoon">
        </div>
      </div>

      </div>
    </section>

    <section id="intro-section" data-section-name="intro">
      <div class="wrapper">
        <div class="infoblock">
          <h1>Let op!</h1>
          <p>Deze website is een particulier initiatief.</p>
          <p>Dit betekend voor u dat u geen rechten kan ontlenen aan de conclusies getrokken uit deze website, dan wel impliciet als expliciet.</p>
          <h3 class="btn-next" id="startknop">Hier heb ik kennis van genomen.</h3>
        </div>
        <div class="infoblock">
          <img class="infoicon" src="img/warning.png" alt="Kladblok icoon">
        </div>

      </div>
    </section>

    <!-- Hier komen alle vragen -->
    <section class="question-section" data-section-name="question">
      <div class="wrapper">
        <div class="">
          <h3 class="vraag-nummer">Vraag 1</h3>
          <h1 class="vraag">Ik hou van wortels</h1>
          <div class="antwoord-box">
            <div class="input-slider">
              Eens
              <input type="range" id="myRange" value="2" min="0" max="4">
              Oneens
            </div>
          </div>
          <h3 class="btn-next" id="infoknop">Volgende</h3>
        </div>
      </div>
    </section>

    <section class="question-section" data-section-name="question">
      <div class="wrapper">
        <div class="">
          <h3 class="vraag-nummer">Vraag 1</h3>
          <h1 class="vraag">Ik hou van wortels</h1>
          <div class="antwoord-box">
            <div class="input-slider">
              Eens
              <input type="range" id="myRange" value="2" min="0" max="4">
              Oneens
            </div>
          </div>
          <h3 class="btn-next" id="infoknop">Volgende</h3>
        </div>
      </div>
    </section>

    {{-- @foreach ($vragen as $vraag)
      <section class="question-section" data-section-name="intro">
        <div class="wrapper">
          <h1>Let op!</h1>
          <p>Deze website is een particulier initiatief.</p>
          <p>Dit betekend voor u dat u geen rechten kan ontlenen aan de conclusies getrokken uit deze website, dan wel impliciet als expliciet.</p>
          <h3 class="btn-next" id="startknop">Hier heb ik kennis van genomen.</h3>
        </div>
      </section>
    @endforeach --}}

    <section id="outro-section" data-section-name="outro">
      <div class="wrapper">
        <div class="infoblock">
          <h1>Dank u wel</h1>
          <p>Hiermee is het einde van de test berijkt.</p>
          <p>Het PDF bestand kunt u nu downloaden of afrukken om mee te nemen naar uw huisarts.</p>
          <h3 class="btn-next" id="startknop">Download</h3>
        </div>
        <div class="infoblock">
          <img class="infoicon" src="img/clipboards.png" alt="Kladblok icoon">
        </div>
      </div>
    </section>

  </body>
</html>
