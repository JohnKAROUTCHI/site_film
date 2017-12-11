<ul>
  Films
  <?php
    $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
    $q1 = $bdd->query('SELECT title ,id FROM movie ORDER BY title');

    while ($films = $q1->fetch(PDO::FETCH_ASSOC))
    {
      echo '<li><a href="movie.php?id='.$films['id'].'">'.$films['title'].'</a></li>';
    };
  ?>
</ul>
<ul>
  Réalisateurs
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $q2 = $bdd->query('SELECT firstname, lastname FROM person INNER JOIN moviehasperson ON person.id=moviehasperson.idPerson WHERE role=1');
  if (!$q2) {
              echo "\nPDO::errorInfo():\n";
              print_r($bdd->errorInfo());
            }

  while ($realisateurs = $q2->fetch(PDO::FETCH_ASSOC))
  {
    echo '<li>'.$realisateurs['firstname'].' '.$realisateurs['lastname'].'</li>';
  };
  ?>
</ul>
<ul>
  Acteurs
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $q3 = $bdd->query('SELECT DISTINCT firstname, lastname FROM person p, moviehasperson m WHERE p.id=m.idPerson AND role=2 ORDER BY lastname');

  while ($acteurs = $q3->fetch(PDO::FETCH_ASSOC))
  {
    echo '<li>'.$acteurs['firstname'].' '.$acteurs['lastname'].'</li>';
  };
  ?>
</ul>
