<?php  return '$to= "<zagorski.onlineapp@gmail.com>";
//$to= "<shtyegor@gmail.com>";

$type = filter_input(INPUT_POST, \'type\' );

$headers= "MIME-Version: 1.0\\r\\n";
$headers .= "Content-type: text/html; charset=utf-8\\r\\n";

//mail($to, \'test\', json_encode($_REQUEST), $headers);

if($type == \'doctor\'){
    $subject = "Запис до лікаря";

    $name     = htmlspecialchars( filter_input(INPUT_POST, \'name\') );
    $phone    = htmlspecialchars( filter_input(INPUT_POST, \'phone\') );
    $comment  = htmlspecialchars( filter_input(INPUT_POST, \'comment\') );
    $doctor   = htmlspecialchars( filter_input(INPUT_POST, \'doctor\') );
    $page     = htmlspecialchars( filter_input(INPUT_POST, \'page\') );
    
    $message = "
    <h1>Запис до лікаря</h1>
    <p>Ім\'я: <b>{$name}</b></p>
    <p>Телефон: <b>{$phone}</b></p>
    <p>Коментар: <b>{$comment}</b></p>
    <p>Бажаний лікар: <b>{$doctor}</b></p>
    <p>Сторінка з якої відправлена форма: <b>{$page}</b></p>
    <p></p>
    <p><a href=\'https://docs.google.com/spreadsheets/d/1VeodWwUjR2JGeTNB_LBRP4qMh4eoquaU7mo-AO8VBoc/edit#gid=0\'>
        <button style=\'padding: 10px 25px; border: none; border-radius: 5px; background: #5db4e5; font-size: 14px; color: #fff;\'>Таблиця зі всіма надісланими записами до лікаря</button>
    </a></p>
    ";
    
    mail($to, $subject, $message, $headers);
}else if($type == \'vacanci\'){
    $to= "<shtyegor@gmail.com>";
    $subject = "Вакансія";

    $uploadedFile = \'\';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().\'_\'.$_FILES[\'file\'][\'name\'];
        $valid_extensions = array("jpeg", "jpg", "png", "pdf");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES[\'file\'][\'tmp_name\'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name     = htmlspecialchars( filter_input( INPUT_POST, \'name\') );
    $phone    = htmlspecialchars( filter_input( INPUT_POST, \'phone\') );
    $comment  = htmlspecialchars( filter_input( INPUT_POST, \'comment\') );
    
    $message = "
    <h1>Вакансія</h1>
    <p>Ім\'я: <b>{$name}</b></p>
    <p>Телефон: <b>{$phone}</b></p>
    <p>Коментар: <b>{$comment}</b></p>
    <p>Завантажений файл: <b><a href=\'https://zagorski.com.ua/uploads/\'></a></b></p>
    <p></p>
    <p><a href=\'https://docs.google.com/spreadsheets/d/1VeodWwUjR2JGeTNB_LBRP4qMh4eoquaU7mo-AO8VBoc/edit#gid=1119365247\'>
        <button style=\'padding: 10px 25px; border: none; border-radius: 5px; background: #5db4e5; font-size: 14px; color: #fff;\'>Таблиця зі всіма надісланими вакансіями</button>
    </a></p>
    ";
    
    mail($to, $subject, $message, $headers);
}else if($type == \'simple\'){
    $id  = htmlspecialchars( filter_input(INPUT_POST, \'id\' ) );
    
    $name      = htmlspecialchars( filter_input(INPUT_POST, \'name\' ) );
    $email     = htmlspecialchars( filter_input(INPUT_POST, \'email\' ) );
    $phone     = htmlspecialchars( filter_input(INPUT_POST, \'phone\' ) );
    $formtype  = htmlspecialchars( filter_input(INPUT_POST, \'formtype\' ) );
    
    if($id == \'btn-personal-office-recording\'){
		$subject = "Запис на прийом з особистого кабінету";

        $message = "
        <h1>{$formtype}</h1>
        <p>Ім\'я: <b>{$name}</b></p>
        <p>Пошта: <b>{$email}</b></p>
        <p>Телефон: <b>{$phone}</b></p>
        <p></p>
        <p><a href=\'https://docs.google.com/spreadsheets/d/1VeodWwUjR2JGeTNB_LBRP4qMh4eoquaU7mo-AO8VBoc/edit#gid=62293688\'>
            <button style=\'padding: 10px 25px; border: none; border-radius: 5px; background: #5db4e5; font-size: 14px; color: #fff;\'>Таблиця зі всіма надісланими запитами з особистого кабінету</button>
        </a></p>
        ";
	}else if($id == \'btn-personal-office-results\'){
		$subject = "Отримати результати аналізу";

        $message = "
        <h1>{$formtype}</h1>
        <p>Ім\'я: <b>{$name}</b></p>
        <p>Пошта: <b>{$email}</b></p>
        <p>Телефон: <b>{$phone}</b></p>
        <p></p>
        <p><a href=\'https://docs.google.com/spreadsheets/d/1VeodWwUjR2JGeTNB_LBRP4qMh4eoquaU7mo-AO8VBoc/edit#gid=1663313828\'>
            <button style=\'padding: 10px 25px; border: none; border-radius: 5px; background: #5db4e5; font-size: 14px; color: #fff;\'>Таблиця зі всіма надісланими запитами з особистого кабінету</button>
        </a></p>
        ";
	}

    
    
    mail($to, $subject, $message, $headers);
}
return;
';