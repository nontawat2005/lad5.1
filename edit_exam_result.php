<?php
require("connect_db.php");
$id = $_GET["id"];

$stmt = $conn->prepare("SELECT * FROM exam_result WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<center>
<h2>Edit Exam Result</h2>
<form action="save_exam_result.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="hidden" name="course_code" value="<?php echo $row["course_code"]; ?>">
    <table border="1">
        <tr><td>Student Code</td><td><?php echo htmlspecialchars($row["student_code"]); ?></td></tr>
        <tr><td>Point</td><td><input type="number" name="point" value="<?php echo htmlspecialchars($row["point"]); ?>"></td></tr>
        <tr><td colspan="2"><input type="submit" value="Save"></td></tr>
    </table>
</form>
</center>