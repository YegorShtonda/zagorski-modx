<?php
$lankey = substr($_SERVER['REQUEST_URI'], 1, 2);
if($modx->context->get('key') != "mgr"){
    //grab the current domain from the http_host option
    switch ($lankey) {
      case 'en':
            //switch the context
            $modx->switchContext('en');
            //set the cultureKey
            $modx->setOption('cultureKey', 'en');
            break;
        default:
            // Set the default language/context here
            $modx->switchContext('web');
            $modx->setOption('cultureKey', 'ukr');
            break;
    }
}
return;
