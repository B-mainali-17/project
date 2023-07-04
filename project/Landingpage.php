<!DOCTYPE html>
<html>
  <head>
    <title>Landing Page</title>
    <style>
      /* Add some basic styling */
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }

      /* Style the navigation bar */
      .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .navbar a {
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
      }

      .navbar a.login-button {
        background-color: #333;
        color: #fff;
        padding: 6px 10px;
        border-radius: 4px;
      }
      .navbar a.login-button:hover {
        background-color: #dbdbdb;
        color:#333
      }

      /* Style the body content */
      .content {
        margin-top: 80px;
        text-align: center;
      }

      .content button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        margin: 10px;
        font-size: 16px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar">
      <div class="logo">
        <a href="#">Venue Hub</a>
      </div>
      <div class="login">
        <a href="login.php" class="login-button" id="logintoregisterbtn" >Login</a>
        <button id="logintoregisterbtn"></button>
      </div>
    </div>

    <!-- Body content -->
    <div class="content">
      <h1>Welcome to Venue Hub</h1>
      <p>Find and book your perfect venue!</p>
      <div >
        <a href="bookvenue.php">
      <button class="registration-button">Registration</button>
      </div>
      <button class="booking-button">Booking</button>
    </div>
  </body>
</html>
