<?php
  $courseid=$_POST['courseid'];
  $course_no=$_POST['course_no'];
  $course_name=$_POST['course_name'];
  $course_duration=$_POST['course_duration'];
  $course_costs=$_POST['course_costs'];


  $conn=mysqli_connect("localhost","root","","studentinfo") or die("Connection Failed.");
  $sql="UPDATE course SET
  course_no='{$course_no}',course_name='{$course_name}',course_duration='{$course_duration}',course_costs='{$course_costs}' where courseid={$courseid}";
  $result=mysqli_query($conn,$sql) or die("Query Unsuccesful");

  header("Location: http://localhost/student/course/index.php");

  mysqli_close($conn);

 ?>
