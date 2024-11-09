<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form</title>
    <link rel="stylesheet" href="style.css" />
    <script src="./script.js" defer></script>
  </head>
  <body>

    <div class="main_form">
      <?php
        include './connection.php';  // Include database connection file

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = $_POST['password'];

            // Query to get the user's hashed password
            $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                
                // Verify the password with the hashed one stored in DB
                if ($password == $user['password']) {
                    
                  header("Location: dashboard.php");
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "Email not found!";
            }
        }
      ?>
       
      <h2>LOGIN FORM</h2>
      <form method="POST" autocomplete="off">
        <div class="email_div">
          <input type="email" id="email_id" name="email" required placeholder="Email-id" />
        </div>

        <div class="pass_div">
          <input type="password" id="password" name="password" required placeholder="Password" />
          <img src="img/eye-slash.svg" id="eye_close" />
        </div>

        <div>
          <small>Don't Have an Account? <a href="/">Register</a></small>
        </div>

        <div>
          <input type="submit" id="btn_acount" name="login" value="LOGIN" />
        </div>
      </form>
    </div>

  </body>
</html>
