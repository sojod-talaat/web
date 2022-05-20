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
    $servername="localhost";
    $username="root";
    $passwpord="";
    $dbname="web";
    $conn=mysqli_connect($servername,$username,$passwpord,$dbname);
    if(!$conn){
        die('Connectio failed'. mysqli_connect_error());
    }

    $sql="SELECT * FROM course3";
    $result=mysqli_query($conn,$sql);

    // if(mysqli_num_rows($result)>0){

//    "NAME: ".$row["course_name"].
   
//     "houre: " .$row["hours_num"].

//     "data: " .$row["data_start"].

//     "end : " .$row["date_end"] .

//     "ins: ".$row["institution"].

//     "att ".$row["Attachment"].

//     "link:" .$row["link"].
    
//     "formfi : " .$row["form_file"].
    
//     "not:" .$row["note"].
//     "<br>";
// }
//     }

//     else{

//       echo "0 results";
//     }

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
<a href="Course_View.php" class="active">Courses Information</a>
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
                   <td>1 </td>
                  <td><?php echo $row['course_name']?> </td>
                  <td> <?php echo $row['hours_num']?></td>
                   <td><?php echo $row['date_start']?></td>
                    <td><?php echo $row['date_end']?></td>
                    <td><?php echo $row['institution']?></td>
                    <td><a href="<?php echo $row['Attachment']?>">View</a></td>
                      <td></td>
                    </tr>
                    <?php endwhile;?>
                                </table>
                </div>
               
</body>
</html>