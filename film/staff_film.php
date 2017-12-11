<section id="staff">
  <h2>Réalisateur</h2>
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $q = $bdd->query('SELECT path, legend FROM picture WHERE id=7');
  $picture = $q->fetch(PDO::FETCH_ASSOC);

  echo '<img src="'.$picture['path'].'"/><br>'.$picture['legend'].'<br>';
  ?>

  <!-- <figure>
    <a href="realisateur.php"><img src="img_staff/george_lucas.jpg" alt="George Lucas">
    <figcaption>George Lucas</figcaption></a>
  </figure> -->
  <h2>Distribution</h2>
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $q = $bdd->query('SELECT path, legend FROM picture WHERE id>=6 AND id!=7');
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
