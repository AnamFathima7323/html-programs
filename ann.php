<?php
 if(isset($_POST['res']))
{
 $res=$_POST['display'];
 $res=eval('return'.$res. ';');
 }
 ?>
 
 <html>
<head>
<title> CALCULATOR</title>
<style>

table{
background-color:gray;
padding:1px;
}

input{
width:100%;
}

</style>
</head>

<body>
<center>
<form name="cal" method="post">
<table>
<tr>
<td colspan="4">
<input type="text" name="display" value="<?php if(isset($res)){echo $res;} ?>">

</td>
</tr>


<tr>
<td><input type="button" value="1" onclick="cal.display.value +='1'"> </td>
<td><input type="button" value="2" onclick="cal.display.value +='2'"> </td>
<td><input type="button" value="3" onclick="cal.display.value +='3'"> </td>
<td><input type="button" value="+" onclick="cal.display.value +='+'"> </td>
</tr>

<tr>


<td><input type="button" value="4" onclick="cal.display.value +='4'"> </td>
<td><input type="button" value="5" onclick="cal.display.value +='5'"> </td>
<td><input type="button" value="6" onclick="cal.display.value +='6'"> </td>
<td><input type="button" value="-" onclick="cal.display.value +='-"> </td>
</tr>

<tr>
<td><input type="button" value="7" onclick="cal.display.value +='7'"> </td>
<td><input type="button" value="8" onclick="cal.display.value +='8'"> </td>
<td><input type="button" value="9" onclick="cal.display.value +='9'"> </td>
<td><input type="button" value="*" onclick="cal.display.value +='*'"> </td>
</tr>

<tr>
<td><input type="reset" value="c" onclick="cal.display.value +='c'"> </td>
<td><input type="button" value="0" onclick="cal.display.value +='0'"> </td>
<td><input type="submit" value="=" name="res"> </td>
<td><input type="button" value="/" onclick="cal.display.value +='/'"> </td>
</tr>
 </table>
</form>
</center>
</body>
</html>
