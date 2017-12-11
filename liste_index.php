<ul>
  Films
  <?php
    $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
    $q1 = $bdd->query('SELECT title FROM movie ORDER BY title');

    while ($films = $q1->fetch(PDO::FETCH_ASSOC))
    {
      echo '<li>'.$films['title'].'</li>';
    };
  ?>
</ul>
<ul>
  Réalisateurs
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
  $q2 = $bdd->query('SELECT firstname, lastname FROM person, moviehasperson ON person.id=moviehasperson.idPerson WHERE role=1');

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
  $q3 = $bdd->query('SELECT firstname, lastname FROM person p,  moviehasperson m ON p.id=m.idPerson WHERE role=2 ORDER BY lastname');

  while ($acteurs = $q3->fetch(PDO::FETCH_ASSOC))
  {
    echo '<li>'.$acteurs['firstname'].' '.$acteurs['lastname'].'</li>';
  };
  ?>
</ul>
