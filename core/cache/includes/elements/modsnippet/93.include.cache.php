<?php
$arr = json_decode($input, true);
$html = "";

$numItems = count($arr);
if($numItems > 5){
    $numItems = 5;
}

$html .= '<div class="article-block image-text-cols columns-';
$html .= $numItems;
$html .= '">';

foreach ($arr as $value) {
    $html .= '<div class="image-col">';
    $html .=   '<div class="image">';
    $html .=     '<img src="/';
    $html .=     'content/' .  $value['image'];
    $html .=     '">';
    $html .=   '</div>';
    $html .=   '<div class="text">';
    $html .=     '<span>';
    $html .=     $value['text'];
    $html .=     '</span>';
    $html .=   '</div>';
    $html .= '</div>';
}

$html .= '</div>';

return $html;
return;
