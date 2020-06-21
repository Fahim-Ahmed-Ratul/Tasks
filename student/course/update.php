<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        $conn=mysqli_connect("localhost","root","","studentinfo") or die("Connection Failed.");
        $courseid=$_POST['sid'];
        $sql="SELECT * FROM course WHERE courseid={$courseid}";
        $result=mysqli_query($conn,$sql);

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
      } } }
    ?>
</div>
</div>
</body>
</html>
