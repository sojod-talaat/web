<?php require_once('file.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Mystyle.css"> 
    <title>Document</title>
</head>
<body>

<?php

//   $sql="CREATE TABLE PERSONAL(
//     id int(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     FULL_NAME VARCHAR(20),
//     Gender VARCHAR(10),
//     Birth Date,
//     Nationality VARCHAR(30),
//     JOB_TITLE VARCHAR(20),
//     Place_OF_BIRTH VARCHAR(15),
//     YEAR_OF_EXPERINECE INT (15),
//      image varchar(300)
//     ) " ;
// if(!mysqli_query($conn,$sql)){
//   echo 'error creating table: '. mysqli_errno($conn);
// }
// $sql="INSERT INTO PERSONAL ( 
//   FULL_NAME ,
//     Gender ,
//     Birth ,
//     Nationality ,
//     JOB_TITLE ,
//     Place_OF_BIRTH ,
//     YEAR_OF_EXPERINECE,
//        image
//   ) 
//   VALUES (
//   'sojod',
//   'Female', 
//   '2001-09-19',
//   'Palestinian',
//   'Flutter Developer',
//   'Gaza',
//  '2',
//     'image3.jpg'
// )
//  ";
//  if(!mysqli_query($conn,$sql)){
 
//  echo" failed inserted: " . mysqli_errno($conn);
//  }

$sql5="SELECT * FROM PERSONAL";
$result= mysqli_query($conn,$sql5);
?>
<header>
    <div class="img1">
<img id="img1" src="../images/aug_logo.png">
</div>

<div class="navdiv">

<nav>
<ul>
<li>
<a href="Home.php" class="active">Personal Information</a>
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
<a href="AddExperience.php">Add experience   </a>
</li>

</ul>

</nav>
</header>
<div class="personal">
<h1 >
        Personal Information
      </h1>
     
</div>

      <table class="tableinfo">
     
      <?php while($row = mysqli_fetch_assoc($result)):?> 
      <tr>
      
       <td>Full Name:</td>
      <b> <td id="bold"> <?php echo $row ['FULL_NAME'];?></td> </b>
      
</tr>

<tr>
<td>Gender:</td>
<td id="bold"> <?php echo $row ['Gender'];?></td> 
       
</tr>
<tr>
<td>Birth Date:</td>
<td id="bold"> <?php echo $row ['Birth'];?></td> 
       
</tr>   
<tr>
<td>Nationality:</td>
<td id="bold"> <?php echo $row ['Nationality'];?></td> 
       
</tr>  
<tr>
<td> Job title</td>
<td id="bold"> <?php echo $row ['JOB_TITLE'];?></td> 
       
</tr>  
<tr>
<td>Place Of Birth :</td>
<td id="bold"> <?php echo $row ['Place_OF_BIRTH'];?></td> 
       
</tr>  
<tr>
<td> year of experience</td>
<td id="bold"> <?php echo $row ['YEAR_OF_EXPERINECE'];?></td> 
       
</tr> 
    

      </table>
      
</div>

      <div class="image3">
         <img src="<?php echo "../images/".$row['image']; ?>" alt="sojod" class="img">
      </div>
      <?php endwhile?>  
    
</body>
</html>