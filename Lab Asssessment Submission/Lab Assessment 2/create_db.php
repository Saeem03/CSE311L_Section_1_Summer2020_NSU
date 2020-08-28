<?php
    $link = mysqli_connect('localhost','root','');
    if($link == false)
    {
        die("Error : Could not connect.".mysqli_connect_errno());
    }
    $sql = "CREATE DATABASE VS_CODE_TEST";

    if(mysqli_query($link,$sql))
    {
        echo "DB Created";
    }
    else{
        echo "Error : Could notable to create DB." .mysqli_error($link);
    }
    mysqli_close($link)
?>