<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
<title>LU Decomposition</title>
<body background="image/im1.jpg">
<form method="post">
	<div class='chita'>
<table align="center">
	 	 <tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>Enter Your Desired Value</u></h2></td></tr>
<tr>
<td>value of a11 : </td>
<td><input type="text" id="a11" name="a11" /></td>
&nbsp;&nbsp;
<td>value of a12 : </td>
<td><input type="text" id="a12" name="a12" /></td>
&nbsp;&nbsp;
<td>value of a13 : </td>
<td><input type="text" id="a13" name="a13" /></td>
</tr>
<tr>
<td>value of a21 : </td>
<td><input type="text" id="a21" name="a21" /></td>
&nbsp;&nbsp;
<td>value of a22 : </td>
<td><input type="text" id="a22" name="a22" /></td>
&nbsp;&nbsp;
<td>value of a23 : </td>
<td><input type="text" id="a23" name="a23" /></td>
</tr>
<tr>
<td>value of a31 : </td>
<td><input type="text" id="a31" name="a31" /></td>
&nbsp;&nbsp;
<td>value of a32 : </td>
<td><input type="text" id="a32" name="a32" /></td>
&nbsp;&nbsp;
<td>value of a33 : </td>
<td><input type="text" id="a33" name="a33" /></td>
</tr>
<tr>
<td colspan="6" align='center' style='padding-top:13px'>
<input type="submit" id="submit" name="submit" value="submit" /></td>
</td>
</tr>
</table>
</div>
<div class='cream'>
<table align="center">
<?php
if(isset($_REQUEST['submit']))
{
$a11= $_REQUEST['a11'];
$a12= $_REQUEST['a12'];
$a13= $_REQUEST['a13'];
$a21= $_REQUEST['a21'];
$a22= $_REQUEST['a22'];
$a23= $_REQUEST['a23'];
$a31= $_REQUEST['a31'];
$a32= $_REQUEST['a32'];
$a33= $_REQUEST['a33'];
$u11=$a11;
$u12=$a12;
echo "<tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>U matrix</u></h2></td></tr>";

echo "<tr><td>[u11 : $u11 &nbsp;</td>&nbsp;";
echo "<td>u12 : $u12 </td>";
$u13=$a13;
echo "<td>u13 : $u13 </td></tr>";
$u21=$a21-(($a21/$a11)*$a11);
echo "<tr><td>u21 : $u21 </td>";
$u22=$a22-(($a21/$a11)*$a12);
echo "<td>u22 : $u22 </td>";
$u23=$a23-(($a21/$a11)*$a13);
echo "<td>u23 : $u23 </td></tr>";
$u31=$a31-(($a31/$a11)*$a11);
echo "<tr><td>u31 : $u31 </td>";
$u32c=$a32-(($a31/$a11)*$a12);
$u33c=$a33-(($a31/$a11)*$a13);
$u32=$u32c-(($u32c/$u22)*$u22);
echo "<td>u32 : $u32 </td>";
$u33=$u33c-(($u32c/$u22)*$u23);
echo "<td>u33 : $u33 ]</td></tr>";

echo "<br/><tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>L matrix</u></h2></td></tr><br/><br/><br/>";
$l11=1;
echo "<tr><td>[l11 : $l11 </td>";
$l12=0;
echo "<td>l12 : $l12 </td>";
$l13=0;
echo "<td>l13 : $l13 </td></tr>";
$l21=($a21/$a11);
echo "<tr><td>l21 : $l21 </td>";
$l22=1;
echo "<td>l22 : $l22 </td>";
$l23=0;
echo "<td>l23 : $l23 </td></tr>";
$l31=($a31/$a11);
echo "<tr><td>l31 : $l31 </td>";
$l32=($u32c/$u22);
echo "<td>l32 : $l32 </td>";
$l33=1;
echo "<td>l33 : $l33 ]</td></tr>";
}
?>
</table>
</div>
</form>
</body>
</html>




