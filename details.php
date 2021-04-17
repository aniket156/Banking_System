<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title>SVC Bank
  </title>
 <?php
include "includes/links.php";
  ?>

  <style>
    #bg_img2 {
  background-image: url('img/e.jpg');
  background-size: cover;
  background-attachment: fixed;
  width: 100%;
  height: 840px;
}

table, td, th {
  border: 1px solid black;
  text-align: center;
  color: black;
  padding-top: 10px;
  padding-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

</head>
<body>

<div id="bg_img2">
   
    <nav class="navbar navbar-expand-md navbar-light">

    <div class="container-fluid" style="padding-left: 70px; padding-right: 70px; padding-top: 30px;">
      
        <a class="navbar-brand" href="#"><h1>SVC Bank</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style="padding-right: 50px;";>
            <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" style="padding-right: -10px;">
            <a class="nav-link" href="aboutBank.php"><h3>about</h3></a>
            </li>
          </ul>

    </div>

   </nav>  
<br>


   
   <div class="container">


         <table>
  <tr>
    <th><h4 class="text-black">No.</h4></th>
    <th><h4 class="text-black">Name</h4></th>
    <th><h4 class="text-black">Email</h4></th>
    <th><h4 class="text-black">Balance</h4></th>
    <th><h4 class="text-black">Info</h4></th>
  </tr>
<tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 1</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post"  class="view">
          <button class="button1" type="submit" name="name" value="Aniket">View</button>
        </form>
      </td>
    </tr>
    <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 2</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1" type="submit" name="name" value="Sahil">View</button>
        </form>
      </td>
    </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 3</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1" type="submit" name="name" value="Ankit">View</button>
        </form>
      </td>
    </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 4</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1" type="submit" name="name" value="Tushar">View</button>
        </form>
      </td>
   

        </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 5</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1" type="submit" name="name" value="Sayali">View</button>
        </form>
      </td>
    </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 6</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1" type="submit" name="name" value="Rutuja">View</button>
        </form>
      </td>
        </tr>
        <tr>
      <?php  
     
        $row=mysqli_fetch_array($result);
      ?>
      <td> 7</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1"type="submit" name="name" value="Samiksha">View</button>
        </form>
      </td>
    </tr>
        <tr>
      <?php   
        $row=mysqli_fetch_array($result);
      ?>
      <td> 8</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1"type="submit" name="name" value="Dharmesh">View</button>
        </form>
      </td>
    </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 9</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1"type="submit" name="name" value="Taran">View</button>
        </form>
      </td>
        </tr>
        <tr>
      <?php  
        $row=mysqli_fetch_array($result);
      ?>
      <td> 10</td>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["amount"]; ?></td>
      <td>
        <form action="user.php" method="post" class="view">
          <button class="button1"type="submit" name="name" value="Kiran">View</button>
        </form>
      </td>
    </tr>
</table>

        
   </div>
<br>
  </body>
</html>