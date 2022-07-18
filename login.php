<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration";
// Create connection
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);


if(isset($_POST['email'])){
    
            $email = filter_input(INPUT_POST,'email');
            $password = filter_input(INPUT_POST,'password');
            
            
            $sql ="INSERT INTO login (email, password) VALUES ('$email','$password')";

            $run = mysqli_query($conn,$sql) or die(mysqli_connect_error());

            if($run) {
                echo 'Submitted.';
            } else {
                echo 'Not Submitted.';
            }
}
  
?>