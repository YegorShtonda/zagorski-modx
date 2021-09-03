<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 45,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Помилка 404',
    'longtitle' => '',
    'description' => '',
    'alias' => '404',
    'alias_visible' => 0,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 19,
    'menuindex' => 8,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1555681370,
    'editedby' => 1,
    'editedon' => 1555686193,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1555681380,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '404',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => '{"autoredirector":{"old_uri":"404"}}',
    'err_code' => 
    array (
      0 => 'err_code',
      1 => '404',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'err_descr' => 
    array (
      0 => 'err_descr',
      1 => 'сторінку не знайдено',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'err_btn_text' => 
    array (
      0 => 'err_btn_text',
      1 => 'на головну',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>[[!If? &subject=`45` &operator=`!=` &operand=`1` &then=`Помилка 404 | `]][[!If?
                &subject=`[[!getContext? id=`45`]]`
                &operator=`==`
                &operand=`web`
                &then=`Центр хірургії ока проф. Загурського`
                &else=`Eye surgery center prof. Zagorski`]]</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Центр хірургії ока проф. Загурського">
	<meta property="og:title" content="[[!If? &subject=`45` &operator=`!=` &operand=`1` &then=`Помилка 404 | `]]Центр хірургії ока проф. Загурського">
	<meta property="og:description" content="">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:image" content="https://zagorski.com.ua">
	<link rel="icon" ENGINE="image/png" href="/assets/img/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/favicon/apple-icon-57x57.png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
    new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
    \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,\'script\',\'dataLayer\',\'GTM-TCFV2TX\');</script>
    <!-- End Google Tag Manager -->
    <link href="[[!fileversion?input=`/assets/css/app.css`]]" rel="stylesheet">
    <link href="[[!fileversion?input=`/content/next.css`]]" rel="stylesheet">
</head>
<body>
	<style>@font-face{font-family:\'Oswald\';src:url(/assets/fonts/Oswald/Oswald-Regular.eot);src:url(/assets/fonts/Oswald/Oswald-Regular.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/Oswald/Oswald-Regular.woff) format("woff"),url(/assets/fonts/Oswald/Oswald-Regular.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:\'Lato\';src:url(/assets/fonts/Lato/Lato-Light.eot);src:url(/assets/fonts/Lato/Lato-Light.eot?#iefix) format("embedded-opentype"),url(/assets/fonts/Lato/Lato-Light.woff) format("woff"),url(/assets/fonts/Lato/Lato-Light.ttf) format("truetype");font-weight:300;font-style:normal}main{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;height:100vh}#error-cont{position:relative;text-align:center}#error-cont:before{content:\'\';position:absolute;width:500px;height:500px;background:#f4f4f4;border-radius:50%;right:-290px;top:-30px;-webkit-transform:scale(.7);-ms-transform:scale(.7);transform:scale(.7);opacity:.1;-webkit-transition:1s;-o-transition:1s;transition:1s;z-index:-1}#error-cont.load:before{opacity:1;-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}#error-cont h1{display:inline-block;font-size:250px;font-family:Oswald;line-height:1.05;text-shadow:0 0 17px #d4d4d4;color:transparent;cursor:default;-webkit-transition:1s;-o-transition:1s;transition:1s}#error-cont h1:hover{text-shadow:0 0 0 #d4d4d4}#error-cont p{font-size:28px;color:#707070;font-family:Lato}#error-cont a{display:inline-block;margin-top:60px;margin-bottom:50px;text-transform:uppercase;font-size:30px;background:#5db4e5;border:none;border-radius:50px;padding:8px 50px;-webkit-transition:.3s;-o-transition:.3s;transition:.3s;color:#fff;font-family:Oswald}#error-cont a:hover{background:#57a4d1}@media screen and (max-width: 1000px){#error-cont:before{right:auto;left:-290px}}@media screen and (max-width: 500px){#error-cont:before{top:-25px;left:-120px;width:300px;height:300px}#error-cont h1{font-size:160px}#error-cont p{font-size:20px}#error-cont a{margin-top:30px;margin-bottom:10px;font-size:25px;padding:8px 40px}}@media screen and (max-height: 500px){#error-cont:before{top:-25px;left:-120px;width:250px;height:250px}#error-cont h1{font-size:150px}#error-cont p{font-size:18px}#error-cont a{margin-top:15px;margin-bottom:0;font-size:20px;padding:8px 40px}}</style>
    <main>
        <section id="error-cont">
            <h1>404</h1>
            <p>сторінку не знайдено</p>
            <a href="/">на головну</a>
        </section> 
    </main>
    <script>setTimeout(function(){document.getElementById("error-cont").classList.add("load");}, 300);</script>
</body>
</html>',
    '_isForward' => true,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>[[!If? &subject=`45` &operator=`!=` &operand=`1` &then=`Помилка 404 | `]][[!If?
                &subject=`[[!getContext? id=`45`]]`
                &operator=`==`
                &operand=`web`
                &then=`Центр хірургії ока проф. Загурського`
                &else=`Eye surgery center prof. Zagorski`]]</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Центр хірургії ока проф. Загурського">
	<meta property="og:title" content="[[!If? &subject=`45` &operator=`!=` &operand=`1` &then=`Помилка 404 | `]]Центр хірургії ока проф. Загурського">
	<meta property="og:description" content="">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:image" content="https://zagorski.com.ua">
	<link rel="icon" ENGINE="image/png" href="/assets/img/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/favicon/apple-icon-57x57.png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
    new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
    \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,\'script\',\'dataLayer\',\'GTM-TCFV2TX\');</script>
    <!-- End Google Tag Manager -->
    <link href="[[!fileversion?input=`/assets/css/app.css`]]" rel="stylesheet">
    <link href="[[!fileversion?input=`/content/next.css`]]" rel="stylesheet">
</head>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>[[!If? &subject=`[[*id]]` &operator=`!=` &operand=`1` &then=`[[*pagetitle]] | `]][[!If?
                &subject=`[[!getContext? id=`[[*id]]`]]`
                &operator=`==`
                &operand=`web`
                &then=`Центр хірургії ока проф. Загурського`
                &else=`Eye surgery center prof. Zagorski`]]</title>
	<meta name="description" content="[[*seo_descr]]">
	<meta name="keywords" content="[[*seo_keywords]]">
	<meta property="og:type" content="[[*seo_ogtype]]">
	<meta property="og:site_name" content="Центр хірургії ока проф. Загурського">
	<meta property="og:title" content="[[!If? &subject=`[[*id]]` &operator=`!=` &operand=`1` &then=`[[*pagetitle]] | `]]Центр хірургії ока проф. Загурського">
	<meta property="og:description" content="[[*seo_descr]]">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:image" content="[[*seo_ogimage:is=``:then=`https://zagorski.com.ua[[*outside_tb_image:phpthumbof=`w=1200&h=630&zc=1&q=95`]]`:else=`https://zagorski.com.ua[[*seo_ogimage:phpthumbof=`w=1200&h=630&zc=1&q=95`]]`]]">
	<link rel="icon" ENGINE="image/png" href="/assets/img/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/favicon/apple-icon-57x57.png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
    new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
    \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,\'script\',\'dataLayer\',\'GTM-TCFV2TX\');</script>
    <!-- End Google Tag Manager -->
    <link href="[[!fileversion?input=`/assets/css/app.css`]]" rel="stylesheet">
    <link href="[[!fileversion?input=`/content/next.css`]]" rel="stylesheet">
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>[[!If? &subject=`[[*id]]` &operator=`!=` &operand=`1` &then=`[[*pagetitle]] | `]][[!If?
                &subject=`[[!getContext? id=`[[*id]]`]]`
                &operator=`==`
                &operand=`web`
                &then=`Центр хірургії ока проф. Загурського`
                &else=`Eye surgery center prof. Zagorski`]]</title>
	<meta name="description" content="[[*seo_descr]]">
	<meta name="keywords" content="[[*seo_keywords]]">
	<meta property="og:type" content="[[*seo_ogtype]]">
	<meta property="og:site_name" content="Центр хірургії ока проф. Загурського">
	<meta property="og:title" content="[[!If? &subject=`[[*id]]` &operator=`!=` &operand=`1` &then=`[[*pagetitle]] | `]]Центр хірургії ока проф. Загурського">
	<meta property="og:description" content="[[*seo_descr]]">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:image" content="[[*seo_ogimage:is=``:then=`https://zagorski.com.ua[[*outside_tb_image:phpthumbof=`w=1200&h=630&zc=1&q=95`]]`:else=`https://zagorski.com.ua[[*seo_ogimage:phpthumbof=`w=1200&h=630&zc=1&q=95`]]`]]">
	<link rel="icon" ENGINE="image/png" href="/assets/img/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/favicon/apple-icon-57x57.png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
    new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
    \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,\'script\',\'dataLayer\',\'GTM-TCFV2TX\');</script>
    <!-- End Google Tag Manager -->
    <link href="[[!fileversion?input=`/assets/css/app.css`]]" rel="stylesheet">
    <link href="[[!fileversion?input=`/content/next.css`]]" rel="stylesheet">
</head>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'phpthumbof' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbof',
          'description' => 'Identical to pthumb. Retained for backwards compatibility.
Documentation: https://github.com/oo12/phpThumbOf',
          'editor_type' => 0,
          'category' => 31,
          'cache_type' => 0,
          'snippet' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
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
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_pthumb.debug_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'phpthumbof:default',
              'area' => '',
              'desc_trans' => 'Write debug messages to the MODX error log.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
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
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'If' => 
      array (
        'fields' => 
        array (
          'id' => 27,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'If',
          'description' => 'Simple if (conditional) snippet',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'subject' => 
            array (
              'name' => 'subject',
              'desc' => 'The data being affected.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The data being affected.',
              'area_trans' => '',
            ),
            'operator' => 
            array (
              'name' => 'operator',
              'desc' => 'The type of conditional.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'EQ',
                  'text' => 'EQ',
                  'name' => 'EQ',
                ),
                1 => 
                array (
                  'value' => 'NEQ',
                  'text' => 'NEQ',
                  'name' => 'NEQ',
                ),
                2 => 
                array (
                  'value' => 'LT',
                  'text' => 'LT',
                  'name' => 'LT',
                ),
                3 => 
                array (
                  'value' => 'GT',
                  'text' => 'GT',
                  'name' => 'GT',
                ),
                4 => 
                array (
                  'value' => 'LTE',
                  'text' => 'LTE',
                  'name' => 'LTE',
                ),
                5 => 
                array (
                  'value' => 'GT',
                  'text' => 'GTE',
                  'name' => 'GTE',
                ),
                6 => 
                array (
                  'value' => 'EMPTY',
                  'text' => 'EMPTY',
                  'name' => 'EMPTY',
                ),
                7 => 
                array (
                  'value' => 'NOTEMPTY',
                  'text' => 'NOTEMPTY',
                  'name' => 'NOTEMPTY',
                ),
                8 => 
                array (
                  'value' => 'ISNULL',
                  'text' => 'ISNULL',
                  'name' => 'ISNULL',
                ),
                9 => 
                array (
                  'value' => 'inarray',
                  'text' => 'INARRAY',
                  'name' => 'INARRAY',
                ),
              ),
              'value' => 'EQ',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The type of conditional.',
              'area_trans' => '',
            ),
            'operand' => 
            array (
              'name' => 'operand',
              'desc' => 'When comparing to the subject, this is the data to compare to.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'When comparing to the subject, this is the data to compare to.',
              'area_trans' => '',
            ),
            'then' => 
            array (
              'name' => 'then',
              'desc' => 'If conditional was successful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was successful, output this.',
              'area_trans' => '',
            ),
            'else' => 
            array (
              'name' => 'else',
              'desc' => 'If conditional was unsuccessful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was unsuccessful, output this.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'getContext' => 
      array (
        'fields' => 
        array (
          'id' => 92,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'getContext',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/*
* Usage [[!getContext? &id=``]]
*/
 
//retrieve ID or use current resource
$id = (!empty($id) ? $id : $modx->resource->get(\'id\'));
 
//retrieve context
$page = $modx->getObject(\'modResource\', $id);
$output = $page->get(\'context_key\');
 
//return output
return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*
* Usage [[!getContext? &id=``]]
*/
 
//retrieve ID or use current resource
$id = (!empty($id) ? $id : $modx->resource->get(\'id\'));
 
//retrieve context
$page = $modx->getObject(\'modResource\', $id);
$output = $page->get(\'context_key\');
 
//return output
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'fileversion' => 
      array (
        'fields' => 
        array (
          'id' => 105,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'fileversion',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$file_path = MODX_BASE_PATH.$input;
if (file_exists($file_path)) {
	return $input."?".md5_file($file_path);
}
else {
	return $input;
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$file_path = MODX_BASE_PATH.$input;
if (file_exists($file_path)) {
	return $input."?".md5_file($file_path);
}
else {
	return $input;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'seo_descr' => 
      array (
        'fields' => 
        array (
          'id' => 80,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'seo_descr',
          'caption' => 'Опис сторінки',
          'description' => 'Потрапить в description і og:description',
          'editor_type' => 0,
          'category' => 60,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'seo_keywords' => 
      array (
        'fields' => 
        array (
          'id' => 81,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'seo_keywords',
          'caption' => 'Ключові слова',
          'description' => 'Потраплять в keywords | потрібно перечисляти через кому',
          'editor_type' => 0,
          'category' => 60,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'seo_ogtype' => 
      array (
        'fields' => 
        array (
          'id' => 83,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'listbox',
          'name' => 'seo_ogtype',
          'caption' => 'Тип контенту на сторінці',
          'description' => 'Потрапить в og:type',
          'editor_type' => 0,
          'category' => 60,
          'locked' => false,
          'elements' => 'website||video.movie||video.episode||video.tv_show||video.other||article||article:published_time||article:modified_time||article:expiration_time||article:author||article:section||article:tag||book||profile||music.song||music.album||music.playlist||music.radio_station',
          'rank' => 0,
          'display' => 'default',
          'default_text' => 'website',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'listWidth' => '',
            'title' => '',
            'typeAhead' => 'false',
            'typeAheadDelay' => '250',
            'forceSelection' => 'false',
            'listEmptyText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'website',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'outside_tb_image' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'mixedimage',
          'name' => 'outside_tb_image',
          'caption' => 'Зображення',
          'description' => '',
          'editor_type' => 0,
          'category' => 25,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'path' => '',
            'prefix' => '',
            'MIME' => '',
            'prefixFilename' => 'Ні',
            'showPreview' => 'Ні',
            'removeFile' => 'Ні',
            'resize' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'seo_ogimage' => 
      array (
        'fields' => 
        array (
          'id' => 82,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'mixedimage',
          'name' => 'seo_ogimage',
          'caption' => 'Зображення для соцмереж',
          'description' => 'Потрапить в og:image | рекомендоване співвідношення сторін 1200х630',
          'editor_type' => 0,
          'category' => 60,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'path' => '',
            'prefix' => '',
            'MIME' => '',
            'prefixFilename' => 'Ні',
            'showPreview' => 'Так',
            'removeFile' => 'Ні',
            'resize' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'err_code' => 
      array (
        'fields' => 
        array (
          'id' => 76,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'err_code',
          'caption' => 'Код помилки',
          'description' => '',
          'editor_type' => 0,
          'category' => 58,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'err_descr' => 
      array (
        'fields' => 
        array (
          'id' => 77,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'err_descr',
          'caption' => 'Опис помилки',
          'description' => '',
          'editor_type' => 0,
          'category' => 58,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'err_btn_text' => 
      array (
        'fields' => 
        array (
          'id' => 78,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'err_btn_text',
          'caption' => 'Текст на кнопці',
          'description' => '',
          'editor_type' => 0,
          'category' => 58,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Контент',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '/content/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);