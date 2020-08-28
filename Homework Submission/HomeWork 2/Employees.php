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
    function InserValues($table,$Employee_Id,$First_Name,$Last_Name,$Email,$Phone_Number,$Hire_Date,$Job_Id,$Salary,$Commision_pct,$Manager_Id,$Department_Id)
    {
        $sql = "INSERT INTO ".$table." (Employee_Id,First_Name,Last_Name,Email,Phone_Number,Hire_Date,Job_Id,Salary,Commision_pct,Manager_Id,Department_Id) Values ('$Employee_Id','$First_Name','$Last_Name','$Email','$Phone_Number','$Hire_Date','$Job_Id','$Salary','$Commision_pct','$Manager_Id','$Department_Id');";
        CheckExistence($GLOBALS['link'],$sql);
    }
    $link = mysqli_connect('localhost','root','');
    Check_Connection($link);
    $dbName = 'LAB2';
    $sql = "CREATE DATABASE " .$dbName;
    CheckExistence($link,$sql);
    $link = mysqli_connect('localhost','root','',$dbName);
    Check_Connection($link);
    $tableName = 'Employees'; 
    $sql = "CREATE TABLE ".$tableName." (
        Employee_Id int(6) NOT NULL PRIMARY KEY,
        First_Name varchar(20) DEFAULT NULL,
        Last_Name varchar(25) DEFAULT NULL,
        Email varchar(25) NOT NULL,
        Phone_Number varchar(15) DEFAULT NULL,
        Hire_Date date NOT NULL,
        Job_Id varchar(10) NOT NULL,
        Salary int(8) DEFAULT NULL,
        Commision_pct int(2) DEFAULT NULL,
        Manager_Id int(6) DEFAULT NULL,
        Department_Id int(4) DEFAULT NULL);";
    CheckExistence($link,$sql);
    InserValues($tableName,100, 'Steven', 'King', 'SKING', '515.123.4567', '1987-06-17', 'AD_PRESS', 24000, NULL, NULL, 90);    
    InserValues($tableName,101, 'Neena', 'Kocchar', 'NKOCHHAR', '515.123.4568', '1989-09-21', 'AD_VP', 17000, NULL, 100, 90);    
    InserValues($tableName,102, 'Lex', 'DE Haan', 'LDEHAAN', '515.123.4569', '1993-01-13', 'AD_VP', 17000, NULL, 100, 90);    
    InserValues($tableName,103, 'Alexander', 'Hunold', 'AHUNOLD', '590.423.4567', '0000-00-00', 'IT_PROG', 9000, NULL, 102, 60);    
    InserValues($tableName,104, 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '0000-00-00', 'IT_PROG', 6000, NULL, 103, 60);    
    InserValues($tableName,107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '0000-00-00', 'IT_PROG', 4200, NULL, 103, 60);    
    InserValues($tableName,124, 'Kevin', 'Mourgos', 'KMORGOS', '650.123.5234', '0000-00-00', 'ST_MAN', 5800, NULL, 100, 50);    
    InserValues($tableName,101, 'Neena', 'Kocchar', 'NKOCHHAR', '515.123.4568', '1989-09-21', 'AD_VP', 17000, NULL, 100, 90111);    
    InserValues($tableName,141, 'Treena', 'Rajs', 'RRAJS', '650.121.5234', '0000-00-00', 'ST_CLERK', 3500, NULL, 124, 50);
    InserValues($tableName,142, 'Curtis', 'Davies', 'CDAVIES', '121.123.5234', '0000-00-00', 'ST_CLERK', 3100, NULL, 124, 50);
    InserValues($tableName,143, 'Randall', 'Matos', 'RMATOS', '121.123.5234', '0000-00-00', 'ST_CLERK', 2600, NULL, 124, 50);
    InserValues($tableName,144, 'Peter', 'Vargas', 'PVARGAS', '121.123.5234', '0000-00-00', 'ST_CLERK', 2500, NULL, 124, 50);
    InserValues($tableName,149, 'Eleni', 'Zlotkey', 'EZLOTKEY', '011.44.1344.429', '2000-01-29', 'SA_MAN', 10500, 0, 100, 80);
    InserValues($tableName,174, 'Ellen', 'Abel', 'EABEL', '44.1644.429017', '0000-00-00', 'SA_REP', 11000, 0, 149, 80);
    InserValues($tableName,176, 'Jnathon', 'Taylor', 'JTAILOR', '44.1644.429021', '0000-00-00', 'SA_MAN', 8600, 0, 149, 80);
    InserValues($tableName,178, 'Kimberely', 'Grant', 'KGRANT', '44.1644.429023', '0000-00-00', 'SA_MAN', 7000, 0, 149, NULL);
    InserValues($tableName,200, 'Jennifer', 'Whalem', 'JWHALEN', '515.123.4444', '0000-00-00', 'ADD_ASST', 4400, NULL, 101, 10);
    InserValues($tableName,201, 'Michael', 'Hartstein', 'MHARSTEIN', '515.123.5555', '0000-00-00', 'MK_MAN', 13000, NULL, 100, 20);
    InserValues($tableName,202, 'Pat', 'Fay', 'PFAY', '603.123.6666', '0000-00-00', 'MK_REP', 6000, NULL, 201, 20);
    InserValues($tableName,205, 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8050', '0000-00-00', 'AC_MGR', 12000, NULL, 101, 110);
    InserValues($tableName,206, 'William', 'Gietz', 'WGIETZ', '515.123.8181', '0000-00-00', 'AC_ACCOUNT', 8300, NULL, 205, 110);
?>