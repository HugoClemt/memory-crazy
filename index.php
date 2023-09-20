<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Morpion Crazy - DEV</title>
  <!-- <link rel="stylesheet" type="text/css" href="./css/main.css" /> -->
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <link href="./config/cnx.php" />
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Morpion</h1>
      <div class="col">
        <button><a href="./gameType.php">Jouer !</a></button>
      </div>
      <div class="col">
        <?php
        include_once("./controller/hight_score.php");

        hight_score($hight_score);
        ?>
      </div>
    </div>
    <div class="row quadrillage">
      <div class="col">
        <input class="case" type="text" id="0" onclick="exec(cases[0]);" readonly>
        <input class="case" type="text" id="1" onclick="exec(cases[1]);" readonly>
        <input class="case" type="text" id="2" onclick="exec(cases[2])" readonly>
      </div>
      <div class="col">
        <input class="case" type="text" id="3" onclick="exec(cases[3]);" readonly>
        <input class="case" type="text" id="4" onclick="exec(cases[4]);" readonly>
        <input class="case" type="text" id="5" onclick="exec(cases[5]);" readonly>
      </div>
      <div class="col">
        <input class="case" type="text" id="6" onclick="exec(cases[6]);" readonly>
        <input class="case" type="text" id="7" onclick="exec(cases[7]);" readonly>
        <input class="case" type="text" id="8" onclick="exec(cases[8]);" readonly>
      </div>
    </div>
  </div>
  <script src="tic.js"></script>
</body>

</html>