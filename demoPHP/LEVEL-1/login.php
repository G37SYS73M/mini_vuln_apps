<?php 
include("includes/mysql_connect.php");

session_start();

if(isset($_POST['btn'])){

    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users where username = '$uname' AND password = '$pass' LIMIT 1";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)==1){
        $row = mysqli_fetch_assoc($res);
        print_r($row);
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['spc'] = $row['testing'];     

        if($_SESSION['spc']=='1'){
            setcookie("asdasdasd", "eWVz", time() + 2 * 24 * 60 * 60,"/DEMOPHP/LEVEL-1/");
            
        }
        
            header("Location: main.php");
        
        
    }
    else{
        header("Location: index.php?error=1");
    }
    
}

?>