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
      <div class="card shadow w-400 mw-full p-card">

        <h2 class="card-title font-weight-light text-center">Převod RČ na datum PHP</h2>

        <form action="index.php" method="post">

          <label for="rc" class="required">Rodné číslo</label>
          <input type="text" class="form-control form-control-lg text-center" name='rc' id="rc" placeholder="000000/0000" required="required">

          <input class="btn btn-block btn-success mt-20" type="submit" value="Převod" />

          <?php

            if($_POST){
              $a = $_POST['rc'];

              if(strlen($a) >= 12 || strlen($a) <= 9){
                pe("Neuplné rodné číslo");
              } else {
                $a = str_split($a,2);

                $r = getYear($a[0]);
                $m = getMonth($a[1]);
                $d = (int)$a[2];

                pe($d . '. ' . $m . ' ' . $r);
              }
            }

            function getYear($y){
              if($y > date('Y') - 2000){ return '19' . $y; }
              else { return '20' . $y; }
            }

            function getMonth($m){
              $m = (int)$m;
              if($m >= 50){ $m -= 50; } // -50 u žen
              if($m >= 20){ $m -= 20; } // -20 u alt. čísel
              $pepa = array('leden','únor','březen','duben','květen','červen','červenec','srpen','září','říjen','listopad','prosinec');
              return $pepa[$m-1];
            }

            function pe($x){
              // pe -> Pretty Echo
              echo "<p class='mb-0 font-weight-light font-size-24 text-center'>" . $x . "</p>";
            }

          ?>

        </form>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
