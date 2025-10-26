<?php
require("connect_db.php");
$course_code = $_GET["course_code"];
$sql = "SELECT * FROM courses WHERE courses_code='$courses_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);

$sql = "SELECT E.*,S.students_name";
$sql .= " FROM exam_result AS E";
$sql .= " INNER JOIN students AS S ON E.students_code=S.students_code";
$sql .= " WHERE E.courses_code='$courses_code'";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<h1>Exam Result " . $course["courses_name"] . "</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Point</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["students_code"] . "</td><td>" . $row["students_name"]
. "</td><td>" . $row["point"] . "</td></tr>";
}
echo "</table>";
echo "</center>";