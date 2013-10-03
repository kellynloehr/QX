<?php

session_start();

// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //

$usernames = array("dave", 'sara', "user3", "superman", "new one");  
$passwords = array("merrill", "stoddard", "password3", "supermans password", "new one");  

$random1 = 'secret_key1';
$random2 = 'secret_key2';


$hash = md5($random1.$pass.$random2); 

$self = $_SERVER['REQUEST_URI'];


// ************************************ //
// **********	USER LOGOUT  ********** //
// ************************************ //

if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}


// ******************************************* //
// **********	USER IS LOGGED IN	********** //
// ******************************************* //


if ( isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['username']==$usernames[0]) {


	    display_dave_page();?>
		
	<?php	
		
	}
elseif ( isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['username']==$usernames[1]) {


	    display_sara_page();?>
	    

	<?php	
		
	}



// *********************************************** //
// **********	FORM HAS BEEN SUBMITTED	********** //
// *********************************************** //

else if (isset($_POST['submit'])) {
for($i=0;$i<count($usernames);$i++){
  $logindata[$usernames[$i]]=$passwords[$i];
}


	if($logindata[$_POST["username"]]==$_POST["password"] && $_POST["username"]==$usernames[0]  )
  {
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = $hash;
		$_SESSION["username"] = $usernames[0] ;
		header("Location: $_SERVER[PHP_SELF]");
		
	}
if($logindata[$_POST["username"]]==$_POST["password"] && $_POST["username"]==$usernames[1]  )
  {
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = $hash;
			$_SESSION["username"] = $usernames[1] ;
	  header("Location: $_SERVER[PHP_SELF]");

   
	   } 
	 else {
		
		// DISPLAY FORM WITH ERROR
		display_login_form();
		echo '<p class="invalid">Username or password is invalid</p>';
		
	}
	
	
}			

	
// *********************************************** //
// **********	SHOW THE LOG-IN FORM	********** //
// *********************************************** //

else { 

	display_login_form();

}

function display_login_form(){	?>
<?php include 'includes/header.php'; ?>

		
 <div class="container clearfix" > 


   <div data-role="page" id="home"> <!-- Row of columns -->
        <form action="<?php echo $self; ?>" method='post' data-ajax="false">
	<label for="username">username</label>
	<input type="text" name="username" id="username">
	<label for="password">password</label>
	<input type="password" name="password" id="password">
	<input type="submit" name="submit" value="Get Started "class="submit" data-transition="pop">
	</form>	
           </div><!-- .row -->
 
</div>


<?php } ?>



<?php function display_sara_page(){ 

	include 'sara.php';
}
?>

<?php function display_dave_page(){ 

	include 'dave.php';
}
?>
<?php function display_sara_week(){ 

	include 'sara-week.php';
}
?>

