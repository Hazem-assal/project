<?php
include('header.php');  // header page
?>

<?php
include('config.php');    //conection with database

if (isset($_POST['nlog'])) {    ///if put login tack data from form

    $email = $_POST['email'];
    $password = $_POST['pas'];


    $info = "SELECT * FROM info_sel WHERE email='$email' AND password='$password'";    //verfi if data found in database
    $result = $conn->query($info);

    if ($result->num_rows > 0) {    // chek if there are the same data in database

        $adminemail = "coder@gamil.com";        //eamil admin
        $adminpassword = '123';                //password admin

        if ($email == $adminemail && $password == $adminpassword) {
            header("Location: admin.php");       //go to admin page

        } else {
            header("Location: home.php");       //go to home page

        }
    } else {
        echo '<div class="alert alert-danger" role="alert"> Wrong email or password </div>'; //print massage if data dont fonund into database

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link bootstrab -->
</head>

<style>
    /* .alert{
        margin-top: 100px;
        margin-left: 604px;
        width: 375px;
    } */
</style>

<body>

    <form action="" method="POST">
        <h1>Login</h1>
        <h6>Welcome back!</h6>
        <br>
        <label for="">Email</label>
        <br>
        <input type="email" name="email" placeholder=" Enter Your Email" translate="yes" required>
        <br>
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" name="pas" placeholder=" Enter Password" required>
        <br>
        <br>
        <button type="submit" name="nlog">login</button>
        <br>
        <br>
        <p>I dont have an account ? <a href="creat.php">Creat account</a> </p>
    </form>
    <br><br> <br> <br> <br> <br> <br><br>

</body>

</html>

<?php
include('footer.php');
?>

<!-- -----------------------------------------------------css------------------------------------------------ -->
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: url(./img/login.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    form {
        margin-left: 600px;
        margin-top: 120px;
        padding-left: 45px;
        padding-top: 20px;
        border: none;
        width: 390px;
        height: 480px;
        border-radius: 8px;
        background-color: rgba(0, 0, 0, 0.4);
    }

    form h1 {
        padding-left: 90px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 45px;
        color: white;
    }

    form a {
        color: #FE0000;
        font-size: 18px;
        text-decoration: none;
    }

    form h6 {
        padding-left: 85px;
        font-size: 19px;
    }

    form input {
        width: 310px;
        height: 38px;
        border-radius: 4px;
        border: none;
        margin-top: 3px;
    }

    form input::placeholder {
        font-size: 15px;
    }

    form label {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 22px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
    }


    form button {
        margin-top: 18px;
        width: 300px;
        height: 38px;
        border-radius: 4px;
        border: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 24px;
        background-color: #FE0000;
        color: white;
    }

    form button:hover {
        color: #FE0000;
        background-color: black;
        font-size: 25px;
    }

    form p {
        color: white;
    }
</style>