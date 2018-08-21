
<html>
<head>
<div id="Sign-In">
<form name="enroll" method="post" action="delete.php" >
        
 <center> <h3> ENTER THE BELOW DETAILS</h3></center>
      <table border="1" align="center">
               <tr>
                    <td > GRNO</td>
                    <td> <input type="text" name="g"/> </td>
                </tr>
<tr>
    <td>
      <input type="submit" value="SUBMIT" align="center"  > 
    </td>
<td><a href="home.php" > MENU </a > </td>
    
  </tr>

       
        </table>
		</form>
</body>
</html>


<?php
include('dbcon.php');
include('session.php');
$g = $_POST['g'];
$query = "delete from student where grno='$g'";
echo $query;
if(mysqli_query($con, $query))
{
echo "<h1> Deleted</h1>";
}
else
{
echo "fail";
}


?>
