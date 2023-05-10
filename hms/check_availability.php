<?php 
require_once("include/config.php");  /*this has the much needed configation settings and,
 details of the database connection. This also checks if there the email what is being submitted is,
 not empty */
if(!empty($_POST["email"])) {   /*here we can see that if the field of the email has not been empty then,
	it gets the value of field of the email and assigns that to the $email variable */
	$email= $_POST["email"];
	/*  this also counts all the numers of rows that have been returned from the query by the help of the query
	called mysqli_num_rows().  */
		$result =mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
/*  If in the case that the count is higher than the value 0 then the code proceeds the same action    */


?>
