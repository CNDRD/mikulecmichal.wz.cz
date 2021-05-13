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

  </head>
  <body class="dark-mode">

    <!-- Back Button -->
    <a href="/" class='btn-back'>🔙</a>

    <!-- Midel -->
    <div class="midel">
      <!-- Card -->
      <div class="card shadow w-300 mw-full p-card text-center">

        <?php
          $x = $_POST['num1'] + $_POST['num2'];
          echo '<div class="mb-20 font-size-20">Výsledek je: <span class="text-danger">'.$x.'</span></div>';
        ?>

        <a href="index.html" class="btn btn-secondary btn-block">Zpět</a>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
