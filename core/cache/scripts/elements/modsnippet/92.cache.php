<?php  return '/*
* Usage [[!getContext? &id=``]]
*/
 
//retrieve ID or use current resource
$id = (!empty($id) ? $id : $modx->resource->get(\'id\'));
 
//retrieve context
$page = $modx->getObject(\'modResource\', $id);
$output = $page->get(\'context_key\');
 
//return output
return $output;
return;
';