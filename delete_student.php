<?php

/*To write php code inside javascript document.write() function is used */
?>


<script type="text/javascript">

// if conform gives two options yes and no if yes is selected it Returs True and loop is run.
  
  
   if(confirm("Are you Sure that you want to delete?")){

      document.write(
         <?php
            $con = mysqli_connect("localhost","root","","sms");
            $sql="DELETE FROM `students` WHERE `roll_no`=$_POST[roll_no] "; 
            $result = mysqli_query($con, $sql);
         ?>);
            window.location.href="admin_dashboard.php";
      
      

   }
   else{
      window.location.href="admin_dashboard.php";
   }
</script>

