<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Course No</label>
            <input type="text" name="course_no" />
        </div>
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="course_name" />
        </div>
        <div class="form-group">
            <label>Course Duration</label>
            <input type="text" name="course_duration" />
        </div>
        <div class="form-group">
            <label>Course Costs</label>
            <input type="text" name="course_costs" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
