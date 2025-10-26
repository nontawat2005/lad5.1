<?php
require("connect_db.php");
$id          = $_GET["id"];
$course_code = $_GET["course_code"];
$stmt = $conn->prepare("DELETE FROM exam_result WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: show_exam_result.php?course_code=$course_code");
exit();
?>