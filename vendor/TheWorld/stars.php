<?php

function stars_result($stars) {
$return = "";

for($i=1; $i<=$stars; $i++) {
$return = $return.'&#9733; ';
}

for($i=1; $i<=5-$stars; $i++) {
$return = $return.'&#9734; ';
}

return $return;
}


?>