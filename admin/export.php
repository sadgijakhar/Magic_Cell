<?php  
include('../includes/connect.php');
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

    header("Location: ../login.php");
    exit();
}
// include('querytable.php');
 if(isset($_POST["export"]))  
 {  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=unsolved.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Name', 'Email', 'Roll no', 'Mobile no', 'Year','Program','Issue Type','Breif','Date','Assigned To'));  
      $query = "SELECT * from `query`";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 if(isset($_POST["solved"]))  
 {  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Solved.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Name', 'Email', 'Roll no', 'Mobile no', 'Year','Program','Issue Type','Breif','Date','Remarks','Assigned To'));  
      $query = "SELECT * from `solved`";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 if(isset($_POST["member"]))  
 {  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Members.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Username', 'Email','Password','Role','Name','Mobile no','Photo','Breif'));  
      $query = "SELECT * from `users`";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 

 if($_GET['id']){
     $id = $_GET['id'];
     $query1 = "SELECT * from `users` where id = $id";  
     $result2 = mysqli_query($con, $query1);  
     $ro = mysqli_fetch_assoc($result2);
     $username = $ro['username'];
     $name = $ro['name'];
     if(isset($_POST["user"]))  
     {  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename='.$name.'.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Name', 'Email', 'Roll no', 'Mobile no', 'Year','Program','Issue Type','Breif','Date','Remarks','Assigned To'));  
      $query = "SELECT * from `$username`";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
     }  

 }
 
 ?>  