<?php  return 'if ($_SERVER[\'HTTP_X_REQUESTED_WITH\'] != \'XMLHttpRequest\') {return;}


$action = filter_input(INPUT_POST,\'action\');
$parent = filter_input(INPUT_POST,\'parent\');
$offset = filter_input(INPUT_POST,\'offset\');
$len = 6;

if (empty($action)) {return;}


$output = \'\';
switch ($action) {
    case \'getResources\': 
        $arr = [];
        $resources = $modx->getCollection(\'modResource\', array(\'parent\' => $parent));
        foreach ($resources as $l => $res) {
            $arr[intval(strtotime($res->get(\'publishedon\')))] = $res;
        }
        if(sizeof($arr)>$startpos+$len){
            ksort($arr);
            $arr = array_reverse($arr);
            if(sizeof($arr) <= $offset+$len+1){
                $output .= \'beover$$\';
            }
            foreach ($arr as $l => $res) {
                if($l < $offset+$len && $l > $offset-1){
                    $title = $res->getTVValue(\'outside_tb_title\');
                    $descr = $res->getTVValue(\'outside_tb_descr\');
                    if(strlen($descr) > 175){
                        $descr = mb_substr($descr, 0, 200);
                        $descr .= \'...\';
                    }
                    $inp_img = $res->getTVValue(\'outside_tb_image\');
                    $options = "w=540&q=95";
                    $image = $modx->runSnippet("phpthumbof",array(\'input\' => $inp_img, \'options\' => $options));
                    $url = $modx->makeUrl($res->get(\'id\'), \'\', \'\', \'full\');
                    
                    $output .= $title.\'&&\'.$descr.\'&&\'.$image.\'&&\'.$url.\'$$\';
                }else if($l >= $offset+$len){
                    break;
                }
            }
            $output = rtrim($output,\'$$\');
        }else{
            $output = [];
        }
        break;
    case \'getResourcesAll\':
        $arr = [];
        $resources = $modx->getCollection(\'modResource\', array(\'parent\' => $parent));
        foreach ($resources as $k => $resource) {
            $childResources = $modx->getCollection(\'modResource\', array(\'parent\' => $k));
            foreach ($childResources as $l => $res) {
                $arr[intval(strtotime($res->get(\'publishedon\')))] = $res;
            }
        }
        if(sizeof($arr)>$startpos+$len+1){
            ksort($arr);
            $arr = array_reverse($arr);
            if(sizeof($arr) <= $offset+$len+1){
                $output .= \'beover$$\';
            }
            foreach ($arr as $l => $res) {
                if($l < $offset+$len && $l > $offset-1){
                    $title = $res->getTVValue(\'outside_tb_title\');
                    $descr = $res->getTVValue(\'outside_tb_descr\');
                    if(strlen($descr) > 175){
                        $descr = mb_substr($descr, 0, 200);
                        $descr .= \'...\';
                    }
                    $inp_img = \'content/\' . $res->getTVValue(\'outside_tb_image\');
                    $options = "w=540&q=95";
                    $image = $modx->runSnippet("phpthumbof",array(\'input\' => $inp_img, \'options\' => $options));
                    $url = $modx->makeUrl($res->get(\'id\'), \'\', \'\', \'full\');
                    
                    $output .= $title.\'&&\'.$descr.\'&&\'.$image.\'&&\'.$url.\'$$\';
                }else if($l >= $offset+$len){
                    break;
                }
            }
            $output = rtrim($output,\'$$\');
        }else{
            $output = [];
        }
        break;
    case \'getResponds\':
        $migx = $tvr = $modx->getObject(\'modTemplateVarResource\', array(
          \'tmplvarid\' => 28,
          \'contentid\' => $parent
        ))->get(\'value\');
        $arrJSON = json_decode ($migx);
        
        if(sizeof($arrJSON) <= $offset+$len+1){
            $output .= \'beover$$\';
        }
        
        $num = 0;
        foreach($arrJSON as $arrJSONDataSet){
            if($num < $offset+$len && $num > $offset-1){
                $text = $arrJSONDataSet->text;
                $defimage = \'content/\' . $arrJSONDataSet->photo;
                
                $imageSmall = $modx->runSnippet("phpthumbof",array(\'input\' => $defimage, \'options\' => "w=370&q=95"));
                $imageBig = $modx->runSnippet("phpthumbof",array(\'input\' => $defimage, \'options\' => "w=1000&q=95"));
                
                $output .= $text . \'&&\' . $imageSmall . \'&&\' . $imageBig . \'$$\';
            }else if($num >= $offset+$len){
                break;
            }
            $num += 1;
        }
        $output = rtrim($output,\'$$\');
        break;
        
}

if (!empty($output)) {
    die($output);
}
return;
';