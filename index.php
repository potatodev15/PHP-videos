<?php
    require 'connect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        $query = "insert into php_test (username, email, password) values ('$username', '$email' , '$password')";

        $result = mysqli_query($con, $query);
        die;
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            padding: 0px;
            height: 90vh;
            font-family: 'Calibri', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 25px;
            background-color: royalblue;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post">
        <!-- <h1 style="text-align: center;">Sign Up</h1> -->
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
