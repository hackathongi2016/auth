<?php
require 'scripts/class.loginscript.php';
include_once 'config.php';

	//Pull username, generate new ID and hash password
	$newuser = $_POST['newuser'];
	$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
	$pw1 = $_POST['password1'];
	$pw2 = $_POST['password2'];

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	//$formated_birthday = date('m/d/y',$birthday);
	$gender = $_POST['gender'];
	$avatar = $_POST['avatar'];

	//Enables moderator verification (overrides user self-verification emails)
	if (isset($admin_email)){
		$newemail = $admin_email;
	}
	else{
		$newemail = $email;
	}
//Validation rules
if ($pw1 != $pw2){
	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Els camps password han de coincidir</div><div id="returnVal" style="display:none;">false</div>';
}
elseif (strlen($pw1) < 4){
	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El password ha de tenir com a mínim 4 caràcters</div><div id="returnVal" style="display:none;">false</div>';
}
elseif(!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true ){
	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Has de posar una direcció de correu vàlida</div><div id="returnVal" style="display:none;">false</div>';
}
//Validation passed
else{
	if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1'])) ){

		//Tries inserting into database and add response to variable
		$a = new newUserForm;
		$response = $a->createUser($newuser, $newemail, $newpw, $name, $surname, $birthday, $gender, $avatar);
		//Success
		if($response == 'true'){

			echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';

			//Send verification email
			//$m = new mailSender;
			//$m->sendMail($newemail, $newuser, $newid, 'Verify');
		}
		//Failure
		else{ mySqlErrors($response); }
	}

	else{//Validation error from empty form variables
		echo 'An error occurred on the form... try again';
	}
};
?>
