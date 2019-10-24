<?php

include("header.php");
include("navbar.php");
include("vendor/TheWorld/stars.php");

$movies = array_values(array_diff(scandir("movies"), array('.', '..')));

for($i=0; $i<=(count($movies)-1); $i++) {

if (file_exists("movies/$movies[$i]/description.txt")) { $description = file("movies/$movies[$i]/description.txt")[0]; } else { $description=""; }
if (file_exists("movies/$movies[$i]/thumb.png")) { $thumb = "movies/$movies[$i]/thumb.png"; } else { $thumb="http://placehold.it/700x400"; }
if (file_exists("movies/$movies[$i]/stars.txt")) { $stars = trim(file("movies/$movies[$i]/stars.txt")[0]); } else { $stars=0; }

echo '
<div class="col-lg-4">
    <div class="card h-100">
        <a href="player.php?movie='.$movies[$i].'"><img class="card-img-top" src="'.$thumb.'" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                  <a href="player.php?movie='.$movies[$i].'">'.$movies[$i].'</a>
                </h4>
                  <p class="card-text"><div class="text-justify">'.$description.'</div></p>
            </div>
                <div class="card-footer">
                  <small class="text-muted">'.trim(stars_result($stars)).'</small>
                </div>
    </div>
</div>';
}

include("footer.php");

?>