<?php
$where = array(
    'contentid' => 1
   ,'tmplvarid' => 1
);
if($modx->context->key == 'en'){
    $where = array(
        'contentid' => 47
       ,'tmplvarid' => 1
    );
}
$tv_value = json_decode( $modx->getObject('modTemplateVarResource', $where)->get('value') );
$output = '';

if($get == 'all'){
    $numItems = count($tv_value);
    $i = 0;
    foreach ($tv_value as $tv) {
        $title = $tv->title;
        $descr = $tv->description;
        
        $inp_img = 'content/' . $tv->image;
        $options = "w=450&height=450&zc=1&q=90&f=jpg";   
        $image = $modx->runSnippet("phpthumbof",array('input' => $inp_img, 'options' => $options));
        
        $output = $output . $title . '&&' . $descr . '&&' . str_replace("/en", "", $image);
        if(++$i != $numItems) {
            $output = $output . '$$';
        }
    }
}else if($get == 'first_title') {
    $title = $tv_value[0]->title;
    $output = str_replace('##', '<br>', $title);
}else if($get == 'first_descr') {
    $descr = $tv_value[0]->description;
    $output = str_replace('##', '<br>', $descr);
}else if($get == 'first_image') {
    $inp_img = 'content/' . $tv_value[0]->image;
    $options = "w=450&height=450&zc=1&q=90";   
    $thumbnail = $modx->runSnippet("phpthumbof",array('input' => $inp_img, 'options' => $options));
    
    $output = str_replace("/en", "", $thumbnail);
}

return $output;
return;
