<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    
    
<?php

for($g=1;$g<=10;$g++)
{
    echo "<tr>";
    
  for ($i=1; $i<=10;$i++)  
  {
      echo  "<td>" . $g*$i . "</td>" ;
  }
    
    echo "</tr>";
}

?>
</table>





<form action="" method="post">
<p>Ввидите число:
    <input type="number" name="number"/>
</p>

<p>Выберите операцию:
<select name="oper">
    <option name="q" value="sq">^2</option>
    <option name="qq" value="kub">^3</option>
    <option name="qqq" value="sqrt">sqrt</option>
    
</select>
</p>

<input type="submit" value="ок">
</form>

<?php
 if (isset($_GET('q')) !="NULL" )
 {
     echo $_GET('number')*$_GET('number');
 }

 else if (isset($_GET('qq'))!=NULL)
 {
     echo $_GET('number')*$_GET('number')*$_GET('number');
 }
    
 else if (isset($_GET('qqq')!=NULL))
 {
     echo "0";
 }
    
?>
</body>
</html>
