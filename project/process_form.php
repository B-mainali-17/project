<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if all required fields are filled
  if (
    isset($_POST['venueName']) &&
    isset($_POST['venueLocation']) &&
    isset($_POST['maxCapacity']) &&
    isset($_POST['minCapacity']) &&
    isset($_FILES['venueImage'])
  ) {
    // Retrieve form data
    $venueName = $_POST['venueName'];
    $venueLocation = $_POST['venueLocation'];
    $maxCapacity = $_POST['maxCapacity'];
    $minCapacity = $_POST['minCapacity'];
    
    // Handle file upload
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($_FILES['venueImage']['name']);
    
    if (move_uploaded_file($_FILES['venueImage']['tmp_name'], $targetFile)) {
      // File uploaded successfully
      echo "File uploaded successfully!";
      
      // Database connection parameters
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "venue";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      // Prepare and execute SQL query to insert venue details into the database
      $sql = "INSERT INTO venues (venueName, venueLocation, maxCapacity, minCapacity, venueImage) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssds", $venueName, $venueLocation, $maxCapacity, $minCapacity, $targetFile);
      
      if ($stmt->execute()) {
        echo "Venue details stored successfully!";
      } else {
        echo "Error storing venue details: " . $stmt->error;
      }
      
      // Close statement and connection
      $stmt->close();
      $conn->close();
      
    } else {
      echo "Error uploading file.";
    }
  } else {
    echo "Please fill in all required fields.";
  }
}
?>