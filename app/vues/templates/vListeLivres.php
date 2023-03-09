<section>
  <h1><?= strtoupper($titre) ?></h1>
  <div>
    <?php foreach ($livres as $livre) : ?>
      <a href="livre?livre_id=<?= $livre['livre_id'] ?>">
        <article>
          <h3><?= $livre['livre_titre'] ?></h3>
          <p><?= $livre['auteur_prenom'] . " " . $livre['auteur_nom'] ?></p>
        </article>
      </a>
    <?php endforeach ?>
  </div>
</section>