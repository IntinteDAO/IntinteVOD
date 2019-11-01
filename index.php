<?php

include("header.php");
include("navbar.php");
include("vendor/TheWorld/stars.php");

$movies = array_values(array_diff(scandir("movies"), array('.', '..')));

for($i=0; $i<=(count($movies)-1); $i++) {


if (file_exists("movies/$movies[$i]/thumb.png")) { $thumb = "movies/$movies[$i]/thumb.png"; } else { $thumb="http://placehold.it/700x400"; }
if (file_exists("movies/$movies[$i]/info.json")) { $json = json_decode(file("movies/$movies[$i]/info.json")[0], TRUE);

$title = $json["title"];
$description = $json["description"];
$stars = $json["rating"];
$hidden = $json["hidden"];
} else { $title = $movies[$i]; $description=""; $stars=0; $hidden=0;}

if($hidden==0) {
echo '
<div class="col-lg-4 showmovie">
    <div class="card h-100">
        <a href="player.php?movie='.$movies[$i].'"><img class="card-img-top" src="'.$thumb.'" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                  <a href="player.php?movie='.$movies[$i].'">'.$title.'</a>
                </h4>
                  <p class="card-text"><div class="text-justify">'.$description.'</div></p>
            </div>
                <div class="card-footer">
                  <small class="text-muted">'.trim(stars_result($stars)).'</small>
                </div>
    </div>
</div>'; }

}

include("footer.php");

?>