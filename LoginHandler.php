<title>1111</title>
<?php
Include "./include/Header.inc";
?>
	<menu>
		<a href="index.php"> Cover Letter </a> |
		<a href="resume.php">Resume</a> |
		<a href="book.php">Book</a> |
		<a href="contacts.php">Contact Me</a> | 
		<a href="hire.php">Hire Me</a> |  
		<a href="links.php">Links</a>
	</menu>
	<hr>
	<br>
		<?php
Include "./include/LeftBar.inc";
?>
		<?php
Include "./include/RightBar.inc";
?>

<?php

//creating session
    session_start();
	
//getting username and password from the login page
$user_name=$_POST['username'];
$password=$_POST['userpwd'];

//testing username and password
$test_username="HJ";
$test_password="hj123";


//comparing the username and password
if(($user_name===$test_username) && ($password===$test_password))
{
    
    //creating session variable
    $_SESSION['username']=$user_name;
  
    //displaying link to resume
	header("Location: ./Resume.pdf");
   	exit;
  
}
else
{
    //displaying the link to try again or contact
    echo "Invalid credentials; either <a href='mailto:hjafri@uccs.edu'>contact</a> to me or try it <a href='http://127.0.0.1/final/resume.php'>again</a>";
    session_unset();
	session_destroy();

	exit;
}

?>

