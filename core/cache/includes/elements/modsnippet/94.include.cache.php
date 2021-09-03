<?php
if(strlen($id) > 0){
    $url = $modx->makeUrl($id);
    $modx->sendRedirect($url);
}
if(strlen($link) > 0){
    $modx->sendRedirect($link);
}
return;
