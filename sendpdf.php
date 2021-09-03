<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'apis/mpdf/vendor/phpmailer/phpmailer/src/Exception.php';
require 'apis/mpdf/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'apis/mpdf/vendor/phpmailer/phpmailer/src/SMTP.php';

require  'apis/mpdf/vendor/autoload.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/assets/fonts/pdf',
    ]),
    'fontdata' => $fontData + [
        'lato' => [
            'R' => 'Lato-Light.ttf',
            'B' => 'Lato-Regular.ttf'
        ],
        'oswald' => [
            'R' => 'Oswald-Regular.ttf'
        ]
    ],
    'default_font' => 'lato'
]);

$stylesheet = '
.sert{
    position: relative;
    width: 100%;
    height: 400px;
    background-image: url(./assets/img/pdfsertificat.jpg);
    background-size: 100% auto;
    background-repeat: no-repeat;
}
.number{
    font-family: oswald;
    padding-left: 580px;
    padding-top: 40px;
    color: #333;
    font-size: 22px;
}
.type{
    padding-left: 150px;
    padding-top: 205px;
    font-size: 16px;
    color: #333;
}
.text p{
    font-size: 16px;
    color: #333;
}
.text b{
    font-weight: bold;
}
';
$date = date('d.m.Y', strtotime(date('Y-m-d') . ' + 180 days'));
$html = '
<div class="sert">
    <div class="number">123456</div>
    <div class="type">*на комплексне обстеження зору</div>
</div>
<div class="text">
    <p>Термін дії сертифікату - <b>до ' . $date . '</b></p>
    <p></p>
    <p><b>Умови використання:</b></p>
    <p>
        1. Використання сертифікату здійснюється тільки за попереднім записом. <br>&nbsp;&nbsp;&nbsp;&nbsp;Час та день візиту узгоджується із медичним реєстратором.<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;+38 (0332) 77 00 88<br>
        &nbsp;&nbsp;&nbsp;&nbsp;+38 (096) 077 00 88<br>
        &nbsp;&nbsp;&nbsp;&nbsp;+38 (066) 077 00 88<br>
        &nbsp;&nbsp;&nbsp;&nbsp;+38 (093) 077 00 88<br>
        &nbsp;&nbsp;&nbsp;&nbsp;office@zagorski.com.ua
    </p>
    <p>2. Придбаний сертифікат обміну на грошовий еквівалент не підлягає.</p>
</div>
';

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
//$mpdf->Output();
$mpdf->Output();
