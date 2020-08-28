<?php
    global $link;
    function Check_Connection($link)
    {
        if($link == false)
        {
            die ("Could not connect to the " .mysqli_connect_error($link));
        }
        echo "Connected to the " .mysqli_get_host_info($link);
        echo "\n";
    }
    function CheckExistence($link,$sql)
    {
        
        $Name = explode(" ",$sql)[2];
        if(mysqli_query($link,$sql))
        {
            echo $Name ." Created Successfully.";
        }
        else 
        echo "Error: " .$Name. " Could not be able to create." .mysqli_error($link);
        echo "\n";
    }
    function InserValues($table,$D_id,$name,$M_id,$L_id)
    {
        $sql = "INSERT INTO ".$table." (Department_id,Department_Name,Manager_id,Location_id) Values ('$D_id','$name','$M_id','$L_id');";
            CheckExistence($GLOBALS['link'],$sql);
    }
    $link = mysqli_connect('localhost','root','');
    Check_Connection($link);
    $dbName = 'LAB2';
    $sql = "CREATE DATABASE " .$dbName;
    CheckExistence($link,$sql);
    $link = mysqli_connect('localhost','root','',$dbName);
    Check_Connection($link);
    $tableName = 'Departments'; 
    $sql = "CREATE TABLE ".$tableName." (
        Department_id INT NOT NULL PRIMARY KEY,
        Department_Name VARCHAR(20) NOT NULL,
        Manager_id INT(3),
        Location_id INT(4));";
    CheckExistence($link,$sql);
    InserValues($tableName,10,'Administration',200,1700);    
    InserValues($tableName,20,'Marketing', 201, 1800);    
    InserValues($tableName,50, 'Shipping', 124, 1500);    
    InserValues($tableName,60, 'IT', 103, 1400);    
    InserValues($tableName,80, 'Sales', 149,2500);    
    InserValues($tableName,90, 'Executive', 100, 1700);    
    InserValues($tableName,110, 'Accounting', 205, 1700);    
    InserValues($tableName,190, 'Contracting', NULL, 1700);    
?>