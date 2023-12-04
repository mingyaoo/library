
<?php

include_once("connection.php");
switch($_POST["role"]){
	case "Pupil":
		$role=0;
		break;
	case "Admin":
		$role=1;
		break;
}

echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["password"]."<br>";
echo $_POST["role"]."<br>";
$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Surname,Forename,Password,Role)VALUES (null,:surname,:forename,:password,:role)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':password', $hashed_password);
$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;
header('Location: users.php');

?>
