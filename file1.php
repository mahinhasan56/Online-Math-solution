<html>
<head>
	  <meta charset="UTF-8">
<title>regression model</title>
  <link rel="stylesheet" href="style.css">
<body background="image/im1.jpg">
<form method="post">
	<div class='addstaff'>
 <table align="center">
 	 <tr><td colspan='2' align='center' style='color:#FFFFFF;'>
                <h2><u>Enter Your Desired Value</u></h2></td></tr>
<tr>
<td>value of xi1 : </td>
<td><input type="text" id="xi1" name="xi1" /></td>
</tr>
<tr>
<td>value of xi2 : </td>
<td><input type="text" id="xi2" name="xi2" /></td>
</tr>
<tr>
<td>value of xi3 : </td>
<td><input type="text" id="xi3" name="xi3" /></td>
</tr>
<tr>
<td>value of xi4 : </td>
<td><input type="text" id="xi4" name="xi4" /></td>
</tr>
<tr>
<td>value of yi1 : </td>
<td><input type="text" id="yi1" name="yi1" /></td>
</tr>
<tr>
<td>value of yi2 : </td>
<td><input type="text" id="yi2" name="yi2" /></td>
</tr>
<tr>
<td>value of yi3 : </td>
<td><input type="text" id="yi3" name="yi3" /></td>
</tr>
<tr>
<td>value of yi4 : </td>
<td><input type="text" id="yi4" name="yi4" /></td>
</tr>
<tr>
<td colspan="2" align='center' style='padding-top:20px'>
<input type="submit" id="submit" name="submit" value="submit" /></td>
</td>
</tr>
</table>
</div>
<div class ='funny'>
<table align ="center">
<tr>
<th colspan="2">
<?php
if(isset($_REQUEST['submit']))
{
$xi1= $_REQUEST['xi1'];
$xi2= $_REQUEST['xi2'];
$xi3= $_REQUEST['xi3'];
$xi4= $_REQUEST['xi4'];
$yi1= $_REQUEST['yi1'];
$yi2= $_REQUEST['yi2'];
$yi3= $_REQUEST['yi3'];
$yi4= $_REQUEST['yi4'];
$sumxi= $xi1 + $xi2 + $xi3 + $xi4;


echo "<br/>The summation of angle : " , ($sumxi);
$sumyi= $yi1 + $yi2 + $yi3 + $yi4;
echo "<br/>The summation of Torque : " , ($sumyi);
$sumxisq= pow($xi1,2) + pow($xi2,2) + pow($xi3,2) + pow($xi4,2);
$sumxiyi= (($xi1)*($yi1)) + (($xi2)*($yi2)) + (($xi3)*($yi3)) + (($xi4)*($yi4));
$sumxiwh= pow($sumxi,2);


$k2=((4*($sumxiyi))-(($sumxi)*($sumyi)))/((4*($sumxisq))-($sumxiwh));
echo "<br/>The value of constant k2 : " , ($k2);
$yibar= ($sumyi)/4;
$xibar= ($sumxi)/4;
$k1=($yibar)-($k2*$xibar);
echo "<br/>The value of constant k1 : " , ($k1);
echo (log(2));
}
?>
</th>
</tr>
</table>
</div>
</form>
</body>
</html>