<?php


function secure_array($array)
{
 // this function secures the content of an array against SQL injection and HTML code injection attacks
 // it works for arrays of any number of dimensions, recursively for each dimension

 if (isset($array))
 {
     foreach ($array as $key => $value)
     {
          if (is_array($array[$key])) // if element is array, then go to next dimension
          {
           secure_array($array[$key]);
          }
          else // if element is a normal variable, clean it up
          {
           $array[$key] = $mysqli -> real_escape_string($array[$key]); // replace this with mysql / PDO real escape string function depending on which database connector you are using
           $array[$key] = strip_tags($array[$key]);
          }
     }

 }
}


$state= secure_array($_GET['state']);

$state=htmlspecialchars($_GET['state']);
	include_once 'dbconnect.php';
$consulta = $mysqli->query("SELECT * FROM stores WHERE state = '$state' AND desactivar = 0 ORDER BY name ASC");


while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))
{
$name = $row['name'];
	echo '
<option>'.$name.'</option>
';

}


?>
