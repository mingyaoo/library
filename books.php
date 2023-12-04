<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <?php
    session_start(); 
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    if (!isset($_SESSION['name']))
    {   
        header("Location:login.php");
    }
    ?>


    <form action="addbooks.php" method = "post">
    Book name:<input type="text" name="Bookname"><br>
    Author:<input type="text" name="Bookauthor"><br>
    <input type="submit" value="Add Subject">
    </form>
    <br>
    
    <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM tblbooks");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo($row["Bookname"].' - '.$row["Bookauthor"]."<br>");
    }
    ?>
</body>
</html>
