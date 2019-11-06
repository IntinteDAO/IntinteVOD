<?php

function full_license($license) {

if($license=="CC BY 4.0") { return '<a target="_blank" href="https://creativecommons.org/licenses/by/4.0">Attribution 4.0 Unported (CC BY 4.0)</a>'; }
if($license=="CC BY 3.0") { return '<a target="_blank" href="https://creativecommons.org/licenses/by/3.0">Attribution 3.0 Unported (CC BY 3.0)</a>'; }
if($license=="CC BY 2.5") { return '<a target="_blank" href="https://creativecommons.org/licenses/by/2.5">Attribution 2.5 Unported (CC BY 2.5)</a>'; }
if($license=="CC BY-NC 3.0") { return '<a target="_blank" href="https://creativecommons.org/licenses/by-nc/3.0">Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)</a>'; }

return $license;
}