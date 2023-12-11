
<!DOCTYPE html>
<html>
<head>
    <title>mainpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Library Database</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="adminshowoptions.php">admins</a></li>
        <li><a href="studentshowoptions.php">students</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> logout</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
    </nav>
    <?php
    session_start(); 
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    if (!isset($_SESSION['name']))
    {   
        header("Location:login.php");
    }
    ?>
    <form action="borrow.php"  method = "post">
        <input type="submit" value="borrow a book">
    </form>
    <form action="return.php"  method = "post">
        <input type="submit" value="return a book">
    </form>
    <form action="searchname.php"  method = "post">
        <input type="submit" value="search name of book">
    </form>
    <form action="searchtitle.php"  method = "post">
        <input type="submit" value="search title of a book">
    </form>



</form>
</body>
</html>

