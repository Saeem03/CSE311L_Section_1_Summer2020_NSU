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
    function InserValues($table,$Location_id, $Street_Address, $Postal_Code, $City, $State_Province, $Country_ID)
    {
        $sql = "INSERT INTO ".$table." (Location_id, Street_Address, Postal_Code, City, State_Province, Country_ID) Values ('$Location_id', '$Street_Address', '$Postal_Code', '$City', '$State_Province', '$Country_ID');";
            CheckExistence($GLOBALS['link'],$sql);
    }
    $link = mysqli_connect('localhost','root','');
    Check_Connection($link);
    $dbName = 'LAB2';
    $sql = "CREATE DATABASE " .$dbName;
    CheckExistence($link,$sql);
    $link = mysqli_connect('localhost','root','',$dbName);
    Check_Connection($link);
    $tableName = 'Locations'; 
    $sql = "CREATE TABLE ".$tableName." (
        `Location_id` int(4) NOT NULL PRIMARY KEY,
        `Street_Address` varchar(40) DEFAULT NULL,
        `Postal_Code` varchar(12) DEFAULT NULL,
        `City` varchar(30) NOT NULL,
        `State_Province` varchar(25) DEFAULT NULL,
        `Country_ID` varchar(2) DEFAULT NULL);";
    CheckExistence($link,$sql);
    InserValues($tableName,1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US');
    InserValues($tableName,1500, '2011 Interiors Blvd', '99236', 'South San\r\nFrancisco', 'California', 'US');
    InserValues($tableName,1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US');
    InserValues($tableName,1800, '460 Bloor St. W.', 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA');
    InserValues($tableName,2500, 'Magdalen Centre- The Oxford Sc.\r\nPark', 'OX9 9ZB', 'OXford', 'Oxford', 'UK');
    
?>