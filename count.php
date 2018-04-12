<?php
require('classes/pdoDB.class.php');
require('classes/emailvalidator.class.php');
//require('classes/session.class.php');


connect::init();
class connect {


	public static function init(){

			//$session = Session::getInstance();
			$db = pdoDB::getConnection();
			
			$CheckMail ="SELECT * FROM Persons";
		$sth = $db->prepare($CheckMail);
		
		$emailValue = $sth->fetch();
		print_r($emailValue);

	}

	


}

?>