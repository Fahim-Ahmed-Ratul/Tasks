<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
      if(isset($_POST['deletebtn'])){
        include 'config.php';
        $courseid=$_POST['sid'];
        $sql="DELETE FROM course WHERE courseid={$courseid}";
        $result=mysqli_query($conn,$sql);

        header("Location: http://localhost/student/course/index.php");

        mysqli_close($conn);
      }
     ?>
</div>
</div>
</body>
</html>
