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
    function InserValues($table,$JOB_ID, $JOB_TITLE, $MIN_SALARY, $MAX_SALARY)
    {
        $sql = "INSERT INTO ".$table." (JOB_ID, JOB_TITLE, MIN_SALARY, MAX_SALARY) Values ('$JOB_ID', '$JOB_TITLE', '$MIN_SALARY', '$MAX_SALARY');";
            CheckExistence($GLOBALS['link'],$sql);
    }
    $link = mysqli_connect('localhost','root','');
    Check_Connection($link);
    $dbName = 'LAB3';
    $sql = "CREATE DATABASE " .$dbName;
    CheckExistence($link,$sql);
    $link = mysqli_connect('localhost','root','',$dbName);
    Check_Connection($link);
    $tableName = 'jobs'; 
    $sql = "CREATE TABLE ".$tableName." (
        JOB_ID VARCHAR(10) NOT NULL PRIMARY KEY,
        JOB_TITLE VARCHAR(35) NOT NULL,
        MIN_SALARY INT(6),
        MAX_SALARY INT(6));";
    CheckExistence($link,$sql);
    InserValues($tableName,'AD_PRES','President',20000,40000);
    InserValues($tableName,'AD_VP','Administration Vice President',15000,30000);
    InserValues($tableName,'AD_ASST','Administration Assistant',3000,6000);
    InserValues($tableName,'AD_MGR','Accounting Manager',8200,16000);
    InserValues($tableName,'AD_ACCOUNT','Public Accountant',4200,9000);
    InserValues($tableName,'SA_MAN','Sales Manager',10000,20000);
    InserValues($tableName,'SA_REP','Sales Representative',4200,9000);
    InserValues($tableName,'ST_MAN','Stock Manager',5500,8500);
    InserValues($tableName,'SA_CLERK','Stock Clerk',2000,5000);
    InserValues($tableName,'IT_prog','Programmer',4000,1000);
    InserValues($tableName,'MK_MAN','Marketing Manager',9000,15000);
    InserValues($tableName,'MK_REP','Marketing Representative',4000,9000);
    
?>