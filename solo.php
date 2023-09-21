<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morpion Crazy - DEV Solo</title>
    <!-- <link rel="stylesheet" type="text/css" href="./css/main.css" /> -->
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <link href="./config/cnx.php" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<input class="begin" id="lancer" type="button" value="Lancer la partie" onclick>
<body>
    <div class="container">
        <div class="row quadrillage">
            <div class="col">
                <input class="case" type="text" id="0" onclick="freeCells(); execBot(cases[0]); botPlayer(tabCasesLibres);" readonly>
                <input class="case" type="text" id="1" onclick="freeCells(); execBot(cases[1]); botPlayer(tabCasesLibres);" readonly>
                <input class="case" type="text" id="2" onclick="freeCells(); execBot(cases[2]); botPlayer(tabCasesLibres);" readonly>
            </div>
        </div>
        <div class="row quadrillage">
            <div class="col">
                <input class="case" type="text" id="3" onclick="freeCells(); execBot(cases[3]);" readonly>
                <input class="case" type="text" id="4" onclick="freeCells(); execBot(cases[4]);" readonly>
                <input class="case" type="text" id="5" onclick="freeCells(); execBot(cases[5]);" readonly>
            </div>
        </div>

        <div class="row quadrillage">
            <div class="col">
                <input class="case" type="text" id="6" onclick="freeCells(); execBot(cases[6]);" readonly>
                <input class="case" type="text" id="7" onclick="freeCells(); execBot(cases[7]);" readonly>
                <input class="case" type="text" id="8" onclick="freeCells(); execBot(cases[8]);" readonly>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keybord="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">🤖 Tu as perdu contre un robot.
                        Il va aussi, bientôt,
                        chopper votre boulot.</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  ><a href="./gameType.php">Revanche !</a></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="exec.js"></script>
    <script src="solo.js"></script>

</body>

</html>