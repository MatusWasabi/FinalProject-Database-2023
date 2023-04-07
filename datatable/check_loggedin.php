<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    echo "Welcome ".$_SESSION['username']." with password of ".$_SESSION['password'];
}
else{
    echo "You have not logged in yet";
}

?>