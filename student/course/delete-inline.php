<?php
  $courseid=$_GET['id'];

  include 'config.php';

  $sql="DELETE FROM course WHERE courseid={$courseid}";
  $result=mysqli_query($conn,$sql);

  header("Location: http://localhost/student/course/index.php");

  mysqli_close($conn);
?>
