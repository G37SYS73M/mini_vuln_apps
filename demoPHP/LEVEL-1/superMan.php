<?php 

session_start();

if(!isset($_SESSION['uid']) && $_COOKIE['asdasdasd']=='eWVz'){

    header('Location: index.php');

}
else{
   echo '<html>
    <body>
        FLAG{GOT IT}
    </body>
</html>';
}


?>



