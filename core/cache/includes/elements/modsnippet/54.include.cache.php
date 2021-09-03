<?php
$tags = array('&lt;', '&gt;', '&quot;');
$symb = array('<', '>', '"');

$output = str_replace($tags, $symb, $input);

return $output;
return;
