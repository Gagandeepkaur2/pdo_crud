<?php
    $connect=new PDO("mysql:host=localhost;dbname=practicesql","root","");
    if(isset($_GET['FullName']) && isset($_GET['ManagerId']) && isset($_GET['DateOfJoining']) && isset($_GET['City']))
    { 
   	   $name=$_GET['FullName'];
       $managerid=$_GET['ManagerId'];
       $date=$_GET['DateOfJoining'];
       $city=$_GET['City'];
       $query=$connect->prepare("insert into employeedetails(FullName, ManagerId, DateOfJoining, City) values('$name', '$managerid', '$date', '$city')");
       if($query->execute())
       {
       	echo "Record Inserted";
       }
       else
       {
       	echo "Record Not Inserted";
       }
   }

?>