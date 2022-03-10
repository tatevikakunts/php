
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$names = ["first_name" => "Tata", "last_name"=> "Akunts"]; // changed the index of first element to First_name

print_r($names);

echo "<br>";

echo $names["first_name"] . " " . $names["last_name"]; //concatination

?>

</body>
</html>