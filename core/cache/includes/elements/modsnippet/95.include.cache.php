<?php
$arr = json_decode($input, true);
$html = "";

$html .= '<div class="article-block image-text2-cols">';

foreach ($arr as $value) {
    $thimage = $modx->runSnippet("phpthumbof",array('input' => 'content/' . $value['image'], 'options' => "w=120&h=120&q=95&bg=fbfcfc"));
    $html .= '<div class="image-col">';
    $html .=   '<div class="image" style="background-image: url(';
    $html .=     $thimage;
    $html .=   ')"></div>';
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
