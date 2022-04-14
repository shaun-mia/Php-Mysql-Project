<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>View Profile</title>
<!--
<link rel="stylesheet" href="style.css">

-->
<style>
  <?php include "style.css" ?>
</style>
</head>
<body>

  <div id="main">
  
  <h1>Contact Book</h1>
  <?php  include_once 'menu-main.php';?>
  
    <p class="prof"> User Profile</p>
   <table class=" viewtabl" >
  <th>
  <tr>
  
  <td><strong>Name</strong></td>
  <td><strong>Username</strong></td>
  <td><strong>email</strong></td>
  
  <td>Action</td>
  </tr>
  </th>
  <?php  
   require_once 'db.php';
   
   $query = "SELECT * FROM userdetails where contact_id= '".$_SESSION['contact_id']."'";
    $result = mysqli_query($dbcon,$query);
	 $row = @mysqli_fetch_assoc($result)?>
  
  
  <tr>
  
  <td> <?php echo $row["name"];?></td>
  <td><?php echo $row["username"];?></td>
  <td><?php echo $row["email"];?></td>
  
  <td>
  
 <a href="editProfile.php?editProfile=<?php echo $row["contact_id"]; ?> "id="edt">Edit</a>
  </td>
  </tr>

	 </table>
	   </div>
</body>
</html>
