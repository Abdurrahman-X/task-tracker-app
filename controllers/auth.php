<?php
     session_start();

     require "db.php";
 
     // Store error variables
     //$errors = array();
     $firstnameErr = $lastnameErr = $emailErr = $phoneErr = $passwordErr = "";
 
     // Hold and Update User Data
     $firstname = "";
     $lastname = "";
     $email = "";
     $phone = "";
     $password = "";
     
 
 
     // Get the User details on registration submit and validate.
 
     if (isset($_POST["register-submit"])) {
         
         $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
         $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
         $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
         $password = $_POST["password"];
 
        //  echo $firstname . "<br>";
        //  echo $lastname . "<br>";
        //  echo $email . "<br>";
        //  echo $password . "<br>";
 
         // Validation
         if (empty($firstname)) {
             $firstnameErr = "First Name required";
         }
         if (empty($lastname)) {
             $lastnameErr = "Last Name required";
         }
         if (empty($email)) {
             $emailErr = "Email required";
         }
         if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
             $emailErr = "Email address is Invalid";
         }
         if (empty($password)) {
             $passwordErr = "Password required";
         }
         // Check to see if an email exists.
 
         $emailSql = "SELECT * FROM users WHERE email =? LIMIT 1";
         $statement = $conn->prepare($emailSql);
         $statement->bind_param("s", $email);
         $statement->execute();
         $result = $statement->get_result();
         $userCount = $result->num_rows;
         if ($userCount > 0) {
             $emailErr = "Email already exists";
         }
         
          // If there are no errors, add data to database
          if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($passwordErr)) {
             $password = password_hash($password, PASSWORD_DEFAULT);
 
             $statement2 = $conn-> prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)" );
             
             $statement2->bind_param('ssss', $firstname, $lastname, $email, $password);
             
             if ($statement2 -> execute()) {
                 $user_id = $conn -> insert_id;
                 $_SESSION['id'] = $user_id;
 
                 // To redirect to the login page after a succesful registration.
                 header('location: login.php');
                 exit();
             } else {
                 $errorsdb = "Registration failed: Error connecting to server";
             }
          }
     }
 
     //get the User details on login submit and validate
     if (isset($_POST["login-submit"])) {
         $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
         $password = $_POST["password"];
     }
 
     // Validate
     if (empty($email)) {
         $emailErr = "Email required";
     }
     
     if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
         $emailErr = "Email address is Invalid";
     }
     
     if (empty($password)) {
         $passwordErr = "Password required";
     }
 
     if (empty($emailErr) && empty($passwordErr)) {
         $emailSql = "SELECT * FROM users WHERE email =? LIMIT 1";
         $statement = $conn->prepare($emailSql);
         $statement->bind_param("s", $email);
         $statement->execute();
         $result = $statement->get_result();
 
         if ($user = $result->fetch_assoc()) {
             if (password_verify($password, $user["password"])) {
                 $_SESSION["id"] = $user["id"];
                 $_SESSION["firstname"] = $user["first_name"];
                 $_SESSION["lastname"] = $user["last_name"];
 
                 header("location: dashboard.php");
                 exit();
             } else {
                 $loginErr = "Invalid Email or Password";
             }
         } else{
             $loginErr = "User does not exist";
         }
     }
 
 
     // LOG OUT THE USER
     if (isset($_GET["logout"])) {
         session_destroy();
         unset($_SESSION["id"]);
         unset($_SESSION["firstname"]);
         unset($_SESSION["lastname"]);
 
         header("location: login.php");
         exit();
     }

      // USER DATA FOR DASHBOARD
    $user = "SELECT * FROM users";
    $statement = $conn->prepare($user);
    $statement->execute();
    $result = $statement->get_result();
    $totalUsers = $result->num_rows;

 
?>