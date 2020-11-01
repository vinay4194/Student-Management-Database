<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>

   <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>
   <div class="container">
      
      <h2>Student Management System</h2>
      <form action="" method="post">
         <input class="btn" type="submit" name="admin_login" value="Admin Login">
         <input class="btn" type="submit" name="student_login" value="Student Login">

      </form>

      <?php
         if(isset($_POST['admin_login'])){
            header("Location:admin_login.php");
         }
         if(isset($_POST['student_login'])){
            header("Location:student_login.php");
         }
      ?>
      
   </div>


</body>
</html>