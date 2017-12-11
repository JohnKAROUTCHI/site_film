<?php require '../header.php'; ?>
    <?php require '../film/menu_movie.php'; ?>
      <section id="detail">
        <h1>
          <?php
          $bdd = new PDO('mysql:host=localhost;dbname=site_film;charset=utf8', 'root', '');
          $q = $bdd->query('SELECT firstname, lastname FROM person WHERE id=1');
          $nomReal = $q->fetch(PDO::FETCH_ASSOC);

            echo $nomReal['firstname'].' '.$nomReal['lastname'];

          ?>
          <!-- GEORGE LUCAS -->
        </h1>
        <img src="../img_staff/george_lucas.jpg" alt="George Lucas">
        <span class="titre_detail">Nationalité</span> Américain<br>
        <span class="titre_detail">Naissance</span>
        <time datetime="1944-05-14">14 mai 1944</time> (Modesto, Californie - Etats-Unis)<br>
        <span class="titre_detail">Age</span> 73 ans
      </section>
      <section id="bio">
        <h2>BIOGRAPHIE</h2>
        <p>
          Elevé dans un ranch de Modesto en Californie, George Lucas se destine
          initialement à une carrière de pilote automobile. Après un terrible
          accident, il change d'orientation (mais conservera son goût pour les
          voitures, comme en témoigne son American Graffiti) et entre à
          l'université de Californie du Sud (USC), où il étudie le cinéma, ainsi
          que les contes, légendes et mythologies. Passionné par le montage et
          le documentaire, le jeune cinéaste impressionne en réalisant THX-1138 :
          4EB (Electronic Labyrinth), un court métrage de science-fiction qu'il
          adapte en long métrage en 1970. Produit par Francis Ford Coppola -que
          Lucas avait rencontré en tournant le making-of de sa Vallée du bonheur
          (1968)- THX 1138 ne rencontre malheureusement pas le succès escompté.<br>

          Trois ans plus tard, George Lucas délaisse la SF pour tourner American
          Graffiti, comédie dramatique et nostalgique portée par de jeunes Ron
          Howard, Richard Dreyfuss et Harrison Ford. Les droits de Flash Gordon
          lui échappant, il planche parallèlement sur une saga intergalactique
          mêlant quête initiatique, mondes merveilleux, mythologie et combats
          spatiaux, véritable hommage aux sérials de son enfance composé à
          l'origine de neuf épisodes : ce sera Star wars, ou le destin d'Anakin
          Skywalker et de son fils Luke au sein d'une galaxie déchirée par la
          guerre civile. Aucun studio ne semble toutefois prêt à s'investir dans
          le projet, et seule la Twentieth Century Fox, encouragée par le succès
          d'American Graffiti et ses cinq nominations aux Oscars, accepte de
          mettre à la disposition du metteur en scène un solide budget de 8
          millions de dollars.<br>

          Lancé dans un véritable tournage marathon entre la Tunisie et
          l'Angleterre, George Lucas doit alors faire face aux doutes d'une
          équipe peu convaincue par ce qu'elle considère comme un "film pour
          enfants", et à la pression d'un studio inquiété par les dépassements
          de budget et les délais non tenus. Lucas et les techniciens
          d'Industrial Light & Magic (ILM, sa société d'effets visuels fondée en
          1975 pour le film) travaillent alors jour et nuit pour terminer un
          film qui ne semble pas convaincre les producteurs de la Fox, persuadés
          que le film sera un échec. Le 25 mai 1977, La Guerre des étoiles sort
          sur quelques écrans américains. C'est un raz-de-marée sans précédent,
          et le film, véritable révolution technologique, devient en moins d'un
          an le plus gros succès de tous les temps et modifie profondément le
          monde du cinéma. Devançant le phénomène, George Lucas rachète les
          droits des suites à la Fox, ainsi que ceux des produits dérivés,
          créant un véritable empire via sa société Lucasfilm ltd.<br>

          Laissé très fatigué par le tournage de Star wars : Episode IV - Un
          nouvel espoir, George Lucas confie les rennes de Star wars : Episode
          V - L'Empire contre-attaque (1980) à Irvin Kershner, puis du Star
          wars : Episode VI - Le Retour du Jedi (1983) à Richard Marquand, mais
          reste néanmoins le seule et unique maître à bord du vaisseau Star Wars.
          Il devient par ailleurs l'un des producteurs majeurs d'Hollywood, et
          met en chantier la trilogie Indiana Jones, réalisée par son complice
          Steven Spielberg. Très intéressé par la technologie, George Lucas
          oeuvre parallèlement sur de nombreuses innovations majeures de
          l'industrie cinématographique via ILM, comme le son THX, les caméras
          assistées par ordinateur et l'utilisation des images de synthèses.<br>

          En 1994, convaincu par les dinosaures de Jurassic Park, Lucas décide
          de se repencher sur l'univers Star wars et de conter les trois
          épisodes précédant Star wars : Episode IV - Un nouvel espoir. En 1997,
          vingt-deux ans après son dernier film (!), il réalise Star wars :
          Episode I - La Menace fantôme (1999), suivie en 2002 par Star wars :
          Episode II - L'Attaque des clones et en 2005 par Star wars : Episode
          III - La Revanche des Sith. Par ailleurs, et souvent au grand
          désespoir des fans, il continue de modifier sa saga selon sa vision,
          en proposant notamment une version DVD retouchée du Star wars :
          Episode VI - Le Retour du Jedi dans laquelle il incruste le comédien
          Hayden Christensen, héros de sa nouvelle trilogie.<br>

          Tout en travaillant sur le futur de Star wars à travers la série
          animée Star Wars : Clone wars et un projet de série télé live, George
          Lucas envisage, une fois La Revanche des Sith sortie, de revenir au
          cinéma expérimental de ses débuts.
        </p>
      </section>
      <section id="filmographie">
        <h2>FILMOGRAPHIE</h2>
        <ul>
          <li>De 1965 à 1968, George Lucas réalise neuf courts-métrages à l'école de cinéma : Look at Life, Herbie, Freiheit, 1:42.08, Electronic Labyrinth: THX 1138 4EB, The Emperor, Anyone Lived in a Pretty How Town, 6-18-67 et Filmmaker.</li>
          <li>1971 : THX 1138 produit par Francis Ford Coppola</li>
          <li>1973 : American Graffiti</li>
          <li>1977 : La Guerre des étoiles (Star Wars, rebaptisé par la suite Star Wars: Episode IV – A New Hope)</li>
          <li>1999 : Star Wars, épisode I : La Menace fantôme (Star Wars: Episode I – The Phantom Menace)</li>
          <li>2002 : Star Wars, épisode II : L'Attaque des clones (Star Wars: Episode II – Attack of the Clones)</li>
          <li>2005 : Star Wars, épisode III : La Revanche des Sith (Star Wars: Episode III – Revenge of the Sith)</li>
        </ul>
      </section>
    <?php require 'footer.php'; ?>
