
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CODE EXEC LEVEL-1</title>
</head>

<body>
    <center>
        <h1> LOGIN TO ACCESS YOUR NEW APPLICAION</h1>
        <form action="login.php" method="POST">
            Username:<input type="text" name="username"/><br>
            Passowrd:<input type="password" name="password"/><br>
            <button name="btn">Login</button><br>
            <?php if(isset($_GET['error']) && $_GET['error']==1){echo "<h4>Invalid Creds</h4>";}?>
        </form>
    
    
    </center>
</body>

</html>