<?php
    include("header.php");
?>
<?php
session_start();
@$user_id =$_SESSION['user_id'];
@$email = $_SESSION['email'];
$conn = mysqli_connect("localhost","root","","career_upgrade") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT * from users WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["password"] == $row["password"]) {
        mysqli_query($con, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE user-id='" . $_SESSION["user_id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
<section class="background_image_login">
    <div class="container_login">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Forget your password</h3>
			</div>
			<div class="card-body">
				<form  method="post">
					
                     <div class="input-group form-group">
                    <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-key"></i></span>   
                    <input type="password" name="newPassword" class="form-control" id="currentPassword" class="required" placeholder="Current Password"/> <br>
                         </div>	</div>		
					
                    <div class="input-group form-group">
                    <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>   
                        <input type="password" name="newPassword" class="form-control" id="newPassword"
                         placeholder="New Password"/>
						</div><br/>
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>   
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword"
                    class="required" placeholder="Confirm Password"/> 
						</div>
                    </div>
                    <div class="form-group">
						<input type="submit" value="SUbmit " class="btn float-right login_btn" name="login">
					</div>
				</form>
		</div>
	</div>
        </div>
</section>  
    <?php
            include("footer.php");
        ?>
<style>
.background_image_login{
background-image: url('images/login5.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container_login{
    padding-bottom: 10%;
    padding-top: 10%;
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 600px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: dodgerblue;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: dodgerblue;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: dodgerblue;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>