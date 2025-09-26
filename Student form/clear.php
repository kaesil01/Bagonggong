<?php
// clear.php
// Overwrite the file with empty string
file_put_contents('students.txt', '');
// Redirect back
header('Location: index.html?cleared=1');
exit;
?>
