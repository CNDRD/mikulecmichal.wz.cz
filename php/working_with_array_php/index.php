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

        <h2 class="card-title font-weight-light">Bubbel Sort</h2>

        <form action="index.php" method="post">
          <input class="form-control form-control-lg btn-block text-center font-weight-light" type="number" name="a" step="1" placeholder="Zadejte první číslo" required />
          <input class="form-control form-control-lg btn-block text-center font-weight-light" type="number" name="b" step="1" placeholder="Zadejte druhé číslo" required />
          <input class="form-control form-control-lg btn-block text-center font-weight-light" type="number" name="c" step="1" placeholder="Zadejte třetí číslo" required />
          <input class="btn btn-success btn-block mt-20" type="submit" value="Sort" />
        </form>

        <?php
          if ($_POST) {
            $arr = array($_POST['a'], $_POST['b'], $_POST['c']);
            for($i = 0; $i < count($arr); $i++){
              for($j = 0; $j < count($arr)-1; $j++){
                if($arr[$j] > $arr[$j+1]){
                  $p = $arr[$j];
                  $arr[$j] = $arr[$j+1];
                  $arr[$j+1] = $p;
                }
              }
            }
            echo '<button href="" class="mt-10 btn btn-lg btn-block">';
            foreach ($arr as $sorted){
              echo $sorted.' ';
            }
            echo '</button>';
          }
        ?>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
