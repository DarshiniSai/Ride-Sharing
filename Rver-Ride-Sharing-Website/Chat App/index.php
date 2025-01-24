<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<style>
  body {
    background: url('https://thumbs.dreamstime.com/z/rideshare-taxi-app-smartphone-screen-rideshare-taxi-app-smartphone-screen-online-ride-sharing-carpool-mobile-application-103770031.jpg') no-repeat center center fixed;
    background-size: cover; /* Ensure the image covers the entire screen */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: rgba(0, 0, 0, 0.6); /* Dark overlay for better readability */
  }
  .form {
    background: rgba(0, 0, 0, 0.0); /* Semi-transparent background */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    color: #fff; /* White text color */
    width: 100%;
    max-width: 400px;
  }
  .form header {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #fff;
  }
  .field {
    margin-bottom: 15px;
  }
  .field label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #ccc; /* Slightly muted label color */
  }
  .field input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(8, 8, 8, 0.3);
    border-radius: 5px;
    background: rgba(10, 10, 10, 0.1);
    color: #fff;
    font-size: 14px;
  }
  .field input::placeholder {
    color: rgba(8, 8, 8, 0.6);
  }
  .field.button input {
    background-color: rgba(50, 150, 50, 0.8);
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s;
    padding: 10px 0;
  }
  .field.button input:hover {
    background-color: rgba(40, 120, 40, 0.9);
  }
  .link {
    text-align: center;
    margin-top: 15px;
  }
  .link a {
    color: #00aaff;
    text-decoration: none;
    font-size: 14px;
  }
  .link a:hover {
    text-decoration: underline;
  }
</style>
<body style="background-image: url('https://thumbs.dreamstime.com/z/rideshare-taxi-app-smartphone-screen-rideshare-taxi-app-smartphone-screen-online-ride-sharing-carpool-mobile-application-103770031.jpg');">
  <div class="container">
    <section class="form signup">
      <header>Sign up</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Sign up">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
      <div class="link">Want to chat later? <a href="../index.php">Go Back</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

