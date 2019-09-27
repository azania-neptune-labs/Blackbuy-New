
<?php

session_start();
// variable declaration
$_SESSION['success'] = "";

require_once('connection.php');

//Save Product
if(isset($_POST['SaveProduct'])){
	// receive all input values from the form
	$psName = mysqli_real_escape_string($con, $_POST['psName']);
	$pCode = mysqli_real_escape_string($con, $_POST['pCode']);
	$psDescription = mysqli_real_escape_string($con, $_POST['psDescription']);
	$pPrice = mysqli_real_escape_string($con, $_POST['pPrice']);
	$pQuantity = mysqli_real_escape_string($con, $_POST['pQuantity']);
	$pCategory = mysqli_real_escape_string($con, $_POST['pCategory']);
	
	$image = $_FILES["image"]["name"];
	
	move_uploaded_file($_FILES["image"]["tmp_name"],"UpLoadedImages/" . $_FILES["image"]["name"]);
	
	//Check If the Product Already exist
	$CheckProductQuery = "SELECT * FROM tblproduct 
				WHERE productName='$psName' 
				AND productAmount = '$pPrice'
				AND productDesciption = '$psDescription'
				AND productCode = '$pCode '
				AND productQuantity = '$pQuantity'
				AND productCategory = '$pCategory'
				";
	$Presults = mysqli_query($con, $CheckProductQuery);
	
	if(mysqli_num_rows($Presults) == 0){
		$InsertQuery = "INSERT INTO `tblproduct`(`productName`, `productAmount`, `productDesciption`, `productCode`, `productQuantity`, `productCategory`, `productImage`) 
						VALUES ('$psName','$pPrice','$psDescription','$pCode','$pQuantity','$pCategory', '$image')";
						
		$succesPResults = mysqli_query($con, $InsertQuery);
		if($succesPResults){
			//Success Message here
			//echo "Inserted";
		}else{
			//Error Here
			echo "Error", mysqli_error($con);
		}
		
	}else{
		//Write Your Error Here
		echo "Error", mysqli_error($con);
	}
				
}

//Save Company

if(isset($_POST['SaveCompany'])){
	// receive all input values from the form
	$companyName = mysqli_real_escape_string($con, $_POST['companyName']);
	$TimeInOperation = mysqli_real_escape_string($con, $_POST['TimeInOperation']);
	$companyCategory = mysqli_real_escape_string($con, $_POST['companyCategory']);
	$TaxNumber = mysqli_real_escape_string($con, $_POST['TaxNumber']);
	$companyNumber = mysqli_real_escape_string($con, $_POST['companyNumber']);
	$BEElevel = mysqli_real_escape_string($con, $_POST['BEElevel']);
	
	//Check If the company exist
	$CheckCompanyQuery = "SELECT * FROM `tblcompany` 
							WHERE companyName = '$companyName'
							AND companyTimeOperation = '$TimeInOperation'
							AND companyCategory = '$companyCategory'
							AND companyTaxNumber = '$TaxNumber'
							AND companyNumber = '$companyNumber'
							AND companyBEELevel = '$BEElevel'
							";
	$Cresults = mysqli_query($con, $CheckCompanyQuery);
	
	if(mysqli_num_rows($Cresults) == 0){
		//echo "SaveCompany 1";
		$SaveCompanyQuery = "INSERT INTO `tblcompany`(`companyName`, `companyTimeOperation`, `companyCategory`, `companyTaxNumber`, `companyNumber`, `companyBEELevel`) 
							VALUES ('$companyName','$TimeInOperation','$companyCategory','$TaxNumber','$companyNumber','$BEElevel')";
		$succesCResults = mysqli_query($con, $SaveCompanyQuery);
		
		if($succesCResults){
			//echo "SaveCompany 2";
			//Success Message here
		}else{
			//Error Here
			echo "Error", mysqli_error($con);
		}
		
	}
}


//sign Up
if(isset($_POST['Sign_Up'])){
	// receive all input values from the form
	$FirstName = mysqli_real_escape_string($con, $_POST['USER_NAM']);
	$LastName = mysqli_real_escape_string($con, $_POST['USER_SURNAME']);
	$EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
	$UserType = mysqli_real_escape_string($con, $_POST['UserType']);
	$userAddress = mysqli_real_escape_string($con, $_POST['userAddress']);
	$Phone_Num = mysqli_real_escape_string($con, $_POST['Phone_Num']);
	$USER_PASSWORD = mysqli_real_escape_string($con, $_POST['USER_PASSWORD']);
	$CONFIRM_PASSWORD = mysqli_real_escape_string($con, $_POST['CONFIRM_PASSWORD']);
	
	
	
	//Check If the company exist
	$SQL = "SELECT FirstName, LastName, email, UserType, phone,user_password, user_address FROM  `userdetails`
							WHERE email = '$EMAIL'
							AND user_password = '$USER_PASSWORD'
							";
	$Cresults = mysqli_query($con, $SQL);
	
	if(mysqli_num_rows($Cresults) == 0){
		$SQL = "INSERT INTO `userdetails`(FirstName, LastName,phone, email, user_address, user_password, userType) 
							VALUES ('$FirstName','$LastName','$Phone_Num','$EMAIL','$userAddress', '$USER_PASSWORD', '$UserType')";

		$succesCResults = mysqli_query($con, $SQL);	
		if($succesCResults){
			echo "Successfully registered";
		}else{
			//Error Here
			echo "Error", mysqli_error($con);
		}
		
	}
}

//Login
if(isset($_POST['Login'])){
	// receive all input values from the form
	$EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
	$USER_PASSWORD = mysqli_real_escape_string($con, $_POST['USER_PASSWORD']);
	
	//Check If the company exist
	$SQL = "SELECT * FROM `userdetails` 
							WHERE email = '$EMAIL'
							";
	$Cresults = mysqli_query($con, $SQL);
	
	if(mysqli_num_rows($Cresults) > 0){
			echo "Successfully Logged in";
		}
		else
		{
			//Error Here
			echo "Error", mysqli_error($con);
		}
		
}


//review
if(isset($_POST['send'])){
	// receive all input values from the form
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	$product_rating = mysqli_real_escape_string($con, $_POST['product_rating']);
	
	//Check If the company exist
	$SQL = "SELECT * FROM `reviews` WHERE email = '$email'";

	$Cresults = mysqli_query($con, $SQL);
	
	if(mysqli_num_rows($Cresults) == 0){
		$SQL = "INSERT INTO `reviews`(FirstName,email, REVIEW, PRODUCT_RATING,productId) 
		VALUES ('$name','$email','$message','$product_rating')";

			$succesCResults = mysqli_query($con, $SQL);	
			if($succesCResults){
				echo "Successfully registered";
			}else{
				//Error Here
				echo "Error", mysqli_error($con);
			}
		
		}
					
}

//cart



// insert into khoza(khoza_id,foreign_id)
//SELECT(SELECT khoza_fiel From khoza where{condition} limit 1),(select foreign_id from foreign_table where{condition} limit 1)

?>