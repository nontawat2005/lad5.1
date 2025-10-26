<?php
require("connect_db.php");
$course_code_edit = $_POST["course_code_edit"];
$course_code = $_POST["courses_code"];
$course_name = $_POST["courses_name"];
$credit = $_POST["credit"];
$sql ="UPDATE courses SET courses_code='$course_code', courses_name='$course_name',
credit=$credit WHERE courses_code='$course_code_edit'";
mysqli_query($conn, $sql);
header("location: course_list.php");
exit(0);
?>
