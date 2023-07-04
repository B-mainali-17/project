<!DOCTYPE html>
<html>
<head>
  <title>Venue Hub - Venue Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
    }
    
    input[type="file"] {
      margin-top: 5px;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Venue Registration</h1>
  <legend>
  <form method="POST" enctype="multipart/form-data" action="process_form.php">
    <div class="form-group">
      <label for="venueName">Venue Name:</label>
      <input type="text" id="venueName" name="venueName" required>
    </div>
    <div class="form-group">
      <label for="venueLocation">Venue Location:</label>
      <input type="text" id="venueLocation" name="venueLocation" required>
    </div>
    <div class="form-group">
      <label for="maxCapacity">Maximum Capacity:</label>
      <input type="number" id="maxCapacity" name="maxCapacity" min="1" required>
    </div>
    <div class="form-group">
      <label for="minCapacity">Minimum Capacity:</label>
      <input type="number" id="minCapacity" name="minCapacity" min="1" required>
    </div>
    <div class="form-group">
      <label for="venueImage">Venue Image:</label>
      <input type="file" id="venueImage" name="venueImage" accept="image/*" required>
    </div>
    <input type="submit" value="Register">
  </form>
  </legend>
</body>
</html>
