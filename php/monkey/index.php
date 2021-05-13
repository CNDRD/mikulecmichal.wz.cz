<html>
  <head>
    <meta charset="utf-8">
    <title>Monkey</title>

    <style media="screen">
      html{font-size: 4rem;}
      form{text-align: center;}
      input{text-align: center;}
      .middle{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
    </style>

  </head>
  <body>
    <div class="middle">

      <form class="" action="index.php" method="post">
        <input type="text" name="rc" placeholder="000000" required>
        <br>
        <input type="submit" value="Převést">
      </form>

      <?php
      if($_POST){

        $rc = $_POST['rc'];
        //$rc = "010323"
        $rc = str_split($rc, 2);
        //$rc = ['01','03','23']

        if($rc[0] > Date('Y') - 2000){
          $rok = "19" . $rc[0];
        } else {
          $rok = "20" . $rc[0];
        }


        $m = (int)$rc[1];
        if($m >= 50){ $m -= 50; }
        if($m >= 20){ $m -= 20; }
        $mesice = array('leden','únor','březen','duben','květen','červen','červenec','srpen','září','říjen','listopad','prosinec');
        $mesic = $mesice[$m - 1];

        $den = (int)$rc[2];

        echo $den . '. ' . $mesic . ' ' . $rok;

      }
      ?>

    </div>
  </body>
</html>
