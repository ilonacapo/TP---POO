<?php
include_once 'FormeGeometrique.php';
class CalculateurAire
{
    private $aireTotale;

    public function getAireTotale()
    {
        return $this->aireTotale;
    }
    public function calculerAireTotale(array $tabFormes)
    {
        $this->aireTotale = 0;
        foreach ($tabFormes as $forme) {
            $this->aireTotale += $forme->calculerAire();
        }
        return $this->aireTotale;
    }
}
