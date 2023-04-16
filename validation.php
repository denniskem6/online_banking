<?php


$fname = '';
$lname = '' ;
$Id_number = '' ;
$email = '' ;
$phone_number = '' ;
$type_of_account = '';
$country = '';
$county = '';

$city = '';
$Year_of_birth = '';


$errors = [
	'fname' => '',
	'lname' => '',
	'Id_number' => '',
	'email' => '',
	'phone_number' => '',
	'type_of_account' => '',
	'country' => '',
	'county' => '',
	'terms' => '',
	'city' => '',
	'Year_of_birth' => '',
	'photo' => '',
	'form' =>''
];

if ($_SERVER['REQUEST_METHOD']=='POST') {
	//fname validation
	$fname = $_POST['fname'];
 	// check if fname is submitted / set. This thwarts fake requests
	if (!isset($fname) || empty($fname)) {
		$errors['fname'] = 'first name is required';
	} 	
	elseif (!clean_input($fname)) {
		$errors['fname'] = 'please enter a valid name';
	}
	elseif (!clean_name($fname)) {
		$errors['fname'] = 'first name can only be letters';
	}	
 	elseif (!name_1($fname)) { // check if is valid fname use the validation of name1 function
 		$errors['fname'] = 'your first name cannot be less than 3 characters';
 	}elseif (name_2($fname)) {
 		$errors['fname'] = 'your first name cannot be more than 20 characters';
 	}

//you can echo your data here for example your first name is "Dennis" to be displayed


 	//last name validation
 		$lname = $_POST['lname'];
 	// check if fname is submitted / set. This thwarts fake requests
	if (!isset($lname) || empty($lname)) {
		$errors['lname'] = 'last name is required';
	} 	
	elseif (!clean_input($lname)) {
		$errors['lname'] = 'please enter a valid name';
	}
	elseif (!clean_name($lname)) {
		$errors['lname'] = 'last name can only be letters';
	}	
 	elseif (!name_1($lname)) { // check if is valid fname use the validation of name1 function
 		$errors['lname'] = 'your last name cannot be less than 3 characters';
 	}elseif (name_2($lname)) {
 		$errors['lname'] = 'your last name cannot be more than 20 characters';
 	}


 	//to validate national id
 	$Id_number =$_POST['id_number'];
 	//first we validate it to be a clean input that is we strip slashes and html characters to prevent from cross site scripting
 	if (!isset($Id_number) || empty($Id_number)) {
		$errors['Id_number'] = 'Id number is required';
	}
	elseif (!clean_input($Id_number)) {
		$errors['Id_number'] = 'please enter a valid id number';
	}
	elseif (!id_verification($Id_number)) {
		$errors['Id_number'] = 'id number should be 8 characters and only numbers';
	}

	// to validate email
	$email = $_POST['email'];
	if (!isset($email) || empty($email)) {
		$errors['email'] = 'Email is required';
	}
	elseif (!clean_input($email)) {
		$errors['email'] = 'please enter a valid id number';
	}
	elseif (!email_verification($email)) {
		$errors['email'] = 'Please enter a proper email format';
	}

	//to validate phone number
	$phone_number = $_POST['phone_number'];
	if (!isset($phone_number) || empty($phone_number)) {
		$errors['phone_number'] = 'Phone number is required';
	}
	elseif (!clean_input($phone_number)) {
		$errors['phone_number'] = 'please enter a valid phone number';
	}
	elseif (!phone_number($phone_number)) {
		$errors['phone_number'] = 'Phone number should be 10 digit numbers';
	}

	//to validate type of account not completed
	
	if (!isset($_POST['accountType']) || empty($_POST['accountType'])) {
			$errors['type_of_account'] = 'Please select your account type';
	}else{
	$type_of_account = $_POST['accountType'];
	}


	$country =$_POST['country'];
	$county =$_POST['county'];
	$city =$_POST['city'];



	//to validate terms and conditions not completed
	if (!isset($_POST['agree']) || empty($_POST['agree'])) {
			$errors['terms'] = 'Agree to terms and conditions';
	}


	//to validate year of birth
	$Year_of_birth =$_POST['yob'];
	if (!isset($Year_of_birth) || empty($Year_of_birth)) {
		$errors['Year_of_birth'] = 'Year of birth is required';
	}
	elseif (!clean_input($Year_of_birth)) {
		$errors['Year_of_birth'] = 'please enter a valid year of birth';
	}
	elseif (!Year_verification($Year_of_birth)) {
		$errors['Year_of_birth'] = 'Year of birth should be 4 digits';
	}
	elseif (ege1_verification($Year_of_birth)) {
		$errors['Year_of_birth'] = 'Year of birth cannot be in the future';
	}
	elseif (!age2_verification($Year_of_birth)) {
		$errors['Year_of_birth'] = 'Only people over 18 are allowed';
	}
	elseif (age3_verification($Year_of_birth)) {
		$errors['Year_of_birth'] = 'Only people below 100 years are allowed';
	}

// function picaction(){
// $file = $_FILES['photo'];

//  $file_name = $_FILES['photo']['name'];
//  $fileTmpName = $_FILES['photo']['tmp_name'];
//  $file_size = $_FILES['photo']['size'];
//  $file_error = $_FILES['photo']['error'];
//  $file_type = $_FILES['photo']['type'];

// //allowed files to be uploaded in the website

//  $fileExt= explode('.',  $file_name);
//  $fileAactualExt = strtolower(end($fileExt));

//  $allowed = array('jpg', 'jpeg', 'png');

//  if (in_array($fileAactualExt, $allowed)) {
//  	if ($file_error ===0) {
//  		if ($file_size < 2097152) {
//  			$file_name_new = uniqid('', true).".".$fileAactualExt;
//  			$file_destination = 'uploads/'.$file_name_new;

//  			move_uploaded_file($fileTmpName, $file_destination);

//  			return $file_destination;
 			
//  			// $_POST['photo']= $file_name_new;
//  			// //echo $_POST['photo'];
//  			// $img = "uploads/".$_POST['photo'];
//  			// echo '<img src= "'.$img.'"style="width:300px; height:300px;" alt="my photo" /><br />';
//  			// //To display the image uploaded
//  			// // $image=$_FILES["photo"]["name"]; 
//  			// // $img="uploads/".$image;
//  			// // echo '<img src= "'.$img.'"style="width:200px; height:200px;" alt="my photo" /><br />';


//  		}else{
//  			$errors['photo'] = 'your file is too big';
//  		}
//  	}else{
//  		$errors['photo'] = 'there was an error uploading your file';
//  	}
//  }else{
//  	$errors['photo'] = 'you cannot upload this type of files';

// }
// }



	$passport_path = uploadphoto();

	if (!hasErrors($errors)) {
		//if there are no errors proceed to save to the database

	// echo json_encode($errors);

	// die();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "banking";
		
try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 		  $stmt = $conn->prepare("SELECT email FROM users WHERE email='$email'");
// 		  $stmt->execute();

  // // set the resulting array to associative
// 		  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
// 		  if ($result==false) {

		  	 $sql = "INSERT INTO users (fname, lname, national_id, email, phone_number, Type_of_account, country, county, city, yob)
		  VALUES ('$fname', '$lname', '$Id_number', '$email', '$phone_number', '$type_of_account', '$country', '$county', '$city','$Year_of_birth')";
		  // use exec() because no results are returned
		  $conn->exec($sql);
		  $last_id = $conn->lastInsertId();

		  $sql = "INSERT INTO uploads (userid, image_path)
		  VALUES ($last_id, '$passport_path')";
		   $conn->exec($sql);

		   echo "<h3>You data has been submitted successfully!</h3>";

		  // }else{
		  // 	echo "The email is already in the database";
		  // }
		 
} catch(PDOException $e) {
	 echo $sql . "<br>" . $e->getMessage();
}
	$conn = null;


}

	else{
		$errors['form']="failed to submit due to errors";
	}

}
