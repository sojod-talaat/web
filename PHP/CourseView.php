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
	$id=$_GET['view'];
    $sql = " SELECT * FROM courses WHERE coruse_id=$id";
    $result = mysqli_query($conn, $sql); 
    $row=(mysqli_fetch_assoc($result));
   ?>
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
<a href="AddExperience.php">Add experience   </a>
</li>
</ul>
</nav>
</header>

<div class="view">
<h1> course <?php echo $row['course_name'];?> </h1>
<p>from  <?php echo $row['date_start'];?> to <?php echo $row['date_end'];?> totaly 50 training hours</p>
<p>Institution was "<?php echo $row['institution'];?>"</p>
<img src="<?php echo "../images/".$row['form_file']; ?>"  alt="" class="imgview">
</body>
</html> 