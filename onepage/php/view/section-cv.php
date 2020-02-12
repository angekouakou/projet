<section id="section1">
     
<div class="contain1">


</div>

</section>

<section id="section2">
    

<div class="contain2">


</div>
</section>

<section id="section3">
    <h2>MES COMPETENCES </h2>


<div class="container1">

<?php

$tableau=["assets/img/html.png",
          "assets/img/css.png",
          "assets/img/php.png"
    ];

foreach ( $tableau as $img)
 {

 echo
 <<<CODEHTML
 <img src="$img" alt="">
 CODEHTML;
}

?>

</div>




</section>

<section id="section4">

<h2> MES LOISIRS </h2>

<div class="container2">

<?php
$tableau1=["assets/img/football.jpeg",
           "assets/img/voyage.jpeg",
           "assets/img/internet.jpeg"
          ];

for ( $i=0;  $i < count($tableau1);  $i= $i+1 )
{
echo   
    <<<CODEHTM
    <img src="$tableau1[$i]" alt="">

    CODEHTM;
}

?>

</div>
</section>