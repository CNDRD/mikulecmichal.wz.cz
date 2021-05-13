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
      <div class="card shadow w-500 mw-full p-card text-center">

        <h2 class="card-title font-weight-light">Převod RGB na HEX přes PHP</h2>

        <form action="index.php" method="post">

          <!-- flexbox start -->
          <div class="d-flex flex-row justify-content-around align-items-center">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Red</h4>
              <input  type="number" name="r" class="form-control form-control-lg text-center" placeholder="0-255" required="required" min="0" max="255" />
            </div>

            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Green</h4>
              <input  type="number" name="g" class="form-control form-control-lg text-center" placeholder="0-255" required="required" min="0" max="255" />
            </div>

            <div class="alert alert-primary" role="alert">
              <h4 class="alert-heading">Blue</h4>
              <input  type="number" name="b" class="form-control form-control-lg text-center" placeholder="0-255" required="required" min="0" max="255" />
            </div>
          </div><!-- flexbox end -->
          <input class="btn btn-block mt-20" type="submit" value="Převod" />
        </form>

        <!-- flexbox start -->
        <div class="mt-20 d-flex flex-row justify-content-around align-items-center">
          <?php

          if($_POST){
            $arr = array($_POST['r'],$_POST['g'],$_POST['b']);
            $hex = '';

            for($i = 0; $i < 3; $i++){
              $hex .= trans(($arr[$i]/16) % 1000);
              $hex .= trans($arr[$i] % 16);
            }
            echo '<button class="btn btn-lg btn-block text-center">#'.$hex.'</button>';
            echo '<span class="font-size-24 mx-5">👉</span>';
            echo '<button href="" class="my-10 btn btn-lg btn-block" style="background-color:#'.$hex.'"></button>';
          }

          function trans($a){
            $monke = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
            return strval($monke[$a]);
          }

          ?>
        </div><!-- flexbox end -->

      </div><!-- Card -->
    </div><!-- Midel -->

    <style media="screen">

    </style>

  </body>
</html>
