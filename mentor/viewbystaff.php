<?php 
include('dbcon.php');
include('session.php'); 

$r=mysqli_query($con, "select * from users_mentor where user_id='$session_id'")or die('Error In Session');
$r1=mysqli_fetch_array($r);

$n=  $_POST['m'];
$a = $_POST['a'];
$s = $_POST['s'];


$student=mysqli_query($con,"select * from student"."$a"."sem$s where mentor='$n'");
$Result=mysqli_query($con,"select Result from Result"."$a"."sem$s R, student"."$a"."sem$s S where S.Class=R.Class AND S.Rno=R.Rno AND mentor='$n'");
$Aptitude=mysqli_query($con,"select Aptitude,English,Reasoning from Aptitude"."$a"."sem$s R, student"."$a"."sem$s S where S.Class=R.Class AND S.Rno=R.Rno AND mentor='$n'");
$Attendancem1=mysqli_query($con,"select Theory,Practical from Attendancem1"."$a"."sem$s R, student"."$a"."sem$s S where S.Class=R.Class AND S.Rno=R.Rno AND mentor='$n'");
$Attendancem2=mysqli_query($con,"select Theory,Practical from Attendancem2"."$a"."sem$s R, student"."$a"."sem$s S where S.Class=R.Class AND S.Rno=R.Rno AND mentor='$n'");
$Attendancem3=mysqli_query($con,"select Theory,Practical from Attendancem3"."$a"."sem$s R, student"."$a"."sem$s S where S.Class=R.Class AND S.Rno=R.Rno AND mentor='$n'");

$row1=mysqli_fetch_row($Result);
$row2=mysqli_fetch_row($Aptitude);
$row3=mysqli_fetch_row($Attendancem1);
$row4=mysqli_fetch_row($Attendancem2);
$row5=mysqli_fetch_row($Attendancem3);

  

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>This is <?php echo $n ?>'s Mentees Information </h3></center>
<table border="1" align="center">
<th>Class</th>
<th>Rno</th>
<th>Mentee's name</th>
<th>Parent</th>
<th>Student Contact</th>
<th>Parent Contact</th>
<th>email</th>
<th>Result</th>
<th>Aptitude</th>
<th>English</th>
<th>Reasoning</th>
<th>Monnth1_TH</th>
<th>Monnth1_PR</th>
<th>Monnth2_TH</th>
<th>Monnth2_PR</th>
<th>Monnth3_TH</th>
<th>Monnth3_PR</th>
<tr>
<?php while ($row=mysqli_fetch_row($student))
    { ?>
<td><?php echo $row['0']; ?> </td>
<td><?php echo $row['1']; ?> </td>
<td><?php echo $row['2']; ?> </td>
<td><?php echo $row['3']; ?> </td>
<td><?php echo $row['4']; ?> </td>
<td><?php echo $row['5']; ?> </td>
<td><?php echo $row['6']; ?> </td>
<td><?php echo $row1['0']; ?> </td>
<td><?php echo $row2['0']; ?> </td>
<td><?php echo $row2['1']; ?> </td>
<td><?php echo $row2['2']; ?> </td>
<td><?php echo $row3['0']; ?> </td>
<td><?php echo $row3['1']; ?> </td>
<td><?php echo $row4['0']; ?> </td>
<td><?php echo $row4['1']; ?> </td>
<td><?php echo $row5['0']; ?> </td>
<td><?php echo $row5['1']; ?> </td>
</tr>
<?  } ?>
 </table>
</div> <div>
<a href="home.php" > MENU </a > 
</div>

</body>
</html>
