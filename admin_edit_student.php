<?php
   $con = mysqli_connect("localhost","root","","sms");
   
   

   $sql="UPDATE `students` SET `name`='$_POST[name]',`class`=$_POST[class], `email`='$_POST[email]',`remarks`='$_POST[remarks]' where `roll_no`=$_POST[roll_no]";
   $result = mysqli_query($con, $sql);
?>
<script type="text/javascript">
   alert("Details Updated Successfully");
   window.location.href="admin_dashboard.php";
</script>