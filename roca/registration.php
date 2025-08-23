<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php echo "Hello World";?>

<form action="display.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="Course">Course:</label><br>
  <input type="text" id="Course" name="Course" value="BSIT"><br>
  <label for="SID">StudentID:</label><br>
  <input type="text" id="SID" name="SID" value="123456"><br>
  <input type="checkbox" id="Male" name="Male" value="">
  <label for="Male"> Male</label>
  <input type="checkbox" id="Female" name="Female" value="">
  <label for="Female"> Female</label><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "display.php".</p>

</body>
</html>
