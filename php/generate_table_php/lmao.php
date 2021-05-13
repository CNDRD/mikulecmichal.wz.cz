<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!-- Favicon and title -->
    <link rel="icon" href="/res/fav.png" />
    <title>Mikulec</title>

    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/res/css.css" />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap');
      *{font-family: 'Montserrat Alternates', sans-serif;}
    </style>

  </head>
  <body class="dark-mode">

    <!-- Back Button -->
    <a href="/" class='btn-back'>🔙</a>

    <!-- Midel -->
    <div class="text-center">
      <!-- Card -->
      <div class="card shadow mw-full p-card text-center">

        <?php
          $rows = $_POST['rows'];
          $cols = $_POST['cols'];
          $lmao = 0;

          echo '<h2 class="card-title font-weight-light">'.$rows.' řádků'.'</h2>';
          echo '<table class="table table-bordered">';
          for ($i = 0; $i <= $rows; $i++){
            echo '<tr>';
            for ($y = 0; $y <= $cols; $y++){
              if ($lmao % 2 == 0) {
                echo '<td class="text-center bg-danger">'.$lmao.'</td>';
              } else {
                echo '<td class="text-center">'.$lmao.'</td>';
              }
              $lmao++;
            }
            echo '</tr>';
          }
          echo '</table>';
        ?>

        <a href="index.html" class="btn btn-secondary btn-block font-weight-bolder mt-15">Zpět</a>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
