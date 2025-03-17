<?php 
 
    $servername="localhost"; 
    $username="root"; 
    $password=""; 
    $dbname="diploma_4"; 
    $con=mysqli_connect($servername,$username,$password,$dbname); 

    if($con) 
    {
        echo "Database Connected Successfully!<br/>"; 
        $query="CREATE TABLE Account (AccountNumber BIGINT,Balance DECIMAL(10, 2) NOT NULL,Branch VARCHAR(50) NOT NULL)";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo "Table Account created successfully!!";
        }
        else{
            echo "Table Account is not created";
        }

        $qry="INSERT INTO Account(AccountNumber,Balance,Branch) VALUES ()";
    }
    else{
        echo mysqli_connect_error();
    }

// ------------------------------------------------


    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="diploma_Sem_4";
    
    $con=mysqli_connect($serverName,$userName,$password,$dbName);
    
    //another way
    /*
    in mysqli_connect() in this db name is option you can create database with query and the use after create;
        $conn=mysqli_connect($serverName,$userName,$password);
        mysqli_select_db($conn,"diploma-4");
        
        there is another way you can create with query 
        
        $dbName1="diploma_Sem_4";
        $query="CREATE DATABASE $dbName1";
        if(!$con){
            echo "connection failed".mysqli_connect_error();
        }
        echo "db connected successfully<br>";
        if(mysqli_query($con,$query)){
            echo "database created successfully<br>";
        }
        else{
            echo mysqli_error($con);
        }

    */


    if(!$con){
        echo mysqli_connect_error();
    }
    echo "db connected successfully<br><br>";

    // create 

    $query="CREATE TABLE Account(AccountNumber BIGINT NOT NULL,Balance DECIMAL(8,2) NOT NULL,Branch VARCHAR(50) NOT NULL)";
    $result=mysqli_query($con,$query);
    if($result){
        echo "table created successfully<br><br>";    
    }
    else{
        echo mysqli_error($con)."<br><br>";
    }

    //insert 

    // $query1="INSERT INTO Account(AccountNumber,Balance,Branch) VALUES 
    // (12345678901,4000.45,'rajkot'),
    // (12345678902,24000.45,'Morbi'),
    // (12345678903,54000.45,'Upleta'),
    // (12345678902,2000.45,'Dhoraji')";

    // $result1=mysqli_query($con,$query1);
    // if($result1){
    //     echo "data inserted successfully<br><br>";
    // }
    // else{
    //     echo mysqli_error($con);
    // }

    //select

    $query2="SELECT * FROM Account";
    $result2=mysqli_query($con,$query2);
    if(!$result2){
        echo mysqli_error($con);
    }
    else{
        //mysqli_fetch_row
        
        // while($row=mysqli_fetch_row($result2)){
        //     echo $row[0]."<br>";
        //     echo $row[1]."<br>";
        //     echo $row[2]."<br>";
        //     echo "----------<br>";
        // }

        //mysqli_fetch_assoc
        // while($row=mysqli_fetch_assoc($result2)){
        //     echo $row["AccountNumber"]."<br>";
        //     echo $row["Balance"]."<br>";
        //     echo $row["Branch"]."<br>";
        //     echo "----------<br>";
        // }

        //mysqli_fetch_array
        while($row=mysqli_fetch_array($result2)){
            echo $row["AccountNumber"]."<br>";
            echo $row["1"]."<br>";
            echo $row["Branch"]."<br>";
            echo "----------<br>";
        }

    }

    //delete

    $query3="DELETE FROM Account where Branch='rajkot' ";

    $result3=mysqli_query($con,$query3);
    if($result3){
        echo "data deleted successfully";
    }
    else{
        echo mysqli_error($con);
    }


    


?>