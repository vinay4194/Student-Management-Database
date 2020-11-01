<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Dashboard</title>
   <link rel="stylesheet" href="mystyle2.css">

   <?php
   session_start();  // sessions are created to store vlaues and take them to another page. here we are storing email and name and displaying them on dashborad page

   $con = mysqli_connect("localhost","root","","sms");
   ?>

</head>
<body>
   <section class="header"> 
      <h1> Student Management   System <span><a href="logout.php"> Logout</a></span>
      </h1> 
      <br>
      <br>
      Name:<?php echo $_SESSION['name'];?> &nbsp Email: 
      <?php echo $_SESSION['email'];?>

   </section>
   <div class="container">
      <div class="left_container">
         <form action="" method="post">
            <ul>
               <li>
                  <input class="btn" type="submit" name="show_details" value="Show Details">
               </li>
               <li>
                  <input class="btn" type="submit" name="edit_details" value="Edit Details">
               </li>
               
            </ul>
         </form>
      </div>
      <div class="right_container">
       
         <?php
            if(isset($_POST['show_details']))
            {
               ?>
               <form action="" method="post"> 
                  Roll No:<input class="ip"type="text" name="roll_no">
                  <input class="btn"type="submit" name="search_by_roll_no_for_search" value="Search">
                      
               </form>
               <?php
            }
            if(isset($_POST['search_by_roll_no_for_search']))
            {
               $sql = "SELECT * FROM `students` WHERE `roll_no` = '$_POST[roll_no]'";
               $result = mysqli_query($con, $sql);
               while($row = mysqli_fetch_assoc($result)){
                  ?>  
                  
                  <table>
                     <tr>
                           <td>Roll No:</td>&nbsp <td><input class="info" type="text" value="<?php echo $row['roll_no']; 
                           ?>"disabled></td>
                     </tr>
                     <tr>
                           <td>Name:</td>&nbsp &nbsp<td><input class="info" type="text" value="<?php echo $row['name']; 
                           ?>"disabled></td>
                     </tr>
                     <tr>
                           <td>Class:</td>&nbsp &nbsp<td><input class="info" type="text" value="<?php echo $row['class']; 
                           ?>"disabled></td><br>
                     </tr>
                     <tr>   
                           <td>Email:</td>&nbsp &nbsp<td><input class="info" type="text" value="<?php echo $row['email']; 
                           ?>"disabled></td><br>
                     </tr>
                     <tr>
                           <td>Remarks:</td> <td><input class="info" type="text" value="<?php echo $row['remarks']; 
                           ?>"disabled></td><br>
                     </tr>      
                  </table>
                    
                  <?php
               }
            }

         ?>
         
            <?php   
            
            if(isset($_POST['edit_details']))
            {
               ?>
               <form action="" method="post"> 
                  Roll No:<input class="ip"type="text" name="roll_no">
                  <input class="btn"type="submit" name="search_by_roll_no_for_edit" value="Search">
                      
               </form>
               <?php
            }
            if(isset($_POST['search_by_roll_no_for_edit']))
            {
               $sql = "SELECT * FROM `students` WHERE `roll_no` = '$_POST[roll_no]'";
               $result = mysqli_query($con, $sql);
               while($row = mysqli_fetch_assoc($result)){
                  ?>  
                  <form action="admin_edit_student.php" method="post">
                     <table>
                        <tr>
                              <td>Roll No:</td>&nbsp <td><input class="info" type="text" name="roll_no" value="<?php echo $row['roll_no']; 
                              ?>"></td>
                        </tr>
                        <tr>
                              <td>Name:</td>&nbsp &nbsp<td><input class="info" type="text" name="name" value="<?php echo $row['name']; 
                              ?>"></td>
                        </tr>
                        <tr>
                              <td>Class:</td>&nbsp &nbsp<td><input class="info" type="text" name="class" value="<?php echo $row['class']; 
                              ?>"></td><br>
                        </tr>
                        <tr>   
                              <td>Email:</td>&nbsp &nbsp<td><input class="info" type="text" name="email" value="<?php echo $row['email']; 
                              ?>"></td><br>
                        </tr>
                        <tr>
                              <td>Remarks:</td> <td><input class="info"name="remarks" type="text" value="<?php echo $row['remarks']; 
                              ?>"></td><br>
                        </tr>      
                     </table>
                     <br>
                     <input class="btn" type="submit" name="edit_save" value="Save">
                   </form>
                  <?php
               }
            }
         ?>

         
         
      </div>
   </div>
</body>
</html>