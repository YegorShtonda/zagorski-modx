<?php  return '$arr = json_decode($input, true);
$html = "";

$numItems = count($arr);
$i = 0;
foreach ($arr as $value) {
    $html .= \'image&&/content/\' . $value[\'image\'] . \'&&/content/\' . $value[\'image\'] . \'&&\' . $value[\'alt\'];
    if(++$i != $numItems) {
        $html .= \'$$\';
    }
}

return $html;
return;
';