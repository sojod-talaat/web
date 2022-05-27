<?php
 $servername="localhost";
 $username="root";
 $passwpord="";
 $dbname="web";
 $conn=mysqli_connect($servername,$username,$passwpord,$dbname);
 if(!$conn){
     die('Connectio failed'. mysqli_connect_error());
 }
?>