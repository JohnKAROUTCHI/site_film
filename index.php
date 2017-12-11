<?php
function getBlock($file, $data = [])
{
    require $file;
}

getBlock('header.php');
getBlock('liste_index.php');
getBlock('footer.php');
?>
