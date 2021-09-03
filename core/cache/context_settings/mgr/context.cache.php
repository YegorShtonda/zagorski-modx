<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeDocFormSave' => 
    array (
      2 => '2',
      3 => '3',
    ),
    'OnBeforeEmptyTrash' => 
    array (
      3 => '3',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
      12 => '12',
      11 => '11',
    ),
    'OnChunkFormSave' => 
    array (
      11 => '11',
    ),
    'OnContextRemove' => 
    array (
      23 => '23',
    ),
    'OnDocFormPrerender' => 
    array (
      1 => '1',
      3 => '3',
      11 => '11',
      23 => '23',
      26 => '26',
      12 => '12',
      24 => '24',
    ),
    'OnDocFormRender' => 
    array (
      3 => '3',
      30 => '30',
    ),
    'OnDocFormSave' => 
    array (
      30 => '30',
      2 => '2',
      11 => '11',
      23 => '23',
    ),
    'OnEmptyTrash' => 
    array (
      23 => '23',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      12 => '12',
      1 => '1',
    ),
    'OnFileManagerUpload' => 
    array (
      28 => '28',
    ),
    'OnHandleRequest' => 
    array (
      5 => '5',
      22 => '22',
    ),
    'OnLoadWebDocument' => 
    array (
      24 => '24',
    ),
    'OnLoadWebPageCache' => 
    array (
      5 => '5',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      1 => '1',
      29 => '29',
      3 => '3',
    ),
    'OnManagerPageInit' => 
    array (
      3 => '3',
      2 => '2',
    ),
    'OnMODXInit' => 
    array (
      15 => '15',
      24 => '24',
    ),
    'OnPageNotFound' => 
    array (
      2 => '2',
      30 => '30',
      7 => '7',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
      12 => '12',
    ),
    'OnResourceBeforeSort' => 
    array (
      2 => '2',
      3 => '3',
    ),
    'OnResourceDuplicate' => 
    array (
      23 => '23',
    ),
    'OnResourceSort' => 
    array (
      23 => '23',
      2 => '2',
    ),
    'OnRichTextBrowserInit' => 
    array (
      18 => '18',
    ),
    'OnRichTextEditorInit' => 
    array (
      18 => '18',
    ),
    'OnRichTextEditorRegister' => 
    array (
      1 => '1',
      18 => '18',
    ),
    'OnSiteRefresh' => 
    array (
      14 => '14',
      15 => '15',
      23 => '23',
      31 => '31',
    ),
    'OnSnipFormPrerender' => 
    array (
      12 => '12',
      1 => '1',
      11 => '11',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
      11 => '11',
      12 => '12',
    ),
    'OnTempFormSave' => 
    array (
      11 => '11',
    ),
    'OnTVInputPropertiesList' => 
    array (
      24 => '24',
      26 => '26',
    ),
    'OnTVInputRenderList' => 
    array (
      24 => '24',
      26 => '26',
    ),
    'OnTVOutputRenderList' => 
    array (
      24 => '24',
    ),
    'OnTVOutputRenderPropertiesList' => 
    array (
      24 => '24',
    ),
    'OnWebPageInit' => 
    array (
      5 => '5',
    ),
    'OnWebPagePrerender' => 
    array (
      15 => '15',
      5 => '5',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Define default mime for html elements(templates, chunks and html resources)
$html_elements_mime=$modx->getOption(\'ace.html_elements_mime\',null,false);
if(!$html_elements_mime){
    // this may deprecated in future because components may set ace.html_elements_mime option now
    switch (true) {
        case $modx->getOption(\'twiggy_class\'):
            $html_elements_mime = \'text/x-twig\';
            break;
        case $modx->getOption(\'pdotools_fenom_parser\'):
            $html_elements_mime = \'text/x-smarty\';
            break;
        default:
            $html_elements_mime = \'text/html\';
    }
}

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeENGINE= \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;
        $mimeType = $html_elements_mime;
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->name, PATHINFO_EXTENSION);
            if(!$extension||!isset($extensionMap[$extension])){
                $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            }
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = $html_elements_mime;
        }
        $modxTags = true;
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        if($mimeType == \'text/html\')$mimeType = $html_elements_mime;

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'autoRedirector',
      'description' => '',
      'editor_type' => '0',
      'category' => '1',
      'cache_type' => '0',
      'plugincode' => '$resourceEvents = array(\'OnBeforeDocFormSave\', \'OnDocFormSave\');
if (in_array($modx->event->name, $resourceEvents)) {
    foreach($scriptProperties as & $object){
        if(
            is_object($object)
            AND $object instanceof modResource
            AND $original = $modx->getObject(\'modResource\', $object->id)
        ){
            $resource = $object;
            break;
        }
    }
}
switch ($modx->event->name) {
    case "OnManagerPageInit":
	$cssFile = MODX_ASSETS_URL.\'components/autoredirector/css/mgr/main.css\';
	$modx->regClientCSS($cssFile);
	break;

    case "OnBeforeDocFormSave":
        $resources = array(
                $resource,
                $modx->getObject(\'modResource\',$resource->get(\'parent\'))
            );
        if($child_ids = $modx->getChildIds($resource->id,50,array(\'context\' => $resource->context_key))){
            $resources = array_merge($resources, $modx->getCollection(\'modResource\',array("id:IN" => $child_ids)));
        }
    case "OnResourceBeforeSort":
        if (empty($resources)) {
            foreach ($nodes as $node) {
                $resources[] = $modx->getObject(\'modResource\',$node[\'id\']);
            }
        }
        foreach ($resources as $res) {
            if (!empty($res)) {
                if (!$res->getProperty(\'old_uri\',\'autoredirector\')) {
                    $res->setProperty(\'old_uri\',$res->get(\'uri\'),\'autoredirector\');
                    $res->save();
                }
            }
        }
        break;
    case "OnDocFormSave":
        $resources = array(
                $resource,
                $modx->getObject(\'modResource\',$resource->get(\'parent\'))
            );
        if($child_ids = $modx->getChildIds($resource->id,50,array(\'context\' => $resource->context_key))){
            $resources = array_merge($resources, $modx->getCollection(\'modResource\',array("id:IN" => $child_ids)));
        }
    case "OnResourceSort":
        if (empty($resources)) {
            foreach ($nodesAffected as $node) {
                $resources[] = $node;
            }
        }
        $modelPath = $modx->getOption(\'autoredirector_core_path\',null,$modx->getOption(\'core_path\').\'components/autoredirector/\').\'model/\';
		$modx->addPackage(\'autoredirector\', $modelPath);
        $processorProps = array(\'processors_path\' => $modx->getOption(\'autoredirector_core_path\',null,$modx->getOption(\'core_path\').\'components/autoredirector/\').\'processors/\');
        foreach ($resources as $res) {
            if (!empty($res)) {
                $old_uri = $res->getProperty(\'old_uri\',\'autoredirector\');
                $current_uri = $res->getAliasPath($res->get(\'alias\'));
                if ($old_uri && $current_uri != $old_uri) {
                    $currentRuleQ = array(\'uri\' => $current_uri);
                    if (!$modx->getOption(\'global_duplicate_uri_check\')) {
                        $currentRuleQ[\'context_key\'] = $res->get(\'context_key\');
                    }
                    if ($currentRule = $modx->getObject(\'arRule\', $currentRuleQ)) {
                        $response = $modx->runProcessor(\'mgr/item/remove\', $currentRule->toArray(), $processorProps);
                        if ($response->isError()) {
                            $modx->log(modX::LOG_LEVEL_ERROR, \'AutoRedirector removing error. Message: \'.$response->getMessage());
                        }
                    }
                    $arRule = array(\'uri\' => $old_uri
                        , \'context_key\' => $res->get(\'context_key\')
                        , \'res_id\' => $res->get(\'id\'));
                    if (!$modx->getObject(\'arRule\', $arRule)) {
                        $response = $modx->runProcessor(\'mgr/item/create\', $arRule, $processorProps);
                        if ($response->isError()) {
                            $modx->log(modX::LOG_LEVEL_ERROR, \'AutoRedirector creating error. Message: \'.$response->getMessage());
                        }
                    }
                }
                $res->setProperty(\'old_uri\',$current_uri,\'autoredirector\');
                $res->save();
            }
        }
        break;
    case "OnPageNotFound":
        $uri = $_SERVER[\'REQUEST_URI\'];
        $uri = str_replace($modx->getOption("site_url"),"",$uri);
        if (substr($uri, 0, 1) == "/") $uri = substr($uri, 1);
        $uri = urldecode($uri);

        $RuleQ = array(\'uri\' => $uri);
        if (!$modx->getOption(\'global_duplicate_uri_check\')) {
            $RuleQ[\'context_key\'] = $modx->context->get(\'key\');
        }
        $modelPath = $modx->getOption(\'autoredirector_core_path\',null,$modx->getOption(\'core_path\').\'components/autoredirector/\').\'model/\';
    	$modx->addPackage(\'autoredirector\', $modelPath);
        if ($Rule = $modx->getObject(\'arRule\', $RuleQ)) {
            if ($url = $modx->makeUrl($Rule->get(\'res_id\'))) {
                $modx->sendRedirect($url,array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/autoredirector/elements/plugins/plugin.autoredirector.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Collections',
      'description' => '',
      'editor_type' => '0',
      'category' => '3',
      'cache_type' => '0',
      'plugincode' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    /** @var CollectionsPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'debugParser',
      'description' => '',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => 'if (empty($_REQUEST[\'debug\']) || !$modx->user->hasSessionContext(\'mgr\') || $modx->context->key == \'mgr\') {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->parser instanceof pdoParser && $modx->loadClass(\'debugPdoParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugPdoParser($modx);
		}
		elseif ($modx->loadClass(\'debugParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugParser($modx);
		}
		break;

	case \'OnWebPageInit\':
		if (method_exists($modx->parser, \'clearCache\') && empty($_REQUEST[\'cache\'])) {
			$modx->parser->clearCache();
		}
		break;

	case \'OnLoadWebPageCache\':
		if (property_exists($modx->parser, \'from_cache\')) {
			$modx->parser->from_cache = true;
		}
		break;

	case \'OnWebPagePrerender\':
		if (method_exists($modx->parser, \'generateReport\')) {
			$modx->parser->generateReport();
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/debugparser/elements/plugins/plugin.debugparser.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'LogPageNotFound',
      'description' => 'LogPageNotFound plugin -- logs page-not-found requests',
      'editor_type' => '0',
      'category' => '9',
      'cache_type' => '0',
      'plugincode' => '/**
 * LogPageNotFound Plugin
 *
 * Copyright 2011-2015 Bob Ray <http://bobsguides.com>
 *
 * LogPageNotFound is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LogPageNotFound is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LogPageNotFound; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package logpagenotfound
 * @subpackage build
 */


if (!function_exists("get_host")) {
    function get_host($ip)
    {
        $ptr = implode(".", array_reverse(explode(".", $ip))) . ".in-addr.arpa";
        $host = @@dns_get_record($ptr, DNS_PTR);
        if ($host == null) {
            return $ip;
        }
        else {
            return $host[0][\'target\'];
        }
    }
}
if (!function_exists("logLine")) {
    function logLine($bLogLine, $maxLines, $file)
    {

        if ($bLogLine) {
            $bLogLine = strip_tags($bLogLine);
            $bLogLine = htmlspecialchars($bLogLine, ENT_QUOTES, \'UTF-8\');

            $log = file($file);
            if ($fp = fopen($file, \'a\')) { // tiny danger of 2 threads interfering; live with it
                if (count($log) >= $maxLines) {
                    fclose($fp);
                    while (count($log) >= $maxLines)
                    {
                        array_shift($log);
                    }
                    array_push($log, $bLogLine);
                    $bLogLine = implode(\'\', $log);
                    $fp = fopen($file, \'w\');
                }
                fputs($fp, $bLogLine);
                fclose($fp);
            }
            return;
        }
    }
}
/* Don\'t execute in Manager */
/** @var $modx modX */
/** @var $scriptProperties array */
if ($modx->context->get(\'key\') == \'mgr\') {
    return \'\';
}
$oldSetting = ignore_user_abort(TRUE); // otherwise can screw-up logfile
$data[\'page\'] = $_SERVER[\'REQUEST_URI\'];
$t = gettimeofday();
$data[\'time\'] = date(\'d/m/y H:i:s:\') . substr($t[\'usec\'], 0, 3); // H:i:s:u
$data[\'ip\'] = $_SERVER[\'REMOTE_ADDR\'];
$data[\'userAgent\'] = isset($_SERVER[\'HTTP_USER_AGENT\'])
        ? $_SERVER[\'HTTP_USER_AGENT\']
        : \'<unknown user agent>\';

$data[\'host\'] = get_host($data[\'ip\']);
$data[\'referer\'] = empty($_SERVER[\'HTTP_REFERER\']) ? \'(empty)\' : $_SERVER[\'HTTP_REFERER\'];
$msg = implode(\'`\', $data);

$maxLines  = $modx->getOption(\'log_max_lines\',$scriptProperties, 300);
$file = $modx->getOption(\'log_path\', $scriptProperties, MODX_CORE_PATH . \'logs/pagenotfound.log\', true );

logLine($msg . "\\n", $maxLines, $file);

ignore_user_abort($oldSetting);

return \'\';',
      'locked' => '0',
      'properties' => 'a:1:{s:13:"log_max_lines";a:7:{s:4:"name";s:13:"log_max_lines";s:4:"desc";s:23:"lpnf_log_max_lines_desc";s:4:"type";s:7:"integer";s:7:"options";s:0:"";s:5:"value";s:3:"300";s:7:"lexicon";s:26:"logpagenotfound:properties";s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'modDevTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '11',
      'cache_type' => '0',
      'plugincode' => '/**
 * modDevTools
 *
 * Copyright 2014 by Vitaly Kireev <kireevvit@gmail.com>
 *
 * @package moddevtools
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 */

/**
 * @var modx $modx
 */
$path = $modx->getOption(\'moddevtools_core_path\',null,$modx->getOption(\'core_path\').\'components/moddevtools/\').\'model/moddevtools/\';
/**
 * @var modDevTools $devTools
 */
$devTools = $modx->getService(\'devTools\',\'modDevTools\',$path, array(\'debug\' => false));
$eventName = $modx->event->name;

switch($eventName) {
    case \'OnDocFormSave\':
        $devTools->debug(\'Start OnDocFormSave\');
        $devTools->parseContent($resource);
        break;
    case \'OnTempFormSave\':
        $devTools->debug(\'Start OnTempFormSave\');
        $devTools->parseContent($template);
        break;
    case \'OnTVFormSave\':

        break;
    case \'OnChunkFormSave\':
        $devTools->debug(\'Start OnChunkFormSave\');
        $devTools->parseContent($chunk);
        break;
    case \'OnSnipFormSave\':

        break;
    /* Add tabs */
    case \'OnDocFormPrerender\':
        if ($modx->event->name == \'OnDocFormPrerender\') {
            $devTools->getBreadCrumbs($scriptProperties);
            return;
        }
        break;

    case \'OnTempFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Template\');
        }
        break;

    case \'OnTVFormPrerender\':
        break;


    case \'OnChunkFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Chunk\');
        }
        break;

    case \'OnSnipFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Snippet\');
        }
        break;


}

if (isset($result) && $result === true)
    return;
elseif (isset($result)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[modDevTools] An error occured. Event: \'.$eventName.\' - Error: \'.($result === false) ? \'undefined error\' : $result);
    return;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/moddevtools/elements/plugins/plugin.moddevtools.php',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'tagElementPlugin',
      'description' => '',
      'editor_type' => '0',
      'category' => '12',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        $field = \'ta\';
        $panel = \'\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $panel = \'modx-panel-template\';
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        $panel = \'modx-panel-chunk\';
        break;
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $panel = \'modx-panel-snippet\';
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $panel = \'modx-panel-plugin\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $panel = \'modx-panel-file-edit\';
        break;
    default:
        return;
}
if (!empty($field)) {
    $modx->controller->addLexiconTopic(\'core:chunk\');
    $modx->controller->addLexiconTopic(\'core:snippet\');
    $modx->controller->addLexiconTopic(\'tagelementplugin:default\');
    $jsUrl = $modx->getOption(\'tagelementplugin_assets_url\', null, $modx->getOption(\'assets_url\') . \'components/tagelementplugin/\').\'js/mgr/\';
    /** @var modManagerController */
    $modx->controller->addLastJavascript($jsUrl.\'tagelementplugin.js\');
    $modx->controller->addLastJavascript($jsUrl.\'dialogs.js\');
    $usingFenon = $modx->getOption(\'pdotools_fenom_parser\', null, false) ? \'true\' : \'false\';
    $connectorUrl = $modx->getOption("tagelementplugin_assets_url", null, $modx->getOption("assets_url") . "components/tagelementplugin/")."connector.php";
    $_html = <<<SCRIPT
<script type="text/javascript">
    var tagElPlugin = {};
    tagElPlugin.config = {
        panel : \'{$panel}\',
        field : \'{$field}\',
        parent : [],
        keys : {
        	quickEditor: {$modx->getOption(\'tagelementplugin_quick_editor_keys\', null, \'\')},
            elementEditor: {$modx->getOption(\'tagelementplugin_element_editor_keys\', null, \'\')},
            chunkEditor: {$modx->getOption(\'tagelementplugin_chunk_editor_keys\', null, \'\')},
            quickChunkEditor: {$modx->getOption(\'tagelementplugin_quick_chunk_editor_keys\', null,\' \')},
            elementProperties: {$modx->getOption(\'tagelementplugin_element_prop_keys\', null, \'\')}
        },
        using_fenom: {$usingFenon},
        elementEditor: \'{$modx->getOption("which_element_editor")}\',
        connector_url: \'{$connectorUrl}\'
    };
</script>
SCRIPT;
    $modx->controller->addHtml($_html);
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tagelementplugin/elements/plugins/plugin.tagelementplugin.php',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '31',
      'cache_type' => '0',
      'plugincode' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    15 => 
    array (
      'id' => '15',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '39',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    18 => 
    array (
      'id' => '18',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'TinyMCERTE',
      'description' => '',
      'editor_type' => '0',
      'category' => '41',
      'cache_type' => '0',
      'plugincode' => '/**
 * TinyMCE Rich Tech Editor
 *
 */
$corePath = $modx->getOption(\'tinymcerte.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/tinymcerte/\');
/** @var TinyMCERTE $tinymcerte */
$tinymcerte = $modx->getService(
    \'tinymcerte\',
    \'TinyMCERTE\',
    $corePath . \'model/tinymcerte/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'TinyMCERTE\' . $modx->event->name;
$modx->loadClass(\'TinyMCERTEPlugin\', $tinymcerte->getOption(\'modelPath\') . \'tinymcerte/events/\', true, true);
$modx->loadClass($className, $tinymcerte->getOption(\'modelPath\') . \'tinymcerte/events/\', true, true);
if (class_exists($className)) {
    /** @var TinyMCERTEPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    22 => 
    array (
      'id' => '22',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'SwitchLang',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$lankey = substr($_SERVER[\'REQUEST_URI\'], 1, 2);
if($modx->context->get(\'key\') != "mgr"){
    //grab the current domain from the http_host option
    switch ($lankey) {
      case \'en\':
            //switch the context
            $modx->switchContext(\'en\');
            //set the cultureKey
            $modx->setOption(\'cultureKey\', \'en\');
            break;
        default:
            // Set the default language/context here
            $modx->switchContext(\'web\');
            $modx->setOption(\'cultureKey\', \'ukr\');
            break;
    }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    23 => 
    array (
      'id' => '23',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Babel',
      'description' => 'Links and synchronizes multilingual resources.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Babel
 *
 * Copyright 2010 by Jakob Class <jakob.class@class-zec.de>
 *
 * This file is part of Babel.
 *
 * Babel is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Babel is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Babel; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package babel
 */
/**
 * Babel Plugin to link and synchronize multilingual resources
 *
 * Based on ideas of Sylvain Aerni <enzyms@gmail.com>
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnEmptyTrash,OnContextRemove,OnResourceDuplicate
 *
 * @author Jakob Class <jakob.class@class-zec.de>
 *         goldsky <goldsky@virtudraft.com>
 *
 * @package babel
 *
 */
$babel = $modx->getService(\'babel\', \'Babel\', $modx->getOption(\'babel.core_path\', null, $modx->getOption(\'core_path\').\'components/babel/\').\'model/babel/\');

/* be sure babel TV is loaded */
if (!($babel instanceof Babel) || !$babel->babelTv)
    return;

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        $output       = \'\';
        $errorMessage = \'\';
        $resource     = & $modx->event->params[\'resource\'];
        if (!$resource) {
            /* a new resource is being to created
             * -> skip rendering the babel box */
            break;
        }
        $linkedResources = $babel->getLinkedResources($resource->get(\'id\'));
        if (empty($linkedResources)) {
            /* always be sure that the Babel TV is set */
            $babel->initBabelTv($resource);
        }

        /* create babel-box with links to translations */
        $outputLanguageItems = \'\';
        if (!$modx->lexicon) {
            $modx->getService(\'lexicon\', \'modLexicon\');
        }
        $languagesStore = array();
        $contextKeys    = $babel->getGroupContextKeys($resource->get(\'context_key\'));
        foreach ($contextKeys as $contextKey) {
            /* for each (valid/existing) context of the context group a button will be displayed */
            $context = $modx->getObject(\'modContext\', array(\'key\' => $contextKey));
            if (!$context) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load context: \'.$contextKey);
                continue;
            }
            $context->prepare();
            $cultureKey       = $context->getOption(\'cultureKey\', $modx->getOption(\'cultureKey\'));
            $languagesStore[] = array($modx->lexicon(\'babel.language_\'.$cultureKey)." ($contextKey)", $contextKey);
        }

        $babel->config[\'context_key\']    = $resource->get(\'context_key\');
        $babel->config[\'languagesStore\'] = $languagesStore;
        $babel->config[\'menu\']           = $babel->getMenu($resource);
        if (empty($babel->config[\'menu\'])) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Babel] Could not load menu for context key: "\'.$babel->config[\'context_key\'].\'". Try to check "babel.contextKeys" in System Settings. If this is intended, you can ignore this warning.\');
            return;
        }
        $version         = str_replace(\' \', \'\', $babel->config[\'version\']);
        $isCSSCompressed = $modx->getOption(\'compress_css\');
        $withVersion     = $isCSSCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addCss($babel->config[\'cssUrl\'].\'babel.css\'.$withVersion);

        $modx->controller->addLexiconTopic(\'babel:default\');
        $isJsCompressed = $modx->getOption(\'compress_js\');
        $withVersion    = $isJsCompressed ? \'\' : \'?v=\'.$version;
        $modx->controller->addJavascript($babel->config[\'jsUrl\'].\'babel.class.js\'.$withVersion);
        $modx->controller->addHtml(\'
<script type="text/javascript">
    Ext.onReady(function () {
        var babel = new Babel(\'.json_encode($babel->config).\');
        babel.getMenu(babel.config.menu);
    });
</script>\');
        break;

    case \'OnDocFormSave\':
        $resource = & $modx->event->params[\'resource\'];
        if (!$resource) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'No resource provided for OnDocFormSave event\');
            break;
        }
        if ($modx->event->params[\'mode\'] == modSystemEvent::MODE_NEW) {
            /* no TV synchronization for new resources, just init Babel TV */
            $babel->initBabelTv($resource);
            break;
        }
        $babel->synchronizeTvs($resource->get(\'id\'));
        break;

    case \'OnEmptyTrash\':
        /* remove translation links to non-existing resources */
        $deletedResourceIds = & $modx->event->params[\'ids\'];
        if (is_array($deletedResourceIds)) {
            foreach ($deletedResourceIds as $deletedResourceId) {
                $babel->removeLanguageLinksToResource($deletedResourceId);
            }
        }
        break;

    case \'OnContextRemove\':
        /* remove translation links to non-existing contexts */
        $context = & $modx->event->params[\'context\'];
        if ($context) {
            $babel->removeLanguageLinksToContext($context->get(\'key\'));
        }
        break;

    case \'OnResourceDuplicate\':
        /* init Babel TV of duplicated resources */
        $resource = & $modx->event->params[\'newResource\'];
        $babel->initBabelTvsRecursive($modx, $babel, $resource->get(\'id\'));
        break;

    case \'OnResourceSort\':
        $nodesAffected = & $modx->event->params[\'nodesAffected\'];
        foreach ($nodesAffected as $node) {
            $linkedResources = $babel->getLinkedResources($node->get(\'id\'));
            foreach ($linkedResources as $key => $id) {
                if ($id === $node->get(\'id\')) {
                    unset($linkedResources[$key]);
                }
            }
            $linkedResources[$node->get(\'context_key\')] = $node->get(\'id\');
            $babel->updateBabelTv($linkedResources, $linkedResources);
        }

        break;

    case \'OnSiteRefresh\':
        $cacheManager = $modx->getCacheManager();
        $cacheManager->refresh(array(
            \'babel\' => array(),
        ));
        break;

    default:
        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    24 => 
    array (
      'id' => '24',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'mixedImage',
      'description' => 'mixedImage 2.0.0-beta plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/mixedimage/\';
$assetsUrl = $modx->getOption(\'assets_url\',null,MODX_ASSETS_URL).\'components/mixedimage/\';

$modx->lexicon->load(\'mixedimage:default\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    case \'OnDocFormPrerender\':
        $modx->regClientStartupScript($assetsUrl.\'js/mgr/mixedimage.js\');
        $modx->regClientCSS($assetsUrl.\'css/mgr/mixedimage.css\');
        $modx->controller->addLexiconTopic(\'mixedimage:default\');
        break;
    case \'OnMODXInit\':
    case \'OnLoadWebDocument\':
        $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\',null,\'image,file\').\',mixedimage\';
        $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    26 => 
    array (
      'id' => '26',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '63',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    28 => 
    array (
      'id' => '28',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'migxResizeOnUpload',
      'description' => '',
      'editor_type' => '0',
      'category' => '63',
      'cache_type' => '0',
      'plugincode' => '/**
 * migxResizeOnUpload Plugin
 *
 * Events: OnFileManagerUpload
 * Author: Bruno Perner <b.perner@gmx.de>
 * Modified to read multiple configs from mediasource-property
 * 
 * First Author: Vasiliy Naumkin <bezumkin@yandex.ru>
 * Required: PhpThumbOf snippet for resizing images
 * 
 * Example: mediasource - property \'resizeConfig\':
 * [{"alias":"origin","w":"500","h":"500","far":1},{"alias":"thumb","w":"150","h":"150","far":1}]
 */

if ($modx->event->name != \'OnFileManagerUpload\') {
    return;
}


$file = $modx->event->params[\'files\'][\'file\'];
$directory = $modx->event->params[\'directory\'];

if ($file[\'error\'] != 0) {
    return;
}

$name = $file[\'name\'];
//$extensions = explode(\',\', $modx->getOption(\'upload_images\'));

$source = $modx->event->params[\'source\'];

if ($source instanceof modMediaSource) {
    //$dirTree = $modx->getOption(\'dirtree\', $_REQUEST, \'\');
    //$modx->setPlaceholder(\'docid\', $resource_id);
    $source->initialize();
    $basePath = str_replace(\'/./\', \'/\', $source->getBasePath());
    //$cachepath = $cachepath . $dirTree;
    $baseUrl = $modx->getOption(\'site_url\') . $source->getBaseUrl();
    //$baseUrl = $baseUrl . $dirTree;
    $sourceProperties = $source->getPropertyList();

    //echo \'<pre>\' . print_r($sourceProperties, 1) . \'</pre>\';
    //$allowedExtensions = $modx->getOption(\'allowedFileTypes\', $sourceProperties, \'\');
    //$allowedExtensions = empty($allowedExtensions) ? \'jpg,jpeg,png,gif\' : $allowedExtensions;
    //$maxFilesizeMb = $modx->getOption(\'maxFilesizeMb\', $sourceProperties, \'8\');
    //$maxFiles = $modx->getOption(\'maxFiles\', $sourceProperties, \'0\');
    //$thumbX = $modx->getOption(\'thumbX\', $sourceProperties, \'100\');
    //$thumbY = $modx->getOption(\'thumbY\', $sourceProperties, \'100\');
    $resizeConfigs = $modx->getOption(\'resizeConfigs\', $sourceProperties, \'\');
    $resizeConfigs = $modx->fromJson($resizeConfigs);
    $thumbscontainer = $modx->getOption(\'thumbscontainer\', $sourceProperties, \'thumbs/\');
    $imageExtensions = $modx->getOption(\'imageExtensions\', $sourceProperties, \'jpg,jpeg,png,gif,JPG\');
    $imageExtensions = explode(\',\', $imageExtensions);
    //$uniqueFilenames = $modx->getOption(\'uniqueFilenames\', $sourceProperties, false);
    //$onImageUpload = $modx->getOption(\'onImageUpload\', $sourceProperties, \'\');
    //$onImageRemove = $modx->getOption(\'onImageRemove\', $sourceProperties, \'\');
    $cleanalias = $modx->getOption(\'cleanFilename\', $sourceProperties, false);

}

if (is_array($resizeConfigs) && count($resizeConfigs) > 0) {
    foreach ($resizeConfigs as $rc) {
        if (isset($rc[\'alias\'])) {
            $filePath = $basePath . $directory;
            $filePath = str_replace(\'//\',\'/\',$filePath);
            if ($rc[\'alias\'] == \'origin\') {
                $thumbPath = $filePath;
            } else {
                $thumbPath = $filePath . $rc[\'alias\'] . \'/\';
                $permissions = octdec(\'0\' . (int)($modx->getOption(\'new_folder_permissions\', null, \'755\', true)));
                if (!@mkdir($thumbPath, $permissions, true)) {
                    $modx->log(MODX_LOG_LEVEL_ERROR, sprintf(\'[migxResourceMediaPath]: could not create directory %s).\', $thumbPath));
                } else {
                    chmod($thumbPath, $permissions);
                }

            }


            $filename = $filePath . $name;
            $thumbname = $thumbPath . $name;
            $ext = substr(strrchr($name, \'.\'), 1);
            if (in_array($ext, $imageExtensions)) {
                $sizes = getimagesize($filename);
                echo $sizes[0]; 
                //$format = substr($sizes[\'mime\'], 6);
                if ($sizes[0] > $rc[\'w\'] || $sizes[1] > $rc[\'h\']) {
                    if ($sizes[0] < $rc[\'w\']) {
                        $rc[\'w\'] = $sizes[0];
                    }
                    if ($sizes[1] < $rc[\'h\']) {
                        $rc[\'h\'] = $sizes[1];
                    }
                    $type = $sizes[0] > $sizes[1] ? \'landscape\' : \'portrait\';
                    if (isset($rc[\'far\']) && $rc[\'far\'] == \'1\' && isset($rc[\'w\']) && isset($rc[\'h\'])) {
                        if ($type = \'landscape\') {
                            unset($rc[\'h\']);
                        }else {
                            unset($rc[\'w\']);
                        }
                    }

                    $options = \'\';
                    foreach ($rc as $k => $v) {
                        if ($k != \'alias\') {
                            $options .= \'&\' . $k . \'=\' . $v;
                        }
                    }
                    $resized = $modx->runSnippet(\'phpthumbof\', array(\'input\' => $filePath . $name, \'options\' => $options));
                    rename(MODX_BASE_PATH . substr($resized, 1), $thumbname);
                }
            }


        }
    }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    29 => 
    array (
      'id' => '29',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '65',
      'cache_type' => '0',
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    30 => 
    array (
      'id' => '30',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Redirector',
      'description' => '',
      'editor_type' => '0',
      'category' => '72',
      'cache_type' => '0',
      'plugincode' => '/**
 * @package redirector
 *
 * @var modX|xPDO $modx
 * @var array $scriptProperties
 * @var modResource $resource
 * @var string $mode
 */

/* load redirector class */
$corePath = $modx->getOption(\'redirector.core_path\', $scriptProperties, $modx->getOption(\'core_path\') . \'components/redirector/\');
$redirector = $modx->getService(\'redirector\', \'Redirector\', $corePath . \'model/redirector/\', $scriptProperties);
if (!($redirector instanceof Redirector)) {
    return \'\';
}

$eventName = $modx->event->name;
switch ($eventName) {
    case \'OnPageNotFound\':
        /* handle redirects */
        $search = rawurldecode($_SERVER[\'REQUEST_URI\']);
        $baseUrl = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
        if (!empty($baseUrl) && $baseUrl != \'/\' && $baseUrl != \' \' && $baseUrl != \'/\' . $modx->context->get(\'key\') . \'/\') {
            $search = str_replace($baseUrl, \'\', $search);
        }

        $search = ltrim($search, \'/\');
        if (!empty($search)) {
            $searchEscape = $modx->quote($search);

            /** @var modRedirect $redirect */
            $redirect = $modx->getObject(\'modRedirect\', array(
                "(`modRedirect`.`pattern` = " . $searchEscape . ")",
                "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                \'active\' => true,
            ));

            // when not found, check a REGEX record..
            // need to separate this one because of some \'alias.html > target.html\' vs. \'best-alias.html > best-target.html\' issues...
            if (empty($redirect) || !is_object($redirect)) {
                $c = $modx->newQuery(\'modRedirect\');
                $c->where(array(
                    "(`modRedirect`.`pattern` = " . $searchEscape . " OR " . $searchEscape . " REGEXP `modRedirect`.`pattern` OR " . $searchEscape . " REGEXP CONCAT(\'^\', `modRedirect`.`pattern`, \'$\'))",
                    "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                    \'active\' => true,
                ));
                $redirect = $modx->getObject(\'modRedirect\', $c);
            }

            if (!empty($redirect) && is_object($redirect)) {

                /** @var modContext $context */
                $context = $redirect->getOne(\'Context\');
                if (empty($context) || !($context instanceof modContext)) {
                    $context = $modx->context;
                }

                $target = $redirect->get(\'target\');
                $modx->parser->processElementTags(\'\', $target, true, true);

                if ($target != $modx->resourceIdentifier && $target != $search) {
                    if (strpos($target, \'$\') !== false) {
                        $pattern = $redirect->get(\'pattern\');
                        $target = preg_replace(\'/\' . $pattern . \'/\', $target, $search);
                    }
                    if (!strpos($target, \'://\')) {
                        $target = rtrim($context->getOption(\'site_url\'), \'/\') . \'/\' . (($target == \'/\') ? \'\' : ltrim($target, \'/\'));
                    }
                    $modx->log(modX::LOG_LEVEL_INFO, \'Redirector plugin redirecting request for \' . $search . \' to \' . $target);

                    $redirect->registerTrigger();

                    $options = array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\');
                    $modx->sendRedirect($target, $options);
                }
            }
        }

        break;

    case \'OnDocFormRender\':
        $track_uri_updates = (boolean)$modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;

        if ($mode == \'upd\' && $track_uri_updates) {
            $_SESSION[\'modx_resource_uri\'] = $resource->get(\'uri\');
        }

        break;

    case \'OnDocFormSave\':
        /* if uri has changed, add to redirects */
        $track_uri_updates = $modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;
        $context_key = $resource->get(\'context_key\');
        $new_uri = $resource->get(\'uri\');

        if ($mode == \'upd\' && $track_uri_updates && !empty($_SESSION[\'modx_resource_uri\'])) {
            $old_uri = $_SESSION[\'modx_resource_uri\'];
            if ($old_uri != $new_uri) {
                /* uri changed */
                $redirect = $modx->getObject(\'modRedirect\', array(
                    \'pattern\' => $old_uri,
                    \'context_key\' => $context_key,
                    \'active\' => true
                ));
                if (empty($redirect)) {
                    /* no record for old uri */
                    $new_redirect = $modx->newObject(\'modRedirect\');
                    $new_redirect->fromArray(array(
                        \'pattern\' => $old_uri,
                        \'target\' => \'[[~\' . $resource->get(\'id\') . \']]\',
                        \'context_key\' => $context_key,
                        \'active\' => true,
                    ));

                    if ($new_redirect->save() == false) {
                        return $modx->error->failure($modx->lexicon(\'redirector.redirect_err_save\'));
                    }
                }
            }

            $_SESSION[\'modx_resource_uri\'] = $new_uri;
        }

        break;
}

return \'\';',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    31 => 
    array (
      'id' => '31',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'GSMCacheManager',
      'description' => '',
      'editor_type' => '0',
      'category' => '73',
      'cache_type' => '0',
      'plugincode' => '/**
 * GSMCacheManager
 *
 * Clears the Google SiteMap cache partition.
 * Version 2+ of GoogleSiteMap uses code by Garry Nutting of the MODX Core Team to deliver sitemaps blazingly fast.
 *
 * @author YJ Tso <yj@modx.com>, Garry Nutting <garry@modx.com>
 *
 *
 * GSMCacheManager is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * GSMCacheManager is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GSMCacheManager; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googlesitemap
 */

// In case the wrong event is enabled
if ($modx->event->name !== \'OnSiteRefresh\') return;
// Set cache options
// subfolder of core/cache/
$cachePartition = $modx->getoption(\'cachePartition\', $scriptProperties, $modx->getOption(\'googlesitemap.cache_partition\', null, \'googlesitemap\'));
$options = array(
  xPDO::OPT_CACHE_KEY => $cachePartition,
);

// Clean cache
$modx->cacheManager->clean($options);',
      'locked' => '0',
      'properties' => 'a:1:{s:14:"cachePartition";a:7:{s:4:"name";s:14:"cachePartition";s:4:"desc";s:44:"googlesitemap.gsmcachemanager.cachePartition";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"googlesitemap";s:7:"lexicon";s:24:"googlesitemap:properties";s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'set_sudo' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
            'formit' => true,
            'formit_encryptions' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 2,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => false,
            'actions' => false,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => false,
            'class_map' => true,
            'components' => false,
            'content_types' => false,
            'countries' => true,
            'create' => true,
            'credits' => false,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => false,
            'delete_chunk' => false,
            'delete_context' => false,
            'delete_document' => true,
            'delete_eventlog' => false,
            'delete_plugin' => false,
            'delete_propertyset' => false,
            'delete_role' => false,
            'delete_snippet' => false,
            'delete_template' => false,
            'delete_tv' => false,
            'delete_user' => false,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => false,
            'edit_chunk' => false,
            'edit_context' => false,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => false,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => false,
            'events' => false,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_unpack' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'formit' => true,
            'formit_encryptions' => true,
            'frames' => true,
            'help' => false,
            'home' => true,
            'import_static' => true,
            'languages' => false,
            'lexicons' => false,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => false,
            'menus' => true,
            'menu_reports' => false,
            'menu_security' => false,
            'menu_site' => false,
            'menu_support' => false,
            'menu_system' => false,
            'menu_tools' => false,
            'menu_trash' => false,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => false,
            'policy_edit' => false,
            'policy_new' => false,
            'policy_save' => false,
            'policy_template_delete' => false,
            'policy_template_edit' => false,
            'policy_template_new' => false,
            'policy_template_save' => false,
            'policy_template_view' => false,
            'policy_view' => false,
            'property_sets' => false,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_duplicate' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'set_sudo' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => false,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);