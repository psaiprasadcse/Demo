<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users")or die('Error In Session');

$row=mysqli_fetch_array($result);

$result1=mysqli_query($con, "select * from users_mentor")or die('Error In Session');


 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>

 <div >

<form name="enroll" method="post" action="viewbystaff.php" >
       
 <center> <h3> ENTER THE BELOW DETAILS</h3></center>
      <table border="1" align="center">
               <tr>
                    <td > Academic Year</td>
                    <td> <input type="text" name="a"/> </td>
                </tr>
                <tr>
                    <td > Semester</td>
                    <td> <input type="text" name="s"/> </td>
                </tr>
	<tr>
	<td> Choose Mentor </td>
	<td>
	 <select name="m">
<?php while ($row1=mysqli_fetch_array($result1))
    { ?>
  	<option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
  	
  	<?  } ?>
	</select> 
</td>
</td>
            
                
    <tr>
    <td>
      <input type="submit" value="SUBMIT" align="center"  > 
    </td>
<td><p><a href="logout.php">Log out</a></p>
   </td>
    
  </tr>


       
        </table>
		</form>
   </div>           
       <div>                     
  <p> Note: Academic Year Example: 2017_18 , Sem: 1 or 2 </p>
 </div> 
</body>
</html>
