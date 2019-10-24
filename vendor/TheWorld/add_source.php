<?php

function add_source($title, $res) {

if(file_exists('movies/'.$title.'/'.$res.'p.webm')) {
return '<source src="movies/'.$title.'/'.$res.'p.webm" type="video/webm" size="'.$res.'">';
} else {
return '';
}


}

?>