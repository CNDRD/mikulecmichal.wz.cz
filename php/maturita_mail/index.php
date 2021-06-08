<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Email formulář</title>
  </head>
  <body style="width:100%">
    <div style="width:100%">
      <center>

        <!-- Vertikální centrování na Skalku -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--
        Veškerý `style="..."` (a tadyto 👆 brekeke) je jenom proto, aby byla tabulka na střed
        a k Maturitě není potřeba
        -->

        <!-- `action="index.php"` a PHP kód může být v tomhle souboru a nemusí být extra-->
        <form style="width:33%" action="index.php" method="post">
          <input style="width:40%" type="text" name="predmet" placeholder="Předmět" />
          <input style="width:40%" type="email" name="komu" placeholder="Komu" />
          <textarea name="text" rows="8" cols="80"></textarea>
          <input type="submit" value="Odeslat" />
        </form>

        <?php

          /*
          'if ($_POST)' tam musí být, aby to jelo až po odeslání formuláře
          Jinak bude házet chyby že chybí hodnoty
          */
          if ($_POST){
            mail($_POST['komu'], $_POST['predmet'], $_POST['text']);
          }

        ?>

      </center>
    </div>
  </body>
</html>
