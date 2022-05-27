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
    
    // $sql="DELETE FROM  EXPERIENCES where categoey='Html' ";
    // mysqli_query($conn,$sql);
 
    $sql="SELECT * FROM EXPERIENCES ";
    $result=mysqli_query($conn,$sql);
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
<a href="ViewExperience.php" class="active">Experiences Information</a>
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
<div class="div3">
    <h1>All Experiance Information</h1>
<br>
                    <?php 
                    while($row = mysqli_fetch_assoc($result)):  
                    ?> 
                <h2 class="web"><?php echo $row['title']?> <sub><?php echo $row['insutitution']?> / <?php echo $row['categoey']?></sub></h2>
                <p class="from">from <?php echo $row['startmonth']?> to <?php echo $row['endmonth']?></p>
                <p class="work"><?php echo $row['experince_desc']?>
                </p>
                <?php endwhile;?>        
                  </div>
</body>
</html>