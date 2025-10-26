<?php
require("connect_db.php");
$sql = "SELECT students_code, students_name, gender FROM students";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<center>";
    echo "<table border=1>";
    echo "<tr><th>Code</th><th>Name</th><th>Gender</th><th>Operation</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["students_code"] . "</td><td>" . $row["students_name"] . "</td><td>" .
            $row["gender"] . "</td><td><a href=edit_student.php?students_code=".
            $row["students_code"].">Edit</a> <a href=delete.php?students_code=".$row["students_code"]."
            onclick=\"return confirm('ต้องการลบใช่หรือไม่?');\">Delete</a></td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results<br>";
}

echo "<a href='add_student.php'>Add Student</a>";
echo "</center>";
?>
