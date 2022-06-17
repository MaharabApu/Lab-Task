<?php
$isPost=false;
$username="";
$password="";
$gender="";
$skill="";
$department="";
$address="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked!";
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	if($_POST["gender"]!="")
		$gender=$_POST["gender"];
	if($_POST["skills"]!="")
		$skill=$_POST["skills"];
	if($_POST["dept"]!="")
		$department=$_POST["dept"];
	if($_POST["address"]!="")
		$address=$_POST["address"];
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required!!</small></span>";
}
?>
<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
{
	echo "<span style='color:red;'><small>Required!!</small></span>";
}
?>
<br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $gender=="")
{
	echo "<span style='color:red;'><small>Required!!</small></span>";
}
?>
<br><br>
Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python
<?php
if($isPost==true && $skill=="")
{
	echo "<span style='color:cyan;'><small>Required!!</small></span>";
}
?>
<br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>
<?php
if($isPost==true && $department=="")
{
	echo "<span style='color:red;'><small>Required!!</small></span>";
}
?>
<br><br>
Address:<textarea name="address" rowspan="4" colspan="30"></textarea>
<?php
if($isPost==true && $address=="")
{
	echo "<span style='color:green;'><small>Required!!</small></span>";
}
?>
<br><br>
<input type="submit" value="Log in" name="btnlogin">
</form>