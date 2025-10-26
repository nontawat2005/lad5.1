<?php
require("connect_db.php");
$course_code = $_GET["courses_code"];

$sql ="DELETE FROM courses WHERE courses_code='$course_code'";
mysqli_query($conn, $sql);
header("location: course_list.php");
exit(0);
?>