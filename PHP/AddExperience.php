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
<a href="Course_View.php">Courses Information</a>
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
    <form action="ViewCourse.php" method="post">
    <table>
<tr>
<td>Experiences Category: </td>
<td><select name="languages" class="select">
				<option value="Android"></option>
				<option value="java">Java</option>
				<option value="DataBase">Data Base</option>
                <option value="Html">Html</option>
			                      </select></td>

</tr>
<tr>
<td> Experiences title:</td>
<td> <input type="text" name="numberofhour" ></td>

</tr>
<tr>
<td> Start month: </th>
<td><input type="date" name="startOfDate" ></td>

</tr>
<tr>
<td> End month</td>
<td><input type="date" name="endtOfDate" ></td>

</tr>
<tr>
<td> URL </td>
<td>  <input type="text" name="url" > <br></td>

</tr>
<tr>
<td> Note:  </td>
<td> <textarea row="8" column="6" name="textarea" > </textarea>  <br></td>
</tr>
<tr>
<td>   <input type="submit" value="Save" class="save" >  </td>
<td>    <input type="submit" value="Reset" class="rest"></td>

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