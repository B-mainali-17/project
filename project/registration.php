
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <!-- <style>
  .container {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
}

input[type="text"],
input[type="email"],
input[type="date"],
textarea {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}
</style> -->

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>User Registration</h2>
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" required>

      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" required>

      <label for="email">Email:</label>
      <input type="email" name="email" required>

      <label for="address">Address:</label>
      <textarea name="address" required></textarea>

      <label for="phone">Phone Number:</label>
      <input type="text" name="phone" required>

      <label for="phone2">Second Phone Number:</label>
      <input type="text" name="phone2">

      <button type="submit" name="register" >register</button>
    </form>
  </div>
</body>
</html>
<?php
// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $dob = test_input($_POST["dob"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone = test_input($_POST["phone"]);
  $phone2 = test_input($_POST["phone2"]);

  // Validation rules
  $name_regex = "/^[a-zA-Z ]*$/";
  $phone_regex = "/^\d{10}$/";

  // Validate name (alphabet characters and spaces only)
  if (!preg_match($name_regex, $name)) {
    die("Error: Invalid name format.");
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format.");
  }

  // Validate phone number (10 digits)
  if (!preg_match($phone_regex, $phone)) {
    die("Error: Invalid phone number format.");
  }

  // Process the data (you can store it in a database, send an email, etc.)
  // ...
  // Your code to process the data goes here

  // Display success message
  echo "Registration successful!";
}

// Function to sanitize input data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>