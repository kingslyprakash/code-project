
<?php 
include("dbconnect.php"); 
session_start(); 
extract($_POST); 
if(isset($_POST['btn'])) 
{ 
$qry=mysql_query("select * from ureg where UserName='$uname' && Password='$pwd'"); 
$num=mysql_num_rows($qry); 
if($num) 
{ 
$row=mysql_fetch_array($qry); 
$pbkey=$row['PublicKey']; 
48 
$pvtkey=$row['PrivateKey']; 
$sname=$row['Name']; 
$_SESSION['Name']=$sname; 
$_SESSION['PublicKey']=$pbkey; 
$_SESSION['PrivateKey']=$pvtkey; 
//$_SESSION['Username']=$uname; 
?> 
<script language="javascript"> 
alert("login successfully.."); 
window.location.href="user.php"; 
</script> 
<?php 
} 
else 
{ 
?> 
<script language="javascript"> 
alert("login unsuccessfully.."); 
window.location.href="ulogin.php"; 
</script> 
<?php 
}
