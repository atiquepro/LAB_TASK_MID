<?php
$isPost=false;
$username="";
$password="";
$gender="";

if(isset($_POST["btnClick"])){
	
	$isPost=true;
	if($_POST["uname"]=="" || $_POST["pass"] || $_POST["gender"])
	{
		$username=$_POST["uname"];
		$password=$_POST["pass"];
		$gender=$_POST["gender"];
	}
	
}

?>


<form action='file2.php' method='post'>

Username : <input type='text' id='uname' name='uname'>

<?php
if($isPost==true && $username=""){
	
	echo "<span style='color:red'>required</span>";
	
}
?>

Password : <input type = 'password' id='pass' name='pass'><br><br>
<?php
if($isPost==true && $password=""){
	
	echo "<span style='color:red'>required</span>";
	
}
?>
Gender : <input type='radio' id='m' name='gender'><label for='m'>Male</label>
<?php
if($isPost==true && $gender=""){
	
	echo "<span style='color:red'>required</span>";
	
}
?>
<input type='radio' id='f' name='gender'><label for='f'>Female</label><br>
Address : <textarea rowspan='3' colspan='12'></textarea><br>
Skills : <input type='checkbox'>C++
<input type='checkbox'>Javascript
<input type='checkbox'>JAVA<br>
Department : <select name='dept'>

	<option>CSE</option>
	<option>EEE</option>
	<option>English</option>

</select><br>
<input type='submit' name='btnClick' value='click' method='post'>







</form>