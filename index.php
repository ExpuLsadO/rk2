<<!DOCTYPE html>
<html lang="ru">
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

<br>

<?php
 if ($_POST['oper'] =="sq") 
 {
     echo $_POST['number']*$_POST['number'];
 }
 else if ($_POST['oper'] =="kub")
 {
     echo $_POST['number']*$_POST['number']*$_POST['number'];
 }
    
 else if ($_POST['oper'] =="sqrt")
 {
     echo "0";
 }

else
{
    echo $_POST['number'] . "<br>" . $_POST['oper'];
}
    
?>
</body>
</html>
