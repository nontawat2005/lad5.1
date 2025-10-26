<?php
require("connect_db.php");
$sql = "SELECT * FROM exam_result";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=40%>";
echo "<tr><th>ID</th><th>Course Code</th><th>Student Code</th><th>Point</th><th>Operationt</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo
    "<tr><td>". $row["id"] . "</td><td>" . $row["course_code"] . "</td><td>" . $row["student_code"] . "</td><td>" . $row["point"] . "</td>";
    echo "<td><a href=edit_exam_result.php?id=".$row["id"].">Edit</a> <a href=delete_exam_result.php?id=".$row["id"]." onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a></td></tr>";
}
echo "</table>";
echo "<br><a href=add_exam_result.php>Add exam_result</a>";
echo "</center>";
