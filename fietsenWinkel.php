<?php
class Fietsenwinkel
{
    private $fietsen = [];
    private $brommers = [];

    function addFiets($fiets)
    {
        array_push($this->$fietsen,$fiets);
    }

    function getFietsen()
    {
        return $this->fietsen;
    }
}
?>