<html>
<head>
<?php 
include('dbcon.php');
include('session.php'); 

$a = $_POST['a'];
$s = $_POST['s'];

$query = "create table student"."$a"."sem$s(Class char(3),Rno int(3), Student varchar(30),Father varchar(30), Student_Contact varchar(11),Father_Contact varchar(11),email varchar(30), Mentor varchar(30))";

$r1 = "create table Result"."$a"."sem$s(Class char(3),Rno int(3), Result varchar(20))";

$a1 = "create table Aptitude"."$a"."sem$s(Class char(3),Rno int(3), Aptitude varchar(10),English varchar(10), Reasoning varchar(10))";

$atm1 = "create table Attendancem1"."$a"."sem$s(Class char(3),Rno int(3), Theory varchar(10),Practical varchar(10))";

$atm2 = "create table Attendancem2"."$a"."sem$s(Class char(3),Rno int(3), Theory varchar(10),Practical varchar(10))";

$atm3 = "create table Attendancem3"."$a"."sem$s(Class char(3),Rno int(3), Theory varchar(10),Practical varchar(10))";

if(mysqli_query($con, $query) && mysqli_query($con, $r1) && mysqli_query($con, $a1) && mysqli_query($con, $atm1) && mysqli_query($con, $atm2) && mysqli_query($con, $atm3))
{
echo "<h1> Database is Created  </h1>";
}
else
{
echo "fail";
}

?>
 <a href="home.php" > MENU </a > 
</html>
</head>


 

