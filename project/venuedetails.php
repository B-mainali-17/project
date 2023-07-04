<!DOCTYPE html>
<html>
<head>
  <title>Venue Booking</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
}

form {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#background-video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

  </style>
  <script src="script.js"></script>
</head>
<body>
  <h1>Venue Booking</h1>

  <form action="booking.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="venue">Choose a Venue:</label>
    <select id="venue" name="venue" required>
      <option value="venue1">Venue 1</option>
      <option value="venue2">Venue 2</option>
      <option value="venue3">Venue 3</option>
    </select>

    <input type="submit" value="Book Now">
  </form>

  <div id="background-video"></div>
  <script>
    window.addEventListener("DOMContentLoaded", function () {
  // Add background video
  var backgroundVideo = document.getElementById("background-video");
  var videoSource = document.createElement("source");
  videoSource.src = "background.mp4";
  videoSource.type = "video/mp4";
  backgroundVideo.appendChild(videoSource);
});

  </script>
  

</body>
</html>



 