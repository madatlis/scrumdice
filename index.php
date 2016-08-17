<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ScrumDice</title>
  <meta name="description" content="ScrumDice">
  <meta name="author" content="Stuff">
  <link rel="stylesheet" href="css/style.css?v=1.0">
  <link rel="stylesheet" href="//dl.dropboxusercontent.com/u/46952952/css/jquery.countdown.css">
</head>
<body>
<!-- Scrumdice v 1.0 -->
  <div class="container">
    <h1>Scrumdice!</h1>
    <div class="dicefelt">
      <div id="die1" class="dice">&#9856;</div>
      <div id="die2" class="dice">&#9861;</div>
    </div>
    <button class="roll-dice-button" onclick="rollDice()">Roll Dice</button>
    <h2 id="status" class="announcement"></h2>
        <p><div id="highlightCountdown" class="countdown">&nbsp;</div></p>
  </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//dl.dropboxusercontent.com/u/46952952/js/jquery.plugin.js"></script>
  <script src="//dl.dropboxusercontent.com/u/46952952/js/jquery.countdown.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
