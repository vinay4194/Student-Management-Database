<?php
   $con = mysqli_connect("localhost","root","","sms");
   
   

   $sql= "INSERT INTO `students`( `name`, `roll_no`, `class`, `email`, `password`, `remarks`) VALUES ('$_POST[name]',$_POST[roll_no],$_POST[class],'$_POST[email]','$_POST[password]','$_POST[remarks]')";
   $result = mysqli_query($con, $sql);
?>
<script type="text/javascript">
   alert("Student Added Successfully");
   window.location.href="admin_dashboard.php";
</script>