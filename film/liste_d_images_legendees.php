<section id="img_film">
  <h2>Photos</h2>
  <?php
    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
    $q = $bdd->query("SELECT path, legend FROM picture p INNER JOIN moviehaspicture mp WHERE p.id=mp.idPicture AND role=2 AND idMovie=$id");
    while ($picture = $q->fetch(PDO::FETCH_ASSOC))
    {
      echo '<img src="'.$picture['path'].'"/><br>'.$picture['legend'].'<br>';
    };
  ?>
  <!-- <figure>
    <img src="img_film/leia_r2d2.jpg" alt="Leïa et R2-D2" id="leiar2">
    <figcaption>Leïa confiant les plans de l'étoile de la mort à R2-D2.</figcaption>
  </figure>
  <figure>
    <img src="img_film/luke_cuve_bacta.jpg" alt="Luke dans une cuve de Bacta" id="lukebacta">
    <figcaption>Luke recevant des soins, plongé dans une cuve de bacta.</figcaption>
  </figure>
  <figure>
    <img src="img_film/vador_tantive_iv.jpg" alt="Dark Vador et des Stormtroopers" id="vadortrooper">
    <figcaption>Dark Vador arrivant dans le Tantive IV pour récupérer les plans volés de l'étoile de la mort.</figcaption>
  </figure>
  <figure>
    <img src="img_film/cockpit_faucon.jpg" alt="Han, Obi-Wan, Luke, Chewbacca" id="cockpit">
    <figcaption>Han Solo, Obi-Wan Kenobi, Luke Skywalker, et Chewbacca au commandes du Faucon Millenium.</figcaption>
  </figure>
  <figure>
    <img src="img_film/x-wing_attack.jpg" alt="Escadron de X-Wing" id="xwing">
    <figcaption>Escadron de X-Wing se lançant à l'assaut de l'étoile de la mort.</figcaption>
  </figure> -->
</section><!-- img_film -->
