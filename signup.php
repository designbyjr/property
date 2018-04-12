<?php
require('classes/pdoDB.class.php');
require('classes/emailvalidator.class.php');
//require('classes/session.class.php');


connect::init();
class connect {


	public static function init(){

			//$session = Session::getInstance();
			$db = pdoDB::getConnection();
			
			//get email.
   			$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;


   			//check if email is an email
   			$Validator = emailvalidator::check($email);
   			
   			if($Validator===TRUE){
   				connect::execute($db,$email);
   			}
   			else{
   				header("Location: http://www.homelypla.net/notvalid");
   			}

	}

	public static function execute($db,$email){

		//check if email is in database.
		$CheckMail ="SELECT * FROM Persons WHERE email=:email";
		$sth = $db->prepare($CheckMail);
		$sth->bindParam(':email',  $email, PDO::PARAM_STR);
		$emailValue = $sth->fetch();

		if($emailValue===false){



			//$bv ="INSERT INTO users_table (email,refcode) VALUES (:email,:refcode)";
			$bv ="INSERT INTO Persons (email) VALUES (:email)";
			// construct login sql using placeholders
			$ath = $db->prepare($bv);
			// create an array for the placeholder values -notice I encrypt the password, in this example using md5
			$ath->bindParam(':email', $email, PDO::PARAM_STR);
			//$ath->bindParam(':addNote', $updateNote, PDO::PARAM_STR);
			$ath->execute();

			header("Location: http://www.homelypla.net/share");

		}
		else{
			//redirect to share page
			header("Location: http://www.homelypla.net/share");
		}





		///ALTERNATIVE

		//if true then redirect to share code


		//else create a hash


		/// check hash if it is not in DB


		//store hash and email



	}




}

?>