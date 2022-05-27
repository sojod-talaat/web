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
   
    $sql="SELECT * FROM COURSES";
    $result=mysqli_query($conn,$sql);

    if(isset($_GET['view '])){
        $id=$_GET['view'];
        $sql="SELECT * FROM COURSES WHERE COURSE_ID=$ID ";
        $result=mysqli_query($conn,$sql);
        $name = $row['course_name'];
        $star = $row['date_start'];
        $end=$row['date_end'];
        $total=$row['hours_num'];
        $instiution=$row['institution'];
    }




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
<a href="ViewCourses.php" class="active">Courses Information</a>
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
<div class="div2">
                <h1>All Courses Information </h1>
                  <br>
               <table border="1" class="tablecourse">
                    <tr class="tableheder">
                    <th rowspan="2"># </th>
                    <th rowspan="2" id="c"> Course Name</th>
                    <th rowspan="2">Total Hours</th>
                    <th colspan="2" id="c">Date</th>
                    <th rowspan="2" id="c">Institution</th>
                    <th rowspan="2">Attachment</th>
                    <th rowspan="2">Notes</th>
                    </tr>
                    <tr class="tableheder">
                       <th id="c">From</th>
                       <th id="c">To</th>
                    </tr>
                    <?php 
                    while($row = mysqli_fetch_assoc($result)):  
                    ?> 

                   <tr class="tab1">
                   <td><?php echo $row['coruse_id']?> </td>
                  <td> <?php echo $row['course_name']?> </td>
                  <td> <?php echo $row['hours_num']?></td>
                   <td><?php echo $row['date_start']?></td>
                    <td><?php echo $row['date_end']?></td>
                    <td><?php echo $row['institution']?></td>
                    <td><a href="CourseView.php?view= <?php echo $row ['coruse_id'];?>"  name="view"> View</a>
                    </td>
                      <td> <?php echo $row['note']?></td>
                    </tr>
                    <?php endwhile;?>
                                </table>
                </div>
               
</body>
</html>