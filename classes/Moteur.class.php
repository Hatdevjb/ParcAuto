<?php

// classes/Moteur.class.php
class Moteur {
    // Propriétés
    private float $volumeReservoir;  // Litres actuels dans le réservoir
    private float $volumeTotal;      // Total de litres reçus au fil des pleins
    private bool $demarre;           // Le moteur tourne ou non

    // Constructeur
    /**
     * Construit l'objet Moteur
     *
     * @param float $volumeInitial
     */
    public function __construct(float $volumeInitial = 0.0) {
        $this->volumeReservoir = $volumeInitial;
        $this->volumeTotal = $volumeInitial;
        $this->demarre = false;
    }

    // Accesseurs (getters)
    /**
     * Retourne le volume actuel du réservoir
     *
     * @return float
     */
    public function getVolumeReservoir(): float {
        return $this->volumeReservoir;
    }

    /**
     * Retourne le volume total reçu
     *
     * @return float
     */
    public function getVolumeTotal(): float {
        return $this->volumeTotal;
    }

    /**
     * Retourne l'état du moteur
     *
     * @return bool
     */
    public function getDemarre(): bool {
        return $this->demarre;
    }

}
    
    
?>