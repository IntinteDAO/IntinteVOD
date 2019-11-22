<?php

function sym2name($symbol) {

if($symbol=="pl" || $symbol=="pol") { return "Polish"; }
else if($symbol=="nl" || $symbol=="dut") { return "Nederlands"; }
else if($symbol=="en" || $symbol=="eng") { return "English"; }
else if($symbol=="fr" || $symbol=="fre") { return "French"; }
else if($symbol=="de" || $symbol=="ger") { return "Germany"; }
else if($symbol=="it" || $symbol=="ita") { return "Italy"; }
else if($symbol=="pt" || $symbol=="por") { return "Portugal"; }
else if($symbol=="ru" || $symbol=="rus") { return "Russian"; }
else if($symbol=="es" || $symbol=="spa") { return "Spain"; }
else if($symbol=="vn" || $symbol=="vie") { return "Vietnam"; }
else { return $symbol; }

}

function add_subtitles($title, $file, $lang) {
$fullname = sym2name($lang);
return '<track kind="captions" label="'.$fullname.'" srclang="'.$lang.'" src="movies/'.$title.'/subtitles/'.$file.'">';
}