    <?php
    include("Fiets.php");
    // $fiets = new Fiets(2, "gazelle", "zwart");
    // $merk = $fiets -> getmerk();
    // echo $merk, "<br>";

    $brommer = new Brommer("Doohan Gelato", "snorfiets", "blauw", "geen windscherm");

    $windscherm = $brommer -> getwindscherm();
    echo $windscherm, "<br>";

    $model = $brommer -> getmodel();
    echo $model, "<br>";

    $uitvoering = $brommer -> getuitvoering();
    echo $uitvoering, "<br>";

    $brommer -> setafbeelding("oranje.png");
    echo "<img src='".$brommer->getafbeelding()."' alt=oranje brommer'>";
    ?>