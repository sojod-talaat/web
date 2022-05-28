<?php require_once('file.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../CSS/Mystyle.css"> 
</head>
<body> 
<?php

if(isset($_SESSION['message'])):?>
	<div class="alert">	
		<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		?>
</div>
<?php endif ?>
<?php   

//     $sql="CREATE TABLE EXPERIENCES(
//         id int(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     categoey VARCHAR(20),
//     title VARCHAR(30),
//     startmonth Date,
//     endmonth Date,
//     insutitution VARCHAR(30),
//     experince_desc VARCHAR(50000)
//     ) " ;
// if(!mysqli_query($conn,$sql)){
//   echo 'error creating table: '. mysqli_errno($conn);
// }

if(isset($_POST['insert'])){
    $ex_category=$_POST['languages'];
    $ex_title=$_POST['title'];
    $ex_start=$_POST['startOfDate'];
    $ex_end=$_POST['end'];
    $ins=$_POST['institution'];
    $ex_desc=$_POST['desc'];
   
    $sql = "INSERT INTO EXPERIENCES (
     categoey ,
     title ,
     startmonth ,
     endmonth ,
     insutitution,
     experince_desc 
     )
     VALUES (
         
         '$ex_category', 
         '$ex_title', 
         '$ex_start',
         '$ex_end',
         '$ins',
         '$ex_desc')";
  if(!mysqli_query($conn, $sql)){
  
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  $_SESSION['message'] = "Record has been inserted!";
  $_SESSION['msg_type'] = "warning";
 

	header("location: AddExperience.php");
   
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
<a href="Home.php">Personal Information</a>
</li>
<li>
<a href="ViewCourses.php">Courses Information</a>
</li>
<li>
<a href="ViewExperience.php">Experiences Information</a>
</li>
<li>
<a href="AddCourse.php">Add Course   </a>
</li>
<li>
<a href="AddExperience.php" class="active">Add experience   </a>
</li>

</ul>

</nav>
</header>
    


<!-- end header -->

    <!-- start form section -->
    <div class ="experinceFrom">

    <form action="<?php   echo $_SERVER['PHP_SELF'];?>"  method="post">
    <table>
<tr>
<td>Experiences Category: </td>
<td><select name="languages" class="select">
				<option value="freelancer"></option>
				<option value="freelancer">freelancer</option>
				<option value="job"> job </option>
                <option value="self learning">self learning </option>
				<option value="other"> other </option>
                
			                      </select></td>

</tr>
<tr>
<td> Experiences title:</td>
<td> <input type="text" name="title" ></td>

</tr>
<tr>
<td> Start month: </th>
<td><input type="date" name="startOfDate" ></td>

</tr>
<tr>
<td> End month:</td>
<td><input type="date" name="end" ></td>

</tr>
<tr>
<td> Institution: </td>
<td>  <input type="text" name="institution" > <br></td>

</tr>
<tr>
<td> Description:  </td>
<td> <textarea row="8" column="6" name="desc" > </textarea>  <br></td>
</tr>
<tr>
<td>   <input type="submit" value="Save" class="save " name="insert" >  </td>
<td>    <input type="rest" value="Reset" class="rest" id="rest"></td>

</tr>
</table>
    
    </form>

</div>
<!-- end form section  -->
<div>

    <img src="../images/image2.jpg" alt="" class="image2" >
    </div>
    
    
</body>
</html>