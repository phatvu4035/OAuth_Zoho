<?php 
require 'vendor/autoload.php';

$_SERVER['user_email_id'] = 'aloha050992@gmail.com';

ZCRMRestClient::initialize();  
$oAuthClient = ZohoOAuth::getClientInstance();  
$refreshToken = "1000.b1a4bab6b80a5dea6a41a94a0e125965.d04bddbd786b12e4cbd948d14756f5c9";  
$userIdentifier = "aloha050992@gmail.com";  
$oAuthTokens = $oAuthClient->generateAccessTokenFromRefreshToken($refreshToken,$userIdentifier);

$zcrmModuleIns = ZCRMModule::getInstance("Contacts");
$bulkAPIResponse = $zcrmModuleIns->getRecords();
$recordsArray = $bulkAPIResponse->getData();

// foreach($recordsArray as $rec) {
// 	var_dump($rec->getData());
// 	echo '<br>';
// }

// $recordArrays = array();

// $record=ZCRMRecord::getInstance("Contacts",null); 
// $record->setFieldValue("Full_Name","Anh");
// $record->setFieldValue("Last_Name","Hoang");
// $record->setFieldValue("Home_Phone","4857");
// $record->setFieldValue("Email","hoanganh@yahoo.com");  
// $record->setFieldValue("Other_Phone","15987");  

// $recordArrays[] = $record;

// $zcrmModuleIns = ZCRMModule::getInstance("Contacts");  
// $bulkAPIResponse=$zcrmModuleIns->createRecords($recordArrays); // $recordsArray - array of ZCRMRecord instances filled with required data for creation.  
// $entityResponses = $bulkAPIResponse->getEntityResponses();  
// foreach($entityResponses as $entityResponse)  
// {  
// 	if("success"==$entityResponse->getStatus())  
// 	{  
// 		echo "Status:".$entityResponse->getStatus();  
// 		echo "Message:".$entityResponse->getMessage();  
// 		echo "Code:".$entityResponse->getCode();  
// 		$createdRecordInstance=$entityResponse->getData();  
// 		echo "EntityID:".$createdRecordInstance->getEntityId();  
// 		echo "moduleAPIName:".$createdRecordInstance->getModuleAPIName();
// 	}
// }

?>

<!-- <form method="POST" action="https://accounts.zoho.com/oauth/v2/token">
	<input type="text" name ="code" value="1000.588a03a64cecf7dbf83ddd82797f37af.2d16a127b1afa8704a959ee19640ce9d">
	<input type="text" name ="redirect_uri" id="scope" value="http://localhost/Zoho/">
	<input type="text" name="client_id" value="1000.IUCUZN2ZUO6I66351WC18XUC7UVDEA">
	<input type="text" name="client_secret" value="62588ef0052594c144dc1c85e783c1c83aa2d13f85">
	<input type="text" name="grant_type" value="authorization_code">

	<input type="submit" value="Refresh Code">
</form> -->