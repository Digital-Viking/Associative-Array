<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

$number = array(10, 20, 49);
// a regular array;
echo $number[2] . "<br>";

$number = array('Ben', 'Mark', 'Jose', 'Juanita', 'Maria');
// a regular array;
//echo $number[0] . "<br>";
print_r($number);
echo "<br>";


$names = array("first_name" => 'David', "Last_Name" => 'Webb');
//print_r($name);
echo $names['first_name'] . " " . $names['Last_Name'];

?>

</body>
</html>
