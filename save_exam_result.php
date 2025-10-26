<?php
require("connect_db.php");
$id          = $_POST["id"];
$course_code = $_POST["course_code"];
$point       = $_POST["point"];
$stmt = $conn->prepare("UPDATE exam_result SET point = ? WHERE id = ?");
$stmt->bind_param("ii", $point, $id);
$stmt->execute();
header("Location: show_exam_result.php?course_code=$course_code");
exit();
?>