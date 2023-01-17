<?php
    include("Fiets.php");
    include("fietsenWinkel.php");

    $fietsenWinkel = new FietsenWinkel();
    $fiets = new Fiets(2, "gazelle", "zwart");
    $fietsenWinkel->addFiets($fiets);
    $_SESSION["fiets"] = $fiets;
    echo '<h1>'.$fiets->getMerk().'</h1>';
    $fiets->setImage("oranje.png");
    echo "<br />";
    echo "<img src='".$fiets->setImage()."' alt='oranje fiets'>";

    $merk = $fiets -> getmerk();
    echo $merk, "<br>";

    $fiets = new Fiets(2, "leo", "zwart");
    $fietsenWinkel->addFiets($fiets);
    $fietsen = $fietsenWinkel->getFietsen();

    $brommer = new Brommer("Doohan Gelato", "snorfiets", "blauw", "geen windscherm");

    $windscherm = $brommer -> getwindscherm();
    echo $windscherm, "<br>";

    $model = $brommer -> getmodel();
    echo $model, "<br>";

    $uitvoering = $brommer -> getuitvoering();
    echo $uitvoering, "<br>";

    $brommer -> setafbeelding("oranje.png");
    echo "<img src='".$brommer->getafbeelding()."' alt=oranje brommer'>";


    foreach ($fietsen as $bike)
    {
        echo $bike->getMerk();
    }
?>