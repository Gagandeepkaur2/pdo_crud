<?php
   $connect=new PDO("mysql:host=localhost;dbname=practicesql","root","");
   $id=$_GET['EmpId'];
   $query=$connect->prepare("select * from employeedetails where EmpId = :id");
   // $query->bindparam(':getid', $getid, PDO::PARAM_INT);
   $query->execute(array(':id' => $id));
   $query->execute();
   while ($row=$query->fetch(PDO :: FETCH_ASSOC)) {
       echo "{$row['EmpId']} - {$row['FullName']} - {$row['ManagerId']} - {$row['DateOfJoining']} - {$row['City']} </br>";
   }
?>

