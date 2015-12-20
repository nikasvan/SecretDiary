<?php 

session_start();

if ($_GET['logout'] == 1 AND $_SESSION['id']){ 
    session_destroy();
    $message="You have been logged out";

}

include("connection.php");

if ($_POST['submit'] == "Sign Up") {
	
	if (!$_POST['email']) 
		$error.=" <br> Please Enter Your email";
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$error.=" <br> Please enter valid email address";
	if(!$_POST['password']) 
		$error.=" <br> Please enter your password";
    else{

    	if (strlen($_POST['password'])<8) 
    		$error.=" <br>Please enter password with at least 8 characters";
    	if (!preg_match("/[A-Z]/", $_POST['password'])) 
    		$error.=" <br>Please include at least one capital letter";
    }

    if($error) 
    	$error = "There were error(s) in your sign up details:".$error;
    else{

    	$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

    	$result = mysqli_query($link,$query);

    	$results = mysqli_num_rows($result);

    	if ($results) {

    		$error =  "That email adress is already in use";
    	}
    	else{

    		$query="INSERT INTO users (email, password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
    		
    		mysqli_query($link, $query);

    		echo "You have been signed up";

    		$_SESSION['id'] = mysqli_insert_id($link);

    		header("Location:mainpage.php");

 
    	}
    }
}

if ($_POST['submit'] == "Log In") {


    $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

    $result = mysqli_query($link,$query);

    $row = mysqli_fetch_array($result);

    if ($row) {
        
    	$_SESSION['id']=$row['id'];

    	print_r($_SESSION);

        header("Location:mainpage.php");
    }
else{
	$error =  "Coudn't Find user with that email or password. Please try again. ";
}

 }
 ?>


 <!--  <form method="post">
 	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
 	<input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>"/>
 	<input type="submit" name="submit" value="Sign Up">
 </form>

  <form method="post">
 	<input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
 	<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>"/>
 	<input type="submit" name="submit" value="Log In">
 </form> -->