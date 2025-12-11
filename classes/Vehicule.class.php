<?php 


// classes/Vehicule.class.php
abstract class Vehicule {
    // Propriétés
    private string $marque;
    private string $modele;

    // Constructeur
    /**
     * Construit l'objet Vehicule
     *
     * @param string $marque
     * @param string $modele
     */
    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    // Accesseurs (setter,getters)
    public function getMarque(): string {
        return $this->marque;
    }

    public function getModele(): string {
        return $this->modele;
    }

    // Méthodes abstraites
    /**
     * Démarre le véhicule
     *
     * @return bool true si démarrage réussi, false sinon
     */
    abstract public function demarrer(): bool;

    /**
     * Arrête le véhicule
     */
    abstract public function arreter(): void;

    /**
     * Fait le plein du véhicule
     *
     * @param float $volumeLitre
     */
    abstract public function faireLePlein(float $volumeLitre): void;

    /**
     * Retourne une représentation textuelle du véhicule
     */
    public function __toString(): string {
        return get_class($this) . " " . $this->marque . " " . $this->modele;
    }

}

?>