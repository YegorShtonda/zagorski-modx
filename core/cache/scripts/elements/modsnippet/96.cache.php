<?php  return '$arr = json_decode($input, true);
$html = "";

$html .= \'<div class="article-block table-cols">\';

foreach ($arr as $value) {
    $html .= \'<div class="row">\';
    $html .=   \'<div class="c">\';
    $html .=     \'<div>\';
    $html .=       $value[\'text1\'];
    $html .=     \'</div>\';
    $html .=   \'</div>\';
    $html .=   \'<div class="c">\';
    $html .=     \'<div>\';
    $html .=       $value[\'text2\'];
    $html .=     \'</div>\';
    $html .=   \'</div>\';
    $html .= \'</div>\';
}

$html .= \'</div>\';

return $html;
return;
';