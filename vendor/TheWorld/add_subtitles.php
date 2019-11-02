<?php

function add_subtitles($title, $file, $lang) {
// Auto-label system needed

return '<track kind="captions" label="" srclang="'.$lang.'" src="movies/'.$title.'/subtitles/'.$file.'">';
}