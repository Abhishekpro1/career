<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];

if (!empty($name) || !empty($password) || !empty($email) || !empty($number) || !empty($gender))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "register";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT ="SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (name, password, email, number, gender) values(?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum==0){
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssis",$name, $password, $email, $number, $gender);
            $stmt->execute();
            echo "New Record Inserted Sucessfully";
        } 
        else{
           echo "Someone Already Registered Using This Email"; 
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All Field are Required";
    die();
}

?>