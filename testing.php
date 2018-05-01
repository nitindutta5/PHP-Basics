<html>
<head>
<h2>Enter any text</h2>
</head>
<body>
<form name="f2" action=testing.php method="post">
Enter text:<input type="text" name="t">
<br>
Option:<select name="Option">
<br>
<option value="Select">Select</option>
<option value="SOS">Size of String</option>
<option value="reverse">Reverse String</option>
<option value="checkpal">Check if palindrome</option>
</select>
<br>
<br>
<input type="submit" value="submit">
</form>
<?php

if(isset($_POST["t"]))
{
$t=$_POST["t"];
$option=$_POST["Option"];
if($option=="SOS")
{
echo"The size of the string is <br>";
echo strlen($t);
}
if($option=="reverse")
{
echo strrev($t);
}
if($option=="checkpal")
{
if((strrev($t))==$t)
{
echo"String is Palindrome";
}
else
{
echo"String is not Palindrome";
}
}
}

?>
</body>
</html>