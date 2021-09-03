<?php  return '$arr = json_decode($input, true);
$html = "";
$n = 0;
foreach ($arr as $value) {
    $active_class = \'\';
    if($n == 0){
        $active_class = \' active\';
    }
    
    $html .= \'<div class="bigtest-descr\' . $active_class . \'" data-step="\' . $n . \'">\';
    $html .=    \'<div class="test">\' . $value[\'descr\'] . \'</div>\';
    $html .=    \'<div class="res">\';
    
    $res_arr = json_decode($value[\'res\'], true);
    foreach ($res_arr as $v) {
        $ans = \'false\';
        if($v[\'is_true\'] == \'1\'){
            $ans = \'true\';
        }
        $html .= \'<button class="res-btn" data-answer="\' . $ans . \'">\' . $v[\'text\'] . \'</button>\';
    }
    $html .=    \'</div>\';
    $html .= \'</div>\';
    $n += 1;
}
return $html;
return;
';