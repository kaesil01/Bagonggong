<?php
// save.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get and trim fields
    $id = trim($_POST['student_id'] ?? '');
    $fn = trim($_POST['first_name'] ?? '');
    $ln = trim($_POST['last_name'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $course = trim($_POST['course'] ?? '');
    $gender = trim($_POST['gender'] ?? '');

    // small safety: escape special chars
    $id = htmlspecialchars($id, ENT_QUOTES);
    $fn = htmlspecialchars($fn, ENT_QUOTES);
    $ln = htmlspecialchars($ln, ENT_QUOTES);
    $age = htmlspecialchars($age, ENT_QUOTES);
    $course = htmlspecialchars($course, ENT_QUOTES);
    $gender = htmlspecialchars($gender, ENT_QUOTES);

    // create one line: pipe | separated
    $line = $id . '|' . $fn . '|' . $ln . '|' . $age . '|' . $course . '|' . $gender . PHP_EOL;

    // append to students.txt (create if missing)
    file_put_contents('students.txt', $line, FILE_APPEND | LOCK_EX);

    // go back to form (you can show a message instead)
    header('Location: index.html?saved=1');
    exit;
}
?>
