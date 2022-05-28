<?php require_once('file.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- //data about data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../CSS/Mystyle.css"> 
</head>
<body>

<?php 
    

// echo "Connection sucessfully";

// $sql= " CREATE TABLE COURSES (
//     coruse_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     course_name VARCHAR(30) ,
//     hours_num INT(10),
//     date_start DATE ,
//     date_end DATE,
//     institution VARCHAR(20),
//     Attachment VARCHAR(20),
//     link VARCHAR(10),
//     form_file VARCHAR(100),
//     note VARCHAR(30))";
// if (mysqli_query($conn, $sql)) {
// echo "Table course created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }
$b=false;
if(isset($_POST['att'])){
   return $b=true;
}


if(isset($_POST['insert'])){
    $filename=$_FILES['fileToUpload']['name'];
    $filetmpname=$_FILES['fileToUpload']['tmp_name'];
    $folder="../images/";
    move_uploaded_file($filetmpname,$folder.$filename);
   
    $name=$_POST['coursename'];
    $num=$_POST['numberofhour'];
    $start=$_POST['startOfDate'];
    $end=$_POST['endOfDate'];
    $ins=$_POST['institution'];
    $a=$_POST['att'];
    $ur=$_POST['urll'];
   
    $n=$_POST['note'];
    $sql = "INSERT INTO COURSES (
     
    course_name ,
     hours_num ,
     date_start  ,
     date_end ,
     institution ,
     Attachment ,
     link ,
     form_file ,
     note )
     VALUES (
         
         '$name', '$num', '$start','$end','$ins','$a','$ur','$filename','$n')";
  if(!mysqli_query($conn, $sql)){
  
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
   
  }

    
?>

    <!-- start header -->
    <header>
    <div class="img1">
    <img id="img1" src="../images/aug_logo.png">
</div>

<div class="navdiv">

<nav>
<ul>
<li>
<a href="Home.php" >Personal Information</a>
</li>
<li>
<a href="ViewCourses.php">Courses Information</a>
</li>
<li>
<a href="ViewExperience.php">Experiences Information</a>
</li>
<li>
<a href="AddCourse.php" class="active">Add Course   </a>
</li>
<li>
<a href="AddExperience.php">Add experience   </a>
</li>

</ul>

</nav>
</header>
    <!-- end header -->

    <!-- start form section -->
    <div class ="courseFrom">
    <form action="<?php   echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
        <table>
        <tr>
<td>Course Name: </td>
<td> <input type="text" name="coursename" ></td>

</tr>
<tr>
<td>  Number Of Hour:   </td>
<td><input type="number" name="numberofhour" true> </td>

</tr>
<tr>
<td> Start Date: </th>
<td><input type="date" name="startOfDate" ></td>
</tr>
<tr>
<td>End Date: </td>
<td><input type="date" name="endOfDate" id=""></td>


</tr>
<tr>
<td>  Institution: </td>
<td><input type="text" name="institution" > </td>

</tr>
<tr>
<td>  Attachment:    </td>
<td> <input type="radio" name="att" value="url" id="url"  checked="checked"> File 
     <input type="radio" name="att" value="file" id="file" > URL </td>
</tr>
<?php if($b=='url'): ?>
<tr>
<td> URL </td>
<td>   <input type="text" name="urll" >  </td>
</tr>
<?php else: ?>
<tr>
    <td>File: </td>
    <td><input type="file" name="fileToUpload" id=""></td>
</tr>
<?php endif; ?> 

<tr>
    <td>
        Note:
    </td>
    <td> <textarea row="8"
     column="6" name="note" > </textarea></td>
</tr>
<tr>
<td id="lefttd">   <input type="submit" value="Save" class="save" name="insert" >  </td>
<td>    <input type="rest" value="Reset" class="rest" id="rest" ></td>
</tr>
</table>
    </form>
</div>
<div>
    <img src="../images/image1.jpg" alt="" class="courseimage">
    </div>
    
    
</body>
</html>