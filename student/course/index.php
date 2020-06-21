<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Courses</h2>
    <?php
      $conn=mysqli_connect("localhost","root","","studentinfo") or die("Connection Failed.");
      $sql="SELECT * FROM course";
      $result=mysqli_query($conn,$sql) or die("Query Unsuccesful");

      if(mysqli_num_rows($result) > 0){
     ?>
    <table cellpadding="7px">
        <thead>
        <th>ID</th>
        <th>Course NO.</th>
        <th>Name</th>
        <th>Duration</th>
        <th>Costs</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row=mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['courseid'] ;?></td>
                <td><?php echo $row['course_no'] ;?></td>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['course_duration'] ;?></td>
                <td><?php echo $row['course_costs'] ;?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['courseid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['courseid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php
              }
            ?>
        </tbody>
    </table>
    <?php
      }else {
        echo "<h2>No records found.</h2>";
      }
      mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
