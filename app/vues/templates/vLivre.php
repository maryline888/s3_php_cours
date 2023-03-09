<section>
  <h1><?= $livre['livre_titre'] ?></h1>
  <div>
    <div class="info">
      <ul>
        <li>De <?= $livre['auteur_prenom']." ".$livre['auteur_nom'] ?></li>
        <li>Publié en <?= $livre['livre_annee'] ?></li>
      </ul>
      <hr>
      <p><?= $livre['livre_resume'] ?></p>
    </div>
  </div>  
</section>