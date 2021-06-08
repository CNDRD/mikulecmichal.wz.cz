<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Maturita</title>

    <link rel="stylesheet" href="/res/css.css" />

    <style media="screen">
      html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
      }
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
      }
      .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }
      .flex input{
        width: 30%;
      }
      #frm {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      #sbmt{
        margin-top: 4%;
      }
      .vysledek{
        margin-top: 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      #vysledek{
        width: 100%;
        height: 69px;
        border: 1px solid black;
      }
    </style>

  </head>
  <body>

    <!-- Back Button -->
    <a href="/" class='btn-back'>🔙</a>

    <div>

      <form id="frm" class="" action="index.php" method="post">

        <div class="flex">
          <input type="number" name="r" placeholder="Červená" min="0" max="255" required />
          <input type="number" name="g" placeholder="Zelená" min="0" max="255" required />
          <input type="number" name="b" placeholder="Modrá" min="0" max="255" required />
        </div>

        <input id="sbmt" type="submit" value="Zobrazit" />


          <?php
            if ($_POST){

              $r = $_POST["r"];
              $g = $_POST["g"];
              $b = $_POST["b"];

              echo "
              <div class='vysledek'>
                <span>Červená: " . $r . " </span>
                <span>Zelená: " . $g . " </span>
                <span>Modrá: " . $b . "</span>
              </div>
              <div id='vysledek' title='Výsledná barva' style='background-color: rgb(".$r.", ".$g.", ".$b.")'></div>";

            }
          ?>


      </form>

    </div>

  </body>
</html>
