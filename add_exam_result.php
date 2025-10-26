<?php
require("connect_db.php");
$course_code = $_GET["course_code"];
$sql = "SELECT * FROM courses WHERE course_code='$course_code'";
$course_rs = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($course_rs);
$sql = "SELECT * FROM students";
$students = mysqli_query($conn, $sql);
echo "<center>Course:" . $course["course_code"] . "(" . $course["course_name"] . ")<br>";
?>
<form action="save_add_exam_result.php" method="post">
    <table border="1">
        <input type="hidden" name="course_code" value="<?php echo $course_code; ?>">
        <tr>
            <td>Student</td>
            <td>
                <select name="student_code">
                    <?php
                    while ($row = mysqli_fetch_assoc($students)) {
                    ?>
                        <option value="<?php echo $row["student_code"] ?>">
                            <?php echo $row["student_code"] ?>
                            <?php echo $row["student_name"] ?>
                        </option>
                        <?php
                    }
                        ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Point</td>
            <td><input type="text" name="point"></td>
        </tr>
        <tr><td colspan="2"><input type="submit" value="Add"></td></tr>
    </table>
</form>
</center>