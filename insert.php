<?php
include 'config.php';
if(isset($_POST['submit']))
{    
    $id = $_POST['id']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "INSERT INTO users (id,name,email,balance)
    VALUES ('$id','$name','$email','$balance')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('New user added');
        window.location='main.php';
        </script>";    
} else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
     mysqli_close($conn);
}
?>