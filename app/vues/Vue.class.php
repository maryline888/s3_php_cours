<?php

class Vue {


  /**
   * Constructeur qui génère et affiche la page html complète associée à la vue
   * --------------------------------------------------------------------------
   * @param string $vue,     nom du fichier de la vue sans le suffixe php 
   * @param array $donnees,  variables à insérer dans la page
   * @param string $gabarit, nom du fichier gabarit de la page html sans le suffixe php, dans lequel est inséré la vue 
   */
  public function __construct($vue, $donnees = [], $gabarit = 'gabarit-frontend') {

    // crée des variables à partir des clés textes du tableau associatif $donnees
    // ce qui permet de générer les variables dont les noms sont utilisés dans les templates $gabarit et $vue
    extract($donnees);

    // variable avec le chemin du fichier de la vue, qui sera exploitée dans le script du gabarit
    $templateMain = "app/vues/templates/$vue.php";
    
    // efface le tampon (buffer) de sortie sans l'envoyer au navigateur
    // utile par exemple lorsqu'une vue est interrompue pour afficher une erreur avec la vue vErreur
    ob_clean();
    // démarre l'écriture du flux HTML dans le tampon de sortie
    // le contenu de ce tampon est envoyé automatiquement au navigateur lorsque le script se termine
    ob_start();

    // ajouter le caractère @ devant l'instruction require si vous ne voulez pas afficher les warning PHP
    // https://www.php.net/manual/en/language.operators.errorcontrol.php
    require "app/vues/templates/$gabarit.php";
  }
}