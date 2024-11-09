<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form</title>
    <link rel="stylesheet" href="style.css" />
    <script src="./script.js" ></script>
    
   
  </head>
  <body>
    <?php include './connection.php' ;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $dob = $_POST['DOB'];
        $psw = $_POST['psw'];
        $rpsw = $_POST['rpsw'];
        if($psw == $rpsw)
        {

        // Insert data into the database
        $sql = "INSERT INTO users VALUES ('$name', '$phone','$email','$dob','$psw','$rpsw')";
        if (mysqli_query($conn, $sql)) {
            // echo 'Data inserted successfully.';
        } else {
            echo 'Error inserting data: ' . mysqli_error($conn);
        }   
       }
       else{
        echo "Password and Confirm Password should not be same";
       }
        }
  

    ?>


    <div class="main_form">
      <h2>REGISTER FORM</h2>
       <form method="post"  autocomplete="off">
        
        <div id="first_name">
           <input type="text" id="fname" name="name"required placeholder="Enter  Name In capital Letter" style="text-transform: uppercase"/>
        </div>

        <div>
          <input type="tel" onclick="phone_number() "id="tel_id" name ="phone"required placeholder="Enter 10 digit phone number" maxlength="10" VALI/>
        </div>

        <div class="email_div">
          <input type="email" id="email_id"  name="email" required placeholder="Email-id" />
        </div>

        <div>
          <input type="date" id="date_id"  name="DOB"required placeholder="Enter D.O.B" />
        </div>

        <div class="pass_div">
          <input type="password" id="password" name="psw" required placeholder="Password"/>
          <img src="img/eye-slash.svg" id="passwordToggle" />
        </div>

        <div class="passn_div">
            <input type="password" id="repassword" name="rpsw"required placeholder="Confirm Password"/>
          <img src="img/eye-slash.svg" id="repasswordToggle" />
        </div>

        <div>
          <small>Alredy Acount <a href="./login.php">login</a></small>
        </div>

        <div>
          <input type="submit" id="btn_acount" value="Create Acount"  />
        </div>
      </form>
    </div>

  </body>
</html>
