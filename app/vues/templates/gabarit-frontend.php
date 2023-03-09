<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title><?= $titre ?></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.1">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="<?= Routeur::BASE_URI ?>">Livres</a></li>
      </ul>
    </nav>
  </header>
  <main>

    <?php require $templateMain ?>

  </main>
</body>

</html>