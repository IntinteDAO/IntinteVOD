<?php
include("header.php");
include("navbar.php");
include("vendor/TheWorld/add_source.php");

if(!empty($_GET['movie'])) {
$resolutions = file("vendor/TheWorld/supported_resolutions.txt");

if((file_exists("movies/".$_GET['movie'])) && (preg_match('/^[A-Za-z0-9 ]+$/', $_GET['movie']))) {

echo '<video autoplay controls crossorigin playsinline poster="movies/'.$_GET['movie'].'/thumb.png" id="player">';

for($i=0; $i<=(count($resolutions)-1); $i++) {
    echo add_source($_GET['movie'], trim($resolutions[$i])); }

}

}

include("footer.php");

?>
<script>const player = new Plyr('#player');</script>