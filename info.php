<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("login");
$result=mysql_query("select * from students where username='$username' and password='$password'")
or die("failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	echo "Welcome ";
	echo strtoupper("$password");
echo " You Login Successfully";
}
else
{
echo "<script> alert('Wrong Name or Password'); 
window.location='login.php';
</script>";
}
$query="SELECT * FROM records where username='$username' and password='$password' ";
$records=mysql_query($query);
$query1="SELECT * FROM group2 where username='$username' and password='$password' ";
$record=mysql_query($query1);
?>


<html>
<head>
<title>ANDROID</title>
<link rel="shortcut icon" href="img/android.png"> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css">
<script>
function f1()
{
 window.open("index.html");
}
</script>
</head>
<body>
<div class="nav">
<div class="fix-wrapper">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="course.html">ABOUT US</a></li>
<li><a href="#">CONTACT US</a></li>
</ul>
</div>
</div>
<button onclick="f1()" style="border-radius:1px;position:relative;top:-35px;left:1600px;font-family:aria;"><b>LOG OUT</b></button>



<?php

$result=mysql_query("SELECT count(*) as count FROM records where username='$username' and password='$password' ")
or die("failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['count']>0){?>
<button onclick="f1()" style="border-radius:1px;position:relative;top:35px;left:1000px;font-family:aria;"><b>LOG OUT</b></button>

<h3 align="center">GROUP 1</h3>
<table width="780" border="1" cellpadding="1" cellspacing="1" align="center">
<tr>
<th>ID</th>
<th>USERNAME</th>
<th>OOPS</th>
<th>CST</th>
<th>NMST</th>
<th>CN</th>
</tr>
<tr> 
<?php
while($student=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$student['id']."</td>";
echo "<td>".$student['name']."</td>";
echo "<td>".$student['oops']."</td>";
echo "<td>".$student['cst']."</td>";
echo "<td>".$student['nmst']."</td>";
echo "<td>".$student['cn']."</td>";
echo "</tr>";
}}
?>

 </tr>
 </table>
 <?php

$result=mysql_query("SELECT count(*) as count FROM records where username='$username'  and password='$password'")
or die("failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['count']>0){?>
<br>
<table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td align="center"><b>Teacher's Information</b></td>

 </tr>
 </table>
 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center">
 <tr style="text-align:center">
 <th width="260">SUBJECT</th>
 <th width="260">TEACHER'S NAME</th>
 <th width="260">CONTACT NUMBER</th>
 </tr>
   <tr style="text-align:center">
 
 <td>OOPS</td>
 <td>Priyanka Gupta</td>
 <td>9875678793</td>
 </tr>
   <tr style="text-align:center">
 <td>CST</td>
 <td>Jagpreet Kaur</td>
 <td>9587623451</td>
 </tr>
   <tr style="text-align:center">
 <td>NMST</td>
 <td>Manisha Rani</td>
 <td>9469869878</td>
 </tr>
   <tr style="text-align:center">
 <td>CN</td>
 <td>Meenu Khurrana</td>
 <td>9463478407</td>
  </tr>
 </table>
<br> 

 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td align="center"><b>NOTICE</b></td></table>
 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td><a href="ucaselection.docx">1. UCA SELECTION NOTICE BATCH 2015</a></td>
</tr>
<tr>
 <td><a href="ucalist.docx">2. Seating Plan of UCA Test Selection (Batch 2015) </a></td>
</tr>
 <tr>
 <td><a href="medical.pdf">3. Medical Form</a></td>
</tr>
<tr>
 <td><a href="datesheet.pdf">4. Datesheet for End Term Examinations (Engg.) scheduled from 15-05-17 to 03-06-17</a></td>
</tr>

<?php
while($student=mysql_fetch_assoc($records))
{
echo "<tr>";
}}
?>
 </tr>
 </table>

<?php
$result=mysql_query("SELECT count(*) as count FROM  group2 where username='$username' and password='$password' ")
or die("failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['count']>0){?>
<button onclick="f1()" style="border-radius:1px;position:relative;top:35px;left:1000px;font-family:aria;"><b>LOG OUT</b></button>
<h3 align="center">GROUP 2</h3>
<table width="780" border="1" cellpadding="1" cellspacing="1" align="center">
<tr>
<th>ID</th>
<th>USERNAME</th>
<th>OOPS</th>
<th>CST</th>
<th>NMST</th>
<th>CN</th>
</tr>
<tr>
<?php
while($student1=mysql_fetch_assoc($record))
{
echo "<tr>";
echo "<td>".$student1['id']."</td>";
echo "<td>".$student1['name']."</td>";
echo "<td>".$student1['oops']."</td>";
echo "<td>".$student1['cst']."</td>";
echo "<td>".$student1['nmst']."</td>";
echo "<td>".$student1['cn']."</td>";
echo "</tr>";
}}
?>
</tr>
</table>
<?php

$result=mysql_query("SELECT count(*) as count FROM group2 where username='$username' and password='$password' ")
or die("failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['count']>0){?>
<br>
<table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td align="center"><b>Teacher's Information</b></td>

 </tr>
 </table>
 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center">
 <tr style="text-align:center">
 <th width="260">SUBJECT</th>
 <th width="260">TEACHER'S NAME</th>
 <th width="260">CONTACT NUMBER</th>
 </tr>
  <tr style="text-align:center">
 <td>OOPS</td>
 <td>Priyanka Gupta</td>
 <td>9875678793</td>
 </tr>
   <tr style="text-align:center">
 <td>CST</td>
 <td>Jagpreet Kaur</td>
 <td>9587623451</td>
 </tr>
   <tr style="text-align:center">
 <td>NMST</td>
 <td>Manisha Rani</td>
 <td>9469869878</td>
 </tr>
   <tr style="text-align:center">
 <td>CN</td>
 <td>Meenu Khurrana</td>
 <td>9463478407</td>
 </tr>
 </table>
 <br> 
 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td align="center"><b>NOTICE</b></td>
 </tr></table>
 <table width="780" border="1" cellpadding="1" cellspacing="1" align="center" >
 <tr>
 <td><a href="ucaselection.docx">1. UCA SELECTION NOTICE BATCH 2015</a></td>
</tr>
<tr>
 <td><a href="ucalist.docx">2. Seating Plan of UCA Test Selection (Batch 2015) </a></td>
</tr>
 <tr>
 <td><a href="medical.pdf">3. Medical Form</a></td>
</tr>
<tr>
 <td><a href="datesheet.pdf">4. Datesheet for End Term Examinations (Engg.) scheduled from 15-05-17 to 03-06-17</a></td>
</tr>
 <?php
while($student1=mysql_fetch_assoc($record))
{
echo "<tr>";
}}
?>
 </tr>
 </table>
</body>
</html>


