<!DOCTYPE html>

<?php include ("includes/titre.php") ?>

<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RMG - Player</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        <link rel="stylesheet" href="src/css/player.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
    </head>

    <body>

        <div class="container bgblack">
            <div class="center">
                <div class="container pb-4">
                    <p id="titre" class="pt-4 pb" style="color:white;"><?= str_replace("Now On Air:", "En ce moment :<br>", titre())?></p>
                    <audio src="http://37.187.114.170:8000/listen.mp3" id="lecteur"></audio>
                    <button class="btn btn-success" id="play"><i class="fas fa-play"></i></button>
                    <button class="btn btn-danger" id="pause"><i class="fas fa-stop"></i></button>
                    <button class="btn btn-primary" id="plus"><i class="fas fa-plus"></i></button>
                    <button class="btn btn-primary" id="moins"><i class="fas fa-minus"></i></button>
                </div>
            </div>
        </div>






        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="src/js/player.js"></script>

    </body>

</html>
