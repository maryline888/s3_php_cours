<?php
class Frontend extends Routeur
{
    private $livre_id;
    /**
     * 
     */
    public function __construct()
    {
        $this->oRequetesSQL = new RequetesSQL();
        $this->livre_id = $_GET['livre_id'] ?? null;
    }

    /**
     * 
     */

    public function listerLivres()
    {
        $livres = $this->oRequetesSQL->getLivres();
        new Vue(
            'vListeLivres',
            array(
                'titre'  => 'Livres',
                'livres' => $livres
            ),
            'gabarit-frontend'
        );
    }



    public function voirLivre()
    {
        $livre = $this->oRequetesSQL->getLivre($this->livre_id);
        if (!$livre) throw new Exception("Livre inexistant.");

        new Vue(
            'vLivre',
            array(
                'titre'  => $livre['livre_titre'],
                'livre' => $livre
            ),
            'gabarit-frontend'
        );
    }
}
