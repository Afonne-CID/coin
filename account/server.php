<?php

    session_start();

    // initializing variables
    $fullname = "";
    $phone_no = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";
    $program_type = "";
    $country = "";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost:3307', 'root', '', 'payload');

    if (!$db) {
        die('Could not connect: ');
    }

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $username = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $phone_no = mysqli_real_escape_string($db, $_POST['phone']);
        $fullname = mysqli_real_escape_string($db, $_POST['name']);
        $program_type = mysqli_real_escape_string($db, $_POST['pgram']);
        $country = mysqli_real_escape_string($db, $_POST['country']);

        // form validation: ensure that the form is correctly filled....
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($email)) { array_push($errors, "Email is Required");}
        if (empty($password_1)) { array_push($errors, "The two passwords do not match");}
        if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}
        if (empty($fullname)) { array_push($errors, "Name is required");}
        if (empty($phone_no)) { array_push($errors, "Phone is required");}
        if (empty($program_type)) {array_push($errors, "Select program type");}
        if (empty($country)) { array_push($errors, "Country must be selected");}

        // Check if user already exists in database
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // Register User if passes
        if (count($errors) == 0) {
            $password = md5($password_1); // Encrypt the password

            $query = "INSERT INTO users (phone_no, email, password, country, program_type)
                    VALUES('$phone_no', '$email', '$password', '$country', '$program_type')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            header('location: dashboard/index.php');
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                header('location: dashboard/index.php');
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

    // LOGOUT USER
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../account/index.html");
    }

?>