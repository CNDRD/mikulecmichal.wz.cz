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
          $r = $_POST['r'];
          $g = $_POST['g'];
          $b = $_POST['b'];

          $hex = sprintf("#%02x%02x%02x", $r, $g, $b);

          echo '<div class="mb-20 font-size-20">'.
            'RGB: '.
            '<span class="text-danger">'.$r.'</span> '.
            '<span class="text-success">'.$g.'</span> '.
            '<span class="text-primary">'.$b.'</span>'.
            '<br />'.
            '<span class="font-size-24">👇</span>'.
            '<br />'.
            'HEX: '.$hex.
            '<br />'.
            '<span class="font-size-24">👇</span>'.
            '<button href="" class="my-10 btn btn-lg btn-block" style="background-color:'.$hex.'"></button>'.
            '</div>';
        ?>
        <hr />
        <a href="index.html" class="btn btn-secondary btn-block mt-20">Zpět</a>

      </div><!-- Card -->
    </div><!-- Midel -->

  </body>
</html>
