<?php
  ini_set('error_reporting', -1);
  ini_set('display_errors', 'on'); // 'on' en développement, 'off' en production
  ini_set('log_errors', 'on');
  ini_set('errors_log', '/path/to/file.log');
 ?>
<section id="staff">
  <h2>Réalisateur</h2>
  <?php
  $id = $_GET['id'];

  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $query = "
  SELECT path, legend
  FROM movie m
    INNER JOIN moviehasperson mp ON m.id=mp.idMovie AND role=1
    INNER JOIN personhaspicture pp ON pp.idPerson=mp.idPerson
    INNER JOIN picture p ON  pp.idPicture=p.id
  WHERE idMovie=$id";
  $q = $bdd->query($query);
  if (!$q) {
    print_r($bdd->errorInfo());
    echo $query;
    die;
  }
  $picture = $q->fetch(PDO::FETCH_ASSOC);

  echo '<img src="'.$picture['path'].'"/><br>'.$picture['legend'].'<br>';
  ?>

  <!-- <figure>
    <a href="realisateur.php"><img src="img_staff/george_lucas.jpg" alt="George Lucas">
    <figcaption>George Lucas</figcaption></a>
  </figure> -->
  <h2>Distribution</h2>
  <?php
  $id = $_GET['id'];

  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $query = "
  SELECT path, legend
  FROM movie m
    INNER JOIN moviehasperson mp ON m.id=mp.idMovie AND role=2
    INNER JOIN personhaspicture pp ON pp.idPerson=mp.idPerson
    INNER JOIN picture p ON  pp.idPicture=p.id
  WHERE idMovie=$id";
  $q = $bdd->query($query);
  if (!$q) {
    print_r($bdd->errorInfo());
    echo $query;
    die;
  }
  while ($picture = $q->fetch(PDO::FETCH_ASSOC))
  {
    echo '<img src="'.$picture['path'].'"/><br>'.$picture['legend'].'<br>';
  };
  ?>

  <!-- <figure>
    <a href="/site_film/acteurs/mark_hamill.php"><img src="img_staff/mark_hamill.jpg" alt="Mark Hamill">
    <figcaption>Mark Hamill</figcaption></a>
  </figure>
  <figure>
    <a href="/site_film/acteurs/harrison_ford.php"><img src="img_staff/harrison_ford.jpg" alt="Harrison Ford">
    <figcaption>Harrison Ford</figcaption></a>
  </figure>
  <figure>
    <a href="/site_film/acteurs/carrie_fisher.php"><img src="img_staff/carrie_fisher.jpg" alt="Carrie Fisher">
    <figcaption>Carrie Fisher</figcaption></a>
  </figure>
  <figure>
    <a href="/site_film/acteurs/sir_alec_guinness.php"><img src="img_staff/sir_alec_guinness.jpg" alt="Sir Alec Guinness">
    <figcaption>Sir Alec Guinness</figcaption></a>
  </figure> -->
</section>
