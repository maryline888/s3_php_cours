<?php

class Routeur
{
    protected $oRequetesSQL;
    const BASE_URI = '/11-MVC-exemple-v2-singleton-avec-heritage-PDO/';


    private $routes = [
        //uri , classe, methode
        ['',      'Frontend', 'listerLivres'],
        ['livre', 'Frontend', 'voirLivre'],
        ['admin', 'Admin',    'gerer']
    ];

    public function __construct()
    {

        try {

            $uri = $_SERVER['REQUEST_URI'];
            foreach ($this->routes as $route) {
                $routeUri = $route[0];
                $routeClasse = $route[1];
                $routeMethode = $route[2];
            }
            if (strpos($uri, '?')) $uri  = strstr($uri, '?', true);
        } catch (Error $e) {
            new Vue('vErreur', ['e' => $e], 'gabarit-erreur');
        }
    }
}
