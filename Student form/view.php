<?php
// view.php
$lines = @file('students.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Saved Students</title></head><body>
<h1>Saved Students</h1>
<?php if (empty($lines)) { echo "<p>No students saved yet.</p>"; } else { ?>
<table border="1" cellpadding="6">
  <tr><th>ID</th><th>First</th><th>Last</th><th>Age</th><th>Course</th><th>Gender</th></tr>
  <?php foreach ($lines as $line) {
    $parts = explode('|', $line);
    // make sure there are 6 parts
    while (count($parts) < 6) $parts[] = '';
    echo "<tr>";
    foreach ($parts as $p) echo "<td>" . htmlspecialchars($p) . "</td>";
    echo "</tr>";
  } ?>
</table>
<?php } ?>
<p><a href="index.html">Back</a></p>
</body></html>
