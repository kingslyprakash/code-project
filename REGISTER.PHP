
<?php 
include("dbconnect.php"); 
session_start(); 
extract($_POST); 
$publickey=(rand(102111,512110)); 
$privatekey=(rand(2304780,9874025)); 
if(isset($_POST['btn'])) 
{ 
35 
$max_qry = mysql_query("select max(id) from ureg"); 
$max_row = mysql_fetch_array($max_qry); 
$id=$max_row['max(id)']+1; 
$qry=mysql_query("insert 
into 
ureg 
values('$id','$name','$gender','$mnumber','$emailid','$address','$uname','$pwd','$publickey','$p 
rivatekey')"); 
if($qry) 
{ 
?> 
<script language="javascript"> 
alert("Registered Successfully.."); 
window.location.href="ulogin.php"; 
</script> 
<?php 
} 
else 
{ 
?> 
<script language="javascript"> 
alert("Registered Unsuccessfully.."); 
window.location.href="ureg.php"; 
</script> 
<?php 
} 
} 
?> 
