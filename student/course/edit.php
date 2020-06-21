<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
      $conn=mysqli_connect("localhost","root","","studentinfo") or die("Connection Failed.");
      $courseid=$_GET['id'];
      $sql="SELECT * FROM course where courseid = {$courseid}";
      $result=mysqli_query($conn,$sql) or die("Query Unsuccesful");

      if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Course No</label>
          <input type="hidden" name="courseid" value="<?php echo $row['courseid'] ;?>"/>
          <input type="text" name="course_no" value="<?php echo $row['course_no'] ;?>"/>
      </div>
      <div class="form-group">
          <label>Course Name</label>
          <input type="text" name="course_name" value="<?php echo $row['course_name'] ;?>"/>
      </div>
      <div class="form-group">
          <label>Course Duration</label>
          <input type="text" name="course_duration" value="<?php echo $row['course_duration'] ;?>"/>
      </div>
      <div class="form-group">
          <label>Course Costs</label>
          <input type="text" name="course_costs" value="<?php echo $row['course_costs'] ;?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
