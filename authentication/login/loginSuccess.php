<?php
    session_start();
    if(isset($_SESSION["un"]) and isset($_SESSION["pass"])) 
    {
        echo "successfully logged in";
    }
    else 
    {
        header("location:main_login.php");
    }
?>