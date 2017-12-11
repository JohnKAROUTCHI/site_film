<?php
function getBlock($file, $data = [])
{
    require $file;
}

getBlock('header.php');
getBlock('film/menu_movie.php');
getBlock('film/info_du_film.php');
getBlock('film/liste_d_images_legendees.php');
getBlock('film/staff_film.php');
getBlock('footer.php');
?>








<?php// require 'header.php'; ?>
<?php//include 'film/menu_movie.php';
     //include 'film/info_du_film.php';
     //include 'film/liste_d_images_legendees.php';
     //include 'film/staff_film.php'; ?>
<?php// require 'footer.php'; ?>
