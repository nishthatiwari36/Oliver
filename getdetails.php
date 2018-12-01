<?php
session_start();
$faculty=$_SESSION['p'];
include('connection.php');
<Files login1.html>AddType application/x-httpd-php .html</Files>
$result1=mysqli_query($con,"select * from student_data where username='$faculty' order by usn;")or die("ERROR");
echo"<html>
<head>
<script>
function chk1()
{
window.location.href='index.html';
}

function re()
{
if(confirm(' Do you want to delete all student details.?'))
{
window.location.href='re.php';
}
}
</script>

<STYLE TYPE='TEXT/CSS'>


td{color:#99FFFF; font-size:18pt; align:center;}
th{font-size:20pt;}
tr{valign:center; color:darkgrey;align:center;}
label{font-size:'20pt' color:'#660000'}


</STYLE>
</head>
<body background='3.jpg'>
                 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         		         	$user=$db_field['usn'];
					/*add project id here*/         
       	               $pass=$db_field['quest'];
					
		
					
					
					echo"<tr><td >$user</td><td>$pass</td><td>$user1</td>";
					if($user1==2)
					{
					  echo"<td>$use</td><td></td><td></td><td></td></tr>";
					 
					}
					else
					{
					echo"<td>$m</td><td></td><td></td><td></td></tr>";
					
					}
					
					}
					echo"</table>";
				echo'<form align="center" action="login2.php" ><label><input type="button" name="Home" value="Home" onclick="chk1();"/>       <input type="button" name="Reset" value="Reset" onclick="re();" /></label></form></body></html>';
?>