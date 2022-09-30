<?php
    $connect=new PDO("mysql:host=localhost;dbname=practicesql","root","");   
    $sql=$connect->prepare("select * from employeedetails");
    $sql->execute();
    while ($row=$sql->fetch(PDO :: FETCH_ASSOC)) 
    {
      echo "{$row['EmpId']} - {$row['FullName']} - {$row['ManagerId']} - {$row['DateOfJoining']} - {$row['City']} </br>";
    }
?>