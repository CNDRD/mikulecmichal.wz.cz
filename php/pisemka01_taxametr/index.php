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
      <div class="card shadow w-400 mw-full p-card text-center">

        <h2 class="card-title font-weight-light">Taxametr</h2>

        <form action="index.php" method="post">
          <input class="form-control btn-block font-weight-light" type="number" name="km" step="1" min='0' max='999' placeholder="Ujetá vzdálenost" required="required" />

          <label for="select-1">Vyberte počet zavazadel</label>
          <select class="form-control" name="zavazadla" id="select-1">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="vice">Více</option>
          </select>

          <input class="btn btn-success btn-block mt-20" type="submit" value="Vypočítat" />

          <!--
            <20 - 45
            20;50 - 40
            50;100 - 35
            >=100 - 30

            0z - 0kc
            1z - 100kc
            2z - 200kc
            3z - 500kc
          -->

          <?php

          if ($_POST){
            $km = $_POST['km'];
            $zv = $_POST['zavazadla'];

            if ($km < 20){
              $cena = $km * 45;
            } else if ($km >= 20 && $km < 50){
              $cena = $km * 40;
            } else if ($km >= 50 && $km < 100){
              $cena = $km * 35;
            } else {
              $cena = $km * 30;
            }

            switch ($zv) {
              case '0':
                $cena = $cena; break;
              case '1':
                $cena += 100; break;
              case '2':
                $cena += 200; break;
              case 'vice':
                $cena += 500; break;
            }
            echo $cena;
          }

          ?>

        </form>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
