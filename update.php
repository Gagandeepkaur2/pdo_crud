<?php
    $connect=new PDO("mysql:host=localhost;dbname=practicesql","root","");
    $getid=$_GET['EmpId'];
    $name=$_GET['FullName'];
    $managerid=$_GET['ManagerId'];
    $date=$_GET['DateOfJoining'];
    $city=$_GET['City'];
    $query=$connect->prepare("update employeedetails set FullName= '$name', ManagerId = '$managerid', DateOfJoining= '$date', City= '$city' where EmpId= '$getid'");
    if($query->execute())
    {
        echo "Record Updated";
    }
    else
    {
        echo "Record Not Updated";
    }
?>
    