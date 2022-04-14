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
    <!-- start header -->
    <header>
    <div class="img1">
<img id="img1" src="../images/alazhar.png">
</div>

<div class="navdiv">

<nav>
<ul>
<li>
<a href="Home.php">Personal Information</a>
</li>
<li>
<a href="Course_View.php">Courses Information</a>
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
    <!-- end header -->

    <!-- start form section -->
    <div class ="courseFrom">
    <form action="ViewCourse.php" method="post">
        <table>
        <tr>
<td>Course Name: </td>
<td> <input type="text" name="coursename" ></td>

</tr>
<tr>
<td>  Number Of Hour:   </td>
<td><input type="text" name="numberofhour" > </td>

</tr>
<tr>
<td> Start Date: </th>
<td><input type="date" name="startOfDate" ></td>
</tr>
<tr>
<td>  Institution: </td>
<td><input type="text" name="institution" > </td>

</tr>
<tr>
<td>  Attachment:    </td>
<td>    <input type="radio" name="file"> File <input type="radio" name="file"> URL </td>
</tr>
<tr>
<td> URL </td>
<td>   <input type="text" name="url" >  </td>
</tr>
<tr>
    <td>File: </td>
    <td><input type="file" name="Choose FILE" id=""></td>
</tr>

<tr>
    <td>
        Note:
    </td>
    <td> <textarea row="8" column="6" name="textarea" > </textarea></td>
</tr>
<tr>
<td id="lefttd">   <input type="submit" value="Save" class="save" >  </td>
<td>    <input type="submit" value="Reset" class="rest"></td>
</tr>


</table>

    </form>
</div>
<div>

    <img src="../images/image1.jpg" alt="" class="courseimage">
    </div>
    
    
</body>
</html>