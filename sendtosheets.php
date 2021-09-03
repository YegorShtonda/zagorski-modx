<?php
require  'apis/google-sheets/vendor/autoload.php';
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/apis/google-sheets/secret.json');

/*  SEND TO GOOGLE SHEETS */
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
	$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)->getSpreadsheetFeed()->getByTitle('он лайн записи оновлені');

	// Get the first worksheet (tab)
	$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();



	$type = htmlspecialchars( filter_input(INPUT_POST, 'type' ) );

	if($type == 'doctor'){
		$name  = htmlspecialchars( filter_input(INPUT_POST, 'name' ) );
		$phone  = htmlspecialchars( filter_input(INPUT_POST, 'phone' ) );
		$comment  = htmlspecialchars( filter_input(INPUT_POST, 'comment' ) );
		$doctor  = htmlspecialchars( filter_input(INPUT_POST, 'doctor' ) );
		$page  = htmlspecialchars( filter_input(INPUT_POST, 'page' ) );
		
		$worksheet = $worksheets[0];

		$listFeed = $worksheet->getListFeed();
		$listFeed->insert([
			'name' => $name,
			'phone' => $phone,
			'comment' => $comment,
			'doctor' => $doctor,
			'page' => $page,
			'date' => date_create('now')->format('Y-m-d H:i:s')
		]);
		
	}else if($type == 'vacanci'){
		$name  = htmlspecialchars( filter_input(INPUT_POST, 'name' ) );
		$phone  = htmlspecialchars( filter_input(INPUT_POST, 'phone' ) );
		$comment  = htmlspecialchars( filter_input(INPUT_POST, 'comment' ) );

		$worksheet = $worksheets[1];

		$listFeed = $worksheet->getListFeed();
		$listFeed->insert([
			'name' => $name,
			'phone' => $phone,
			'comment' => $comment,
			'date' => date_create('now')->format('Y-m-d H:i:s')
		]);
		
	}else if($type == 'simple'){
		$name  = htmlspecialchars( filter_input(INPUT_POST, 'name' ) );
		$email  = htmlspecialchars( filter_input(INPUT_POST, 'email' ) );
		$phone  = htmlspecialchars( filter_input(INPUT_POST, 'phone' ) );
		$id  = htmlspecialchars( filter_input(INPUT_POST, 'id' ) );

		if($id == 'btn-personal-office-recording'){
			$worksheet = $worksheets[2];

			$listFeed = $worksheet->getListFeed();
			$listFeed->insert([
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'date' => date_create('now')->format('Y-m-d H:i:s')
			]);
		}else if($id == 'btn-personal-office-results'){
			$worksheet = $worksheets[3];

			$listFeed = $worksheet->getListFeed();
			$listFeed->insert([
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'date' => date_create('now')->format('Y-m-d H:i:s')
			]);
		}
		
		
	}

}catch(Exception $e){
	echo $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode;
}




	