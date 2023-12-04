
<!DOCTYPE html>
<html>
<head>
    <title>User Options</title>
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
        
    <form action="books.php"  method = "post">
        <input type="submit" value="add books">
    </form>
    <form action="users.php"  method = "post">
        <input type="submit" value="add users">
    </form>
    <form action="admin.php"  method = "post">
        <input type="submit" value="admin reports">
    </form>
    <form action="logout.php"  method = "post">
        <input type="submit" value="log out">
    </form>
    <form action="student_options.php"  method = "post">
        <input type="submit" value="student mainpage">
    </form>

</form>
</body>
</html>

