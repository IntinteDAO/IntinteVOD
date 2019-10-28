<?php
include("header.php");
include("navbar.php");
include("vendor/TheWorld/add_source.php");
include("vendor/TheWorld/license.php");
include("vendor/TheWorld/genres.php");

if(!empty($_GET['movie'])) {
$resolutions = file("vendor/TheWorld/supported_resolutions.txt");

if((file_exists("movies/".$_GET['movie'])) && (preg_match('/^[A-Za-z0-9 ]+$/', $_GET['movie']))) {
$json = json_decode(file("movies/".$_GET['movie']."/info.json")[0], TRUE);
$genre = "";

for($i=0; $i<=(count($json["genre"])-1); $i++) {
$genre = $genre." ".trim($genres[$json["genre"][$i]]);
}

echo '<div class="col-12"><video autoplay controls crossorigin playsinline poster="movies/'.$_GET['movie'].'/thumb.png" id="player">';

for($i=0; $i<=(count($resolutions)-1); $i++) {
    echo add_source($_GET['movie'], trim($resolutions[$i])); }

echo '</div></div>';

echo '<div class="row"><div class="col-12"><div class="card">
  <div class="card-header">
    '.$json["title"].'
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      Creator: '.$json["author"].'<br>
      License: '.full_license($json["license"]).'<br>
      Genre: '.$genre.'<br>
    </blockquote>
  </div>
</div>
</div>';

}



}

include("footer.php");

?>
<script>const player = new Plyr('#player');</script>