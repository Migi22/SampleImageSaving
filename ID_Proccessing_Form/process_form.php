<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id_processing_db_test"; // Adjust the database name as needed

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Escape user inputs for security
  $fname = $conn->real_escape_string($_POST['firstname']);
  $lname = $conn->real_escape_string($_POST['lastname']);
  $mi = $conn->real_escape_string($_POST['MI']);
  $course = $conn->real_escape_string($_POST['course']);
  $yearlevel = $conn->real_escape_string($_POST['yearlevel']);
  $guardian_name = $conn->real_escape_string($_POST['guardian_name']);
  $guardian_contact_num = $conn->real_escape_string($_POST['guardian_contact_number']);
  $student_address = $conn->real_escape_string($_POST['student_address']);
  $student_Birthday = $conn->real_escape_string(date("F j, Y", strtotime($_POST["student_Birthday"])));

  // Process image file
  if ($_FILES['signatureImage']['size'] > 0) {
    $imageData = file_get_contents($_FILES['signatureImage']['tmp_name']);
    $imageData = $conn->real_escape_string($imageData);
  } else {
    // Handle case when no image is uploaded
    $imageData = null; // Set image data to null if no image uploaded
  }

  // SQL query to insert data into the table
  $sql = "INSERT INTO tbl_queue (fname, lname, m_i, course, year_level, guardian_name, guardian_contact_num, student_address, student_Birthday, student_signature)
  VALUES ('$fname', '$lname', '$mi', '$course', '$yearlevel', '$guardian_name', '$guardian_contact_num', '$student_address', '$student_Birthday', '$imageData')";

  if ($conn->query($sql) === TRUE) {
    header("Location: success_page.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>
