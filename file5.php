<html>
<head>
<title>Backward Divided Difference</title>
<link rel="stylesheet" href="style.css">
<body background="image/im1.jpg">
	<div class='sim'>
	<table align="center">
		<tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>Backward Divided Difference Calculation</u></h2></td></tr>
<form method="post">
<table>
<tr>
<td><strong>Please Enter value of t : </strong></td>
<td><input type="text" id="t" name="t" /></td>
</tr>
<tr>
<td><strong>Please Enter value of step size :</strong></td>
<td><input type="text" id="dt" name="dt" /></td>
</tr>
<tr>
<td colspan="6" align='center' style='padding-top:13px'>
<input type="submit" id="submit" name="submit" value="submit" /></td>
</tr>
</table>
</div>
<div class='bean'>
<table align="center">
<tr>
<th colspan="2">
<?php
if(isset($_REQUEST['submit']))
{
$t= $_REQUEST['t'];
$dt= $_REQUEST['dt'];
$xi1=$t-$dt;
$xb=(2000*log(140000/(140000-(2100*$xi1))))-(9.8*$xi1);
$x=(2000*log(140000/(140000-(2100*$t))))-(9.8*$t);
$ans=(($x-$xb)/$dt);
echo "<tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>Solution </u></h2></td></tr>";
echo "<tr><td><strong>The value for backward divided differnce : ($ans)</strong></td></tr>";
}
?>
</th>
</tr>
</table>
</div>
</form>
</body>
</html>
