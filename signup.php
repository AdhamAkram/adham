<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">  
<link rel="stylesheet" href="signup.css">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="profile" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
        </symbol>
        <symbol id="signout" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </symbol>
      </svg>
       
        
    </svg>
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
        <a
            href="/"
            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none"
          >
         <img src="2.svg" width="55" height="55" style="margin-top:15px" alt="Your SVG Image">
       </a>

          <ul
            class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small"
          >
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1 color-black" width="24" height="24" >
                  <use xlink:href="#home" />
                </svg>
                Home
              </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                    <use xlink:href="#profile" />
                  </svg>
                  My Profile
                </a>
              </li>
              <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                      <use xlink:href="#signout" />
                    </svg>
                    Sign Out
                  </a>
                </li>
    
          </ul>
        </div>
      </div>
    </div>
    
      
      
    <div class="center">
      <div class="wrapper" style="display: block;">
        <h2>Registration</h2>
        <form action="#" method="post">
          <div class="input-box">
            <input type="text" name= "name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input type="text" name= "email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <input type="password" name= "password" placeholder="Create password" required>
          </div>
          <div class="input-box">
            <input type="password" name= "confirm" placeholder="Confirm password" required>
          </div>
          <div class="policy">
            <input type="checkbox">
            <h3>I accept all terms & condition</h3>
          </div>
          <div class="input-box button">
            <input type="Submit" name= "register" value="Register">
          </div>
          <div class="text">
            <h3>Already have an account? <a href="signin-form.php">Login now</a></h3>
          </div>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password = $_POST['password'];
$confirmPassword = $_POST['confirm'];

// Check if the passwords match
if ($password === $confirmPassword) {
  $checkEmailQuery = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
  $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
  $emailCount = mysqli_fetch_assoc($checkEmailResult)['count'];

  if ($emailCount > 0) {
      echo "Error: Email is already in use.";
  } else {
      // Insert the user into the users table
      $insertUserQuery = "INSERT INTO users (username, email, password_hash) VALUES ('$name', '$email', '$password')";

      // Execute the query
      if (mysqli_query($conn, $insertUserQuery)) {
        echo '<script>alert("User registered successfully!");</script>';
        echo '<script>window.location.href = "signin-form.php";</script>';

      } else {
          echo "Error: " . mysqli_error($conn);
      }}

} else {
    // Passwords do not match, show an error message or take appropriate action
    echo "Passwords do not match!";
}}
?>

      </div>
    </div>
    

    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="Homepage.php" class="nav-link px-2 text-body-primary text-white">Home</a></li>
            <li class="nav-item"><a href="contact us.html" class="nav-link px-2 text-body-primary text-white">Contact Us</a></li>
            <li class="nav-item"><a href="FAQ.html" class="nav-link px-2 text-body-primary text-white">FAQs</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-primary text-white">About</a></li>
          </ul>
          <p class="text-center text-body-primary">© 2024 Reserva</p>
        </footer>
      </div>
    </div>


</body>
</html>