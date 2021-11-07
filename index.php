<?php

$flag = false;

if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}


$name = $_POST['name'];
$mailId = $_POST['email'];
$usn = $_POST['usn'];
$message = $_POST['desc'];


$sql = "INSERT INTO `feedbackdatabase`.`feedback` ( `Name`, `Mail-id`, `USN`, `Message`, `Date`) VALUES ('$name', '$mailId', '$usn', '$message', current_timestamp());";


if($con->query($sql) == true){
    $flag = true;
}
else{
  //echo "ERROR: $sql <br> $con->error";

}

 $con->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container">
        <h1><center>This is a feedback form. You are free to leave your opinions below</center></h1>
         
      
        

        <form action="index.php" method="post"> 
            <input type="text" name="name" id="name" placeholder="Enter your Name:">
            <input type="email" name="email" id="email" placeholder="Enter your Mail-id:">
            <input type="text" name="usn" id="usn" placeholder="Enter your USN:">
            <textarea name = "desc" id = "desc" rows="10" cols="20" placeholder="Enter the feedback message:"></textarea> 
           <center> <button class="btn"><h2>Submit</h2></button>
            <button class="btn" type="reset"><h2>Reset</h2></button>
           </center>

          
           
        </form>


    </div>
   
<script src="index.js">

   /*INSERT INTO `feedback` (`Sl No`, `Name`, `Mail-id`, `USN`, `Message`, `Date`) VALUES ('1', 'Test', 'test@test.com', 'test112', 'This is a test message.', current_timestamp());*/


</script>

</body>
</html>







