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
  background-size: 100% 100%;
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
<script>
     function random_function()
            {
                var a=document.getElementById("input").value;
        if(a==="Aniket"){
         var arr=["Sahil","Ankit","Tushar","Sayali","Rutuja","Samiksha","Dharmesh","Taran","Kiran"];
        }
        else if(a==="Sahil"){
          var arr=["Aniket","Ankit","Tushar","Sayali","Rutuja","Samiksha","Dharmesh","Taran","Kiran"];
        }
        else if(a==="Ankit"){
          var arr=["Aniket","Sahil","Tushar","Sayali","Rutuja","Samiksha","Dharmesh","Taran","Kiran"];
        }
        else if(a==="Tushar"){
          var arr=["Aniket","Sahil","Ankit","Sayali","Rutuja","Samiksha","Dharmesh","Taran","Kiran"];
         }
         else if(a==="Sayali"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Rutuja","Samiksha","Dharmesh","Taran","Kiran"];
         }
         else if(a==="Rutuja"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Sayali","Samiksha","Dharmesh","Taran","Kiran"];
         }
         else if(a==="Samiksha"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Sayali","Rutuja","Dharmesh","Taran","Kiran"];
         }
         else if(a==="Dharmesh"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Sayali","Rutuja","Samiksha","Taran","Kiran"];
         }
         else if(a==="Taran"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Sayali","Rutuja","Samiksha","Dharmesh","Kiran"];
         }
         else if(a==="Kiran"){
          var arr=["Aniket","Sahil","Ankit","Tushar","Sayali","Rutuja","Samiksha","Dharmesh","Taran"];
         }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
  </script> 


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

<br>
   
   <div class="container">
     <center>
     <h1 class="text-black">Transfer Amount</h1>

     <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
  <div class="center">
  <form action="updatecredit.php" method="post">
    <label for="sender" align="left" class="text-black" style="padding-right: 30px;" >Senders Name: &nbsp;</label>
    <select id="input" name="sender"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function()">
      <option  selected>Select Name</option>
      <option value="Aniket">Aniket</option>
      <option value="Sahil">Sahil</option>
      <option value="Ankit">Ankit</option>
      <option value="Tushar">Tushar</option>
      <option value="Sayali">Sayali</option>
      <option value="Rutuja">Rutuja</option>
      <option value="Samiksha">Samiksha</option>
      <option value="Dharmesh">Dharmesh</option>
      <option value="Taran">Taran</option>
      <option value="Kiran">Kiran</option>
    </select><br><br>
    <label for="receiver" align="left" class="text-black" style="padding-right: 30px;" >Receiver Name:&nbsp;</label>
    <select id="output" name="receiver"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function1()" >
        </select><br><br>
    <label for="transfer" align="left" class="text-black" style="padding-right: 20px;" >Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
    <input type="number"  name="transfer" style="font-size: 12pt; height: 30px; width:285px;" align="middle" required>
    <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
    <div class="button1" style="padding-left:130px; ">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:200px;">
    </div>
  </form> 
  </div>

     </center>
   </div>

  </body>
</html>