<?php


/**
 * Iterates through an erros array and returns true if it finds any error, else false
 * 
 */
function hasErrors($errors)
{
	foreach ($errors as $error => $value) {
		if (!empty($value)) {
			return true;
		}
	}
	return false;
}

function clean_input($input){
	$input = trim($input);
	$input = stripcslashes($input);
	$input = htmlspecialchars($input);
	return $input;
}


function clean_name($name){

	if (preg_match('/^[a-zA-Z ]*$/', $name)) {
      return true;
    }else{
    	return false;
    }
}

function name_1($fname){
	if ((strlen($fname))>3) {
		return true;
	}else{
		return false;
	}
}

function name_2($name){
	if ((strlen($name))>20) {
		return true;
	}else{
		return false;
	}
}


function id_verification($id_number){

if(preg_match('/^[0-9]{8}+$/', $id_number)) {
return true;
} else {
return false;
}
}

function email_verification($email){

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
} else {
    return false;
}
}

function phone_number($phone){

if(preg_match('/^[0-9]{10}+$/', $phone)) {
return true;
} else {
return false;
}
}

function Year_verification($year){

if(preg_match('/^[0-9]{4}+$/', $year)) {
return true;
} else {
return false;
}
}

function ege1_verification($yob){
	$yob = $_POST['yob'];
	if ($yob>date('Y')) {
		return true;
	}else{
		return false;
	}
}


function age2_verification($yob){
$yob = $_POST['yob'];
if ((date('Y')-$yob)>18) {
	return true;
}else{
	return false;
}
}


function age3_verification($yob){
$yob = $_POST['yob'];
if ((date('Y')-$yob)>100) {
	return true;
}else{
	return false;
}
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}



function uploadphoto() {
	if (!isset($_FILES["photo"]) || empty($_FILES["photo"])) {
		return false;
	}


	$target_dir = "uploads/";
	$randxx = generateRandomString();
	$target_file = $target_dir . $randxx .  basename($_FILES["photo"]["name"]);

	if (empty($target_file)) {
		return false;
	}

	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	// die ($target_file);
	if (empty($_FILES["photo"]["tmp_name"])) {
		return false;
	}
	$check = getimagesize($_FILES["photo"]["tmp_name"]);
	if($check !== false) {
		$uploadOk = 1;
	} else {
		$uploadOk = 0;
		return false;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		return false;
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
		return $target_file;
		} else {
		return false;
		}
	}
}






?>