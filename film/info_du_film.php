<?php
  ini_set('error_reporting', -1);
  ini_set('display_errors', 'on'); // 'on' en développement, 'off' en production
  ini_set('log_errors', 'on');
  ini_set('errors_log', '/path/to/file.log');
 ?>
<h1>
  <?php
    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
    $q = $bdd->query("SELECT title FROM movie WHERE id=$id");
    $title = $q->fetch(PDO::FETCH_ASSOC);
    echo $title['title'];
  ?>
  <!-- STAR WARS : EPISODE IV - UN NOUVEL ESPOIR (LA GUERRE DES ÉTOILES) -->
</h1>
<section id="info_film">
  Date de sortie :
  <time datetime="1977-05-25T02:01:00Z">
    <?php
      $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
      $q = $bdd->query('SELECT releaseDate FROM movie WHERE id=1');
      $releaseDate = $q->fetch(PDO::FETCH_ASSOC);
      echo $releaseDate['releaseDate'];
    ?>
    <!-- 25 mai 1977 -->
  </time><br>
  Distribution :<br>
                <?php
                  $id = $_GET['id'];

                  $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
                  $q = $bdd->query("SELECT firstname, lastname FROM person p INNER JOIN moviehasperson mp WHERE p.id=mp.idPerson AND idMovie=$id AND role=2");

                  while ($casting = $q->fetch(PDO::FETCH_ASSOC))
                  {
                    echo $casting['firstname'].' '.$casting['lastname'].'<br>';
                  };

                ?>
                 <!-- Mark Hamill, Harrison Ford, Carrie Fisher, Sir Alec
                 Guinness, Anthony Daniels, Kenny Baker, Peter Mayhew,
                 Peter Cushing... -->
                 <br>

                 <?php
                 $id = $_GET['id'];

                 $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
                 $q = $bdd->query("SELECT rating, ratingSpect FROM movie WHERE id=$id");
                 $rating = $q->fetch(PDO::FETCH_ASSOC);

                 ?>
  Note (sur 5) <span>Presse : <meter value="<?=$rating['rating'] * 10?>" min="0" max="50"></meter>
                <?php
                  echo $rating['rating'];
                ?>
                <!-- 4,5 -->
               </span>
               <span>Spectateur : <meter value="<?=$rating['ratingSpect'] * 10?>" min="0" max="50"></meter>
                 <?php
                   echo $rating['ratingSpect'];
                 ?>
               </span><br>
  <article id="synopsis">
    <h2>Synopsis : </h2>
                    <p>
                      <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
                        $q = $bdd->query('SELECT synopsis FROM movie WHERE id=1');
                        $synopsis = $q->fetch(PDO::FETCH_ASSOC);
                        echo $synopsis['synopsis'];
                      ?>
                      <!-- Il y a bien longtemps, dans une galaxie très lointaine...
                      La guerre civile fait rage entre l'Empire galactique et
                      l'Alliance rebelle. Capturée par les troupes de choc de
                      l'Empereur menées par le sombre et impitoyable Dark Vador,
                      la princesse Leia Organa dissimule les plans de l'Etoile
                      Noire, une station spatiale invulnérable, à son droïde
                      R2-D2 avec pour mission de les remettre au Jedi Obi-Wan
                      Kenobi. Accompagné de son fidèle compagnon, le droïde de
                      protocole C-3PO, R2-D2 s'échoue sur la planète Tatooine et
                      termine sa quête chez le jeune Luke Skywalker. Rêvant de
                      devenir pilote mais confiné aux travaux de la ferme, ce
                      dernier se lance à la recherche de ce mystérieux Obi-Wan
                      Kenobi, devenu ermite au coeur des montagnes désertiques
                      de Tatooine... -->
                    </p>
  </article>
</section><!-- info_film -->
