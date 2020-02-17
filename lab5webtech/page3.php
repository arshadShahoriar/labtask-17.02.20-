<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
include 'Student.php';
?>


<?php


 $_SESSION["blood"]=$_POST["blood"];


 $_SESSION["gender"]=$_POST["gender"];

 $_SESSION["degree"]=$_POST["degree"];


?>



<?php




$user = new Student( $_SESSION["name"],$_SESSION["email"],$_SESSION["date"],$_SESSION["gender"],$_SESSION["degree"],$_SESSION["blood"]);


echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";

echo $user->get_date();

echo "<br>";

echo $user->get_degree();

echo "<br>";

echo $user->get_gender();

echo "<br>";

echo $user->get_blood();
?>

<?php

$file = fopen("registration.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_date()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

$data = $user->get_degree()."\n";

fwrite($file, $data);

$data = $user->get_blood()."\n";

fwrite($file, $data);

fclose($file);


?>

</body>
</html>