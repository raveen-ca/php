<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
 <h1 style="color:Tomato;">Hello World</h1>
<p style="color:DodgerBlue;">Lorem ipsum...</p>
<p style="color:MediumSeaGreen;">Ut wisi enim...</p> 
 <h1 style="background-color:rgb(255, 99, 71);">...</h1>
<h1 style="background-color:#ff6347;">...</h1>
<h1 style="background-color:hsl(9, 100%, 64%);">...</h1>

<h1 style="background-color:rgba(255, 99, 71, 0.5);">...</h1>
<h1 style="background-color:hsla(9, 100%, 64%, 0.5);">...</h1> 

<div style="width:95%;">
<h3>PHP program to show list of HTML Color Codes</h3>
<p><h3>Pick Color with HEX and RGB code </h3></p>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr>
<td width="33%"><strong>Color</strong></td>
<td width="30%"><strong>Hex Code</strong></td>
<td width="30%"><strong>RGB Code</strong></td>
</tr>

<?
$colors = array();
while (true) {
$color = substr(str_shuffle('ABCDEF0123456789'), 0, 6);
$colors[$color] = '#' . $color;
if (count($colors) == 100 ) {

foreach($colors as $key=>$hexcode){
list($r, $g, $b) = sscanf($hexcode, "#%02x%02x%02x");

?>
<tr>
<td height='25' bgcolor='<?=$hexcode; ?>'></td>
<td><?=$hexcode; ?></td>
<td>rgb(<?=$r?>, <?=$g?>, <?=$b?>)</td>
</tr>
<?
}
break;
}
}

?>

</table>

</div> 
<?php
 
echo '<span style="color:#00FF00; font-size: 50px;"> '.$string. "Hello World!";
?> 

</body>
</html>

