<?php 
$i=1;
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>ALIKE HOME</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
  <br><br><br><br>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;color: white;">Admin Panel</h1><br>
<center><img src="logo.png"style="width:280px;height:280px;"></center>

<?php   
}
?>
</body>
</html>