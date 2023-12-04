
<?php
session_start();
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE Forename =:username AND role = 1;" );
$stmt->bindParam(':username', $_POST['Username']);
$attempt= $_POST['Pword'];
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $hashed= $row['Password']; 
    if(password_verify($attempt,$hashed)){
        $_SESSION['name']=$row["Surname"];
        if (!isset($_SESSION['backURL'])){
            $backURL= "/"; 
        }else{
            $backURL=$_SESSION['backURL'];
        }
        unset($_SESSION['backURL']);
        header('Location: ' . $backURL);
    }else{
        header('Location: login.php');
    }
}
$conn=null;
?>


