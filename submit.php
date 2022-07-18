<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration";
// Create connection
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);


if(isset($_POST['firstname'])){
    
     $firstname = filter_input(INPUT_POST,'firstname');
            $lastname = filter_input(INPUT_POST,'lastname');
            $DOB = filter_input(INPUT_POST,'DOB');
            $phonemuber = filter_input(INPUT_POST,'phonenumber');
            
            $sql ="INSERT INTO players (firstname, lastname, DOB, phonenumber ) VALUES ('$firstname','$lastname','$DOB','$phonemuber')";

            $run = mysqli_query($conn,$sql) or die(mysqli_connect_error());

            if($run) {
                echo 'Submitted.';
            } else {
                echo 'Not Submitted.';
            }
}
  
?>