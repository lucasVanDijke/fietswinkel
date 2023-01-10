    <?php
        class Fiets
        {
            private $banden = 0; 
            private $merk = " ";
            private $kleur = " ";

            function __construct($banden, $merk, $kleur)
            {
                $this -> banden = $banden;
                $this -> merk = $merk;
                $this -> kleur = $kleur;
            }

            function getmerk()
            {
                return $this -> merk;
            }

        }
        class Brommer
        {
            private $model = "";
            private $uitvoering = "";
            private $kleur = "";
            private $windscherm = "";
            private $afbeelding = "";
            
            function __construct($model, $uitvoering, $kleur, $windscherm)
            {
                $this -> model = $model;
                $this -> uitvoering = $uitvoering;
                $this -> kleur = $kleur;
                $this -> windscherm = $windscherm;
            }
            function getmodel()
            {
                return $this -> model;
            }
            function getuitvoering()
            {
                return $this -> uitvoering;
            }
            function getkleur()
            {
                return $this -> kleur;
            }
            function getwindscherm()
            {
                return $this -> windscherm;
            }
            function setafbeelding($afbeelding)
            {
                $this -> afbeelding = $afbeelding;
            }
            function getafbeelding()
            {
                return $this -> afbeelding;
            }
        }
    ?>