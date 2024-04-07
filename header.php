<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            /* background-color: #040303; */
            margin: 0;
            height: 68px;
            display: flex;
            justify-content: space-between;
            padding-top: 10px;
            
        }

        .navbar .logoh {
            color: #FE0000;
            font-size: 25px;
            margin-left: 100px;
            margin-top: 7px;
        }
    
        .navbar .logoh a {
            text-decoration: none;
            color: #FE0000;
        }

        .navbar .logoh a:hover {

            color: #B3541E;
        }

        .navbar .list ul {

            list-style-type: none;
            display: flex;
            margin-top: 10px;

        }

        .navbar .list ul li {

            margin-right: 60px;
            padding-top: 10px;

        }

        .navbar .list ul li a {
            text-decoration: none;
            color: #FE0000;
            font-size: 23px;
        }

        .navbar .list ul li a:hover {
            color: #B3541E;
        }

        .navbar .login {
            margin-top: 10px;
            margin: right 20px;
        }

        .navbar .login a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-family: sans-serif;
        }

        .navbar .login .log {
           background-color: white;
           color: #FE0000;
            border: white solid 6px;
            border-radius: 5px;
            margin-right: 30px;
            width: 60px;
            font-size: 26px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }

        .navbar .login .sign {

            background-color: #FE0000;
            border: #FE0000 solid 6px;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 26px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .navbar .login a:hover {
            color: black;
        }
        span{
            color: black;
        }
    </style>
    <!-- end css -->
    <title>Document</title>
</head>

<body>
    <div class="navbar" id="nav">
        <div class="logoh">
            <b> <a href="#"> CAR<span>SHOP </span></a> </b>
        </div>
        <div class="list">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="product.php">Product</a></li>
            </ul>
        </div>
        <div class="login">
            <a href="login.php" class="log">logout</a>
            <a href="creat.php" class="sign">signup</a>
        </div>
    </div>
</body>

</html>