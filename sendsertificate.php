<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'apis/mpdf/vendor/phpmailer/phpmailer/src/Exception.php';
require 'apis/mpdf/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'apis/mpdf/vendor/phpmailer/phpmailer/src/SMTP.php';

require  'apis/mpdf/vendor/autoload.php';

require  'apis/google-sheets/vendor/autoload.php';
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

$public_key = 'i46312215653';
$private_key = 'LfuMwXZHzaIbLRSCfMfF1xU7bXjLtytAvYFGdcW0';

$public_test_key = 'sandbox_i88415948437';
$private_test_key = 'sandbox_T2J1bQJeE9oqMmWUzjyyeAnwEZByqNXL3JJpcThv';

$data  = htmlspecialchars( filter_input(INPUT_POST, 'data' ) );
$signature  = htmlspecialchars( filter_input(INPUT_POST, 'signature' ) );

$sign = base64_encode( sha1($private_key . $data . $private_key, 1 ) );
//$sign = base64_encode( sha1($private_test_key . $data . $private_test_key, 1 ) );

//Перевірка на підробку запиту
// if($signature != $sign) {
//     return;
// }

$decode_datas = json_decode( base64_decode($data) );

if($decode_datas -> status != 'success'){
    return;
}

$sert_id = $decode_datas -> order_id;
$sert_amount = $decode_datas -> amount . ' ' . $decode_datas -> currency;
$dateNow = date_create('now')->format('Y-m-d H:i:s');
$date = date_create('now')->format('Y-m-d H:i:s');

$dae = json_decode( base64_decode($decode_datas -> dae) );

$sert_name = $dae -> sertificat;
$name = $dae -> name;
$phone = $dae -> phone;
$email = $dae -> email;


//Відправка повідомлення на пошту адміністратору
//$to= "<shtyegor@gmail.com>";
$to= "<office@zagorski.com.ua>";

$type = filter_input(INPUT_POST, 'type' );

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$subject = "Купівля сертифікату";

$message = "
<h1>Купили сертифікат</h1>

<p>Сертифікат: <b>{$sert_name}</b></p>
<p>Номер сертифікату: <b>{$sert_id}</b></p>
<p>Ціна сертифікату: <b>{$sert_amount}</b> <small>Звіряйте ціну сертифікату з типом</small></p>
<p>ПІБ покупця: <b>{$name}</b></p>
<p>Телефон покупця: <b>{$phone}</b></p>
<p>Пошта покупця: <b>{$email}</b></p>
<p>Дата платежу: <b>{$date}</b></p>

<p></p>
<p><a href='https://docs.google.com/spreadsheets/d/1bkIq0B6UqFeSw7qsUyo3fOrYWd0_JuK1tw85jG18AYo/edit#gid=0'>
    <button style='padding: 10px 25px; border: none; border-radius: 5px; background: #5db4e5; font-size: 14px; color: #fff;'>Таблиця зі всіма купленими сертифікатами</button>
</a></p>
";

mail($to, $subject, $message, $headers);


// Генерація і відправка pdf

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
    <div class="number">' . $sert_id . '</div>
    <div class="type">*' . $sert_name . '</div>
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

$content = $mpdf->Output('', 'S');

$sert_message = '
<div style="width: 600px; max-width: 100%">
    <h1>Ваш сертифікат на обстеження зору</h1>

    <p>Тип сертифікату: <b style="text-transform:lowercase">' . $sert_name . '</b></p>
    <p>Номер сертифікату: <b>' . $sert_id . '</b></p>
    <p></p>
    <p>Ви можете роздрукувати сертифікат з вкладеного .pdf файлу</p>
</div>
';

try {

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "mail.adm.tools";
    $mail->SMTPAuth   = true;             
    $mail->Port       = 25;              
    $mail->Username   = "office@zagorski.com.ua";
    $mail->Password   = "e5Yv7Ek5Nl6L";

    $mail->SetFrom('office@zagorski.com.ua', 'Центр хірургії ока');
    $mail->AddReplyTo('office@zagorski.com.ua');

    $mail->AddAddress($email);
    $mail->Subject = 'Подарунковий сертифікат | Центр хірургії ока проф. Загирського';
    $mail->AltBody = 'Ви купили сертифікат на обстеженння зору';
    $mail->isHTML(true);
    $mail->Body = $sert_message;
    
    //$mail->MsgHTML("*** Form attached! Please see the attached form (.pdf).");
    $mail->AddStringAttachment($content, 'sertificate.pdf', 'base64', 'application/pdf');      // attachment
    if (isset($_FILES['attached']) &&
        $_FILES['attached']['error'] == UPLOAD_ERR_OK) {
        $mail->AddAttachment($_FILES['attached']['tmp_name'],
                             $_FILES['attached']['name']);
    }
    $mail->Send();
    echo "<div style='margin-left:4%;'>Message Sent OK</div>\n";
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
}











//Відправка даних  таблицю

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/apis/google-sheets/secret.json');

$client = new Google_Client;
try{
	$client->useApplicationDefaultCredentials();
	$client->setApplicationName("Something to do with my representatives");
	$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
	if ($client->isAccessTokenExpired()) {
		$client->refreshTokenWithAssertion();
	}

	$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
	ServiceRequestFactory::setInstance(
		new DefaultServiceRequest($accessToken)
	);

	// Get our spreadsheet
	$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)->getSpreadsheetFeed()->getByTitle('список куплених сертифікатів');

	// Get the first worksheet (tab)
	$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();

    $worksheet = $worksheets[0];

    $listFeed = $worksheet->getListFeed();
    $listFeed->insert([
        'sertificate' => $sert_name,
        'number' => $sert_id,
        'amount' => $sert_amount,
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'date' => $dateNow
    ]);

}catch(Exception $e){
    mail($to, $subject, $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode, $headers);
}