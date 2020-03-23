<?php 

function nombrePaires($tabNombre){


foreach ($tabNombre as $indice => $nombre) {
    
    if ($nombre%2==1) 
    {
        echo " $nombre.le nombre est impaire  ";
    } 
    else  {
        echo " $nombre.le nombre est paire";
    }
  
}
}
$resultat = nombrePaires([2,4,5,1]);
?>