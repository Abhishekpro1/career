<?php 
include("config.php");
if(isset($_POST["submit"]))
{
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$query = mysqli_query($con,"INSERT INTO contact(name,last_name,email,phone,message) values ('$name','$last_name','$email','$phone','$message')");
    if($query)
    {
         
         header("location: contact.php");
       
    }

}
if(isset($_POST['subscribing']))
{
    $subscribe_email = $_POST['subscribe_email'];
    $query = mysqli_query($con,"INSERT INTO subscribe(subscribe_email) values ('$subscribe_email')");
    if($query)
    {
         
         header("location: placement.php");
       
    }
     $query = mysqli_query($con, "SELECT * FROM subscribe where subscribe_email = '$subscribe_email'");
            if(mysqli_num_rows($query)<0)
            {
                // echo "Invalid Username/Password";
                echo "<script>alert('Invalid email')</script>";
            }
}

if(isset($_POST["sign_up"]))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    
	$query = mysqli_query($con,"INSERT INTO registration_form(name,email,number,password,date_of_birth) values('$name','$email','$number','$password','$date_of_birth')");
    if ($query) {
		header("location: login.php");
	}
}
?>