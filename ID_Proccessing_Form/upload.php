<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id_processing_db"; // Adjust the database name as needed

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the image data from the database
$sql = "SELECT student_signature FROM tbl_queue WHERE queue_ID = ?";
$stmt = $conn->prepare($sql);
$id = 11; // Change this to the actual ID of the record you want to retrieve
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($imageData);
    $stmt->fetch();

    // Debugging: Output image data
    var_dump($imageData);

    // Save image data to a file (for debugging purposes)
    file_put_contents("output_image.png", $imageData);

    // Output the image
    header("Content-Type: image/png"); // Change this according to the image type
    echo $imageData;
} else {
    echo "Image not found.";
}

$stmt->close();
$conn->close();
?>
