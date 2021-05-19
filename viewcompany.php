<?php
$id=$_REQUEST["id"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="select * from tbcompany where id='$id'";
$query=mysqli_query($db,$q);
while($res=mysqli_fetch_array($query))
{
extract($res);
echo "ID:$id<br>Company name:$cname<br>";
}
?>
