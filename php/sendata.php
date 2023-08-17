<?php 
     include "mycon.php";
    if(isset($_POST['submitbtn'])){
        $name =$_POST['name'];
        $phoneno =$_POST['phoneno'];
        $email =$_POST['email'];
        $message =$_POST['message'];

        $insertquery ="INSERT INTO `form`( `name`, `phoneno`, `email`, `message`) VALUES ('$name','$phoneno','$email','$message')";

        if ($mycon -> query($insertquery) === TRUE){
            ?>
            <script>
                window.location = "../thanks.php";
            </script>
            <?php
        }
    }
    $mycon -> close();







?>