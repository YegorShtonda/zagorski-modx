<?php  return '$arr = json_decode($input, true);
$html = "";

$n = 0;
foreach ($arr as $value) {
    $active_class = \'\';
    if($n == 0){
        $active_class = \' active\';
    }
    
    $html .= \'<div class="bigtest-image\' . $active_class . \'" data-step="\' . $n . \'">\';
    $html .=    \'<img src="/content/\' . $value[\'image\'] . \'" alt="">\';
    $html .= \'</div>\';
    $n += 1;
}
return $html;
return;
';