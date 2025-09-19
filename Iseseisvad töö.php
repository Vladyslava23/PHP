<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teksti ja tingimused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Teksti ja tingimused</h1>

      <h2>LIHTNE TEKST</h2>
    <?php
        $autor = "Juhan Liiv";
        $teos = "Ääremärkused";

        echo "$autor, $teos";
    ?>
    
    <h2>OHMI SEADUS </h2>
    <?php
    function LeiaKaitse($voimsus, $pinge = 220) {
        $vool = $voimsus /$pinge;
        return ceil($vool);
    }
    echo LeiaKaitse(3000);
    ?>
    <h2>TÄRNID  </h2>
    <?php
    for ($i = 1; $i <= 100; $i++){
        echo "*";
        if ($i % 10 == 0 ) {
            echo "<br>";
        }
    }
    ?>


    <h2>NALJAKAD LAUSED  </h2>
    <?php
    $alus = array("Jüri", "Mari", "Uku");
    $oeldis = array("armastab", "viskab", "tõmbab");
    $sihitis = array("mind", "sind", "teda");
    echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>