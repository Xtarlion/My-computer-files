<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $db_name = "smallform";

   $mycon = new  mysqli("$host" , "$username" , "$password", "$db_name");

   if (!$mycon -> connect_error){
   //  echo "Connection established successfully";
   }











?>