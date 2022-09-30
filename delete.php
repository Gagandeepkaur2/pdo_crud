<?php
    $connect=new PDO("mysql:host=localhost;dbname=practicesql","root","");
    $getid=$_GET['EmpId'];
    $query=$connect->prepare("delete from employeedetails where EmpId= :getid");
    $query->execute(array(':getid' => $getid));
    if($query->execute())
    {
        echo "Record Deleted";
    }
    else
    {
        echo "Record Not Deleted";
    }
?>