<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
<title>inverse matrix</title>
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
//calculation
$p1=$a22*$a33;
$p2=$a23*$a32;
$inv1=$p1-$p2;

$k1=$a13*$a32;
$k2=$a12*$a33;
$inv2=$k1-$k2;

$m1=$a12*$a23;
$m2=$a13*$a22;
$inv3=$m1-$m2;

$z1=$a23*$a31;
$z2=$a21*$a33;
$inv4=$z1-$z2;

$sa1=$a11*$a33;
$sa2=$a13*$a31;
$inv5=$sa1-$sa2;

$sb1=$a13*$a21;
$sb2=$a11*$a23;
$inv6=$sb1-$sb2;


$sc1=$a21*$a32;
$sc2=$a22*$a31;
$inv7=$sc1-$sc2;


$sd1=$a12*$a31;
$sd2=$a11*$a32;
$inv8=$sd1-$sd2;


$se1=$a11*$a22;
$se2=$a12*$a21;
$inv9=$se1-$se2;


$detA=$a11*$a22*$a33+$a21*$a32*$a13+$a31*$a12*$a23-$a11*$a32*$a23-$a31*$a22*$a13-$a21*$a12*$a33


$invmatrix=1/$detA;

$mat1=$inv1*$invmatrix;
$mat2=$inv2*$invmatrix;
$mat3=$inv3*$invmatrix;
$mat4=$inv4*$invmatrix;
$mat5=$inv5*$invmatrix;
$mat6=$inv6*$invmatrix;
$mat7=$inv7*$invmatrix;
$mat8=$inv8*$invmatrix;
$mat9=$inv9*$invmatrix;


echo "<tr><td colspan='6' align='center' style='color:#FFFFFF;'>
                <h2><u>INVERSE matrix</u></h2></td></tr>";

echo "<tr><td>$mat1</td>&nbsp;";
echo "<tr><td>$mat2</td>&nbsp;";
echo "<tr><td>$mat3</td>&nbsp;";
echo "<tr><td>$mat4</td>&nbsp;";
echo "<tr><td>$mat5</td>&nbsp;";
echo "<tr><td>$mat6</td>&nbsp;";
echo "<tr><td>$mat7</td>&nbsp;";
echo "<tr><td>$mat8</td>&nbsp;";
echo "<tr><td>$mat9</td>&nbsp;</tr>";
}
?>
</table>
</div>
</form>
</body>
</html>




