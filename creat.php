
<?php
include('header.php');
?>

<?php
include('config.php');                        //include connection with data base

if (isset($_POST['submit'])) {                 //if put creat talk data from form
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $pas = $_POST['pass'];
    $email = $_POST['email'];
    if (!empty($email) && !empty($pas) && !empty($firstname) && !empty($lastname)  && !is_numeric($email)) {    //chek data form
        $insert = "INSERT INTO `info_sel` ( `firstname`, `lastname`, `password`, `email`) VALUES ( '$firstname', '$lastname', '$pas', '$email')";
        mysqli_query($conn,$insert);                   //insert data from form into database
        echo  '<div class="alert alert-success" role="alert">  Successfully Create Acount </div>';      //print massage if data add into database
    } else {  //massage using class from bootstrap
        echo '<div class="alert alert-danger" role="alert"> Please Enter some valid Information </div>'; //print massage if data dont add into database

    }
}


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create acount</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>



    <form action="" method="POST">
        <h1>Create Acount</h1>
        <label for="">First Name :</label>
        <input type="text" name="fname" placeholder="First Name" required>
        <br>
        <br>
        <label for="">Last Name :</label>
        <input type="text" name="lname" placeholder="Last Name" required>
        <br>
        <br>
        <label for="" id="lpass">Password :</label>
        <input type="password" name="pass" placeholder="Password" id="p" required>
        <br>
        <br>
        <label for="" id="lemil">Email : </label>
        <input type="email" name="email" placeholder="Email" id="e" required>
        <br>
        <br>
        <button type="submit" name="submit">Create</button>
        <button> <a href="login.php">Login</a></button>
    </form>
    <br><br> <br> <br> <br> <br>
</body>

</html>
<?php
include('footer.php');
 ?>

<!-- -----------------------------------------------------------css-------------------------------------- -->
<style>
    *{
        margin:0;
        padding: 0;
    }

    /* .alert{
        margin-top: 70px;
        margin-left: 604px;
        width: 375px;
    } */
    body{
        background: url(./img/creat.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    form{
       margin-left: 600px;
       margin-top: 130px;
       padding-left: 30px;
       padding-top: 20px;
        border:none;
        width: 380px;
        height: 450px;  
        border-radius: 8px;
        /* box-shadow: 0 0 17px 10px gray; */
        background-color: rgba(0, 0, 0, 0.4);
        /* background: transparent; */
    }
    form h1{
        margin-bottom: 40px;
        padding-left: 20px;
        color: white;
    }
    form label{
        color: white;
    }
    form #lemil{
    margin-left: 33px;
    }
    form #lpass{
        margin-left: 5px;
    }
    form button{
    margin-left: 50px;
   margin-top: 13px;
   color:white;
   background-color: #FE0000;
   border: none;
    width: 84px;
    height: 35px;
    font-size: 18px;
    border-radius: 4px;
    }
    form button:hover{
        background-color: black;
        color: white;
    }
    form button a{
        color:white;
        text-decoration: none;   
    }
     form input{
    width: 220px;
    height: 32px;
    font-size: 15px;
    font-family: sans-serif;
    border-radius: 4px;
    border: black 1px solid;
    }
    form input::placeholder{
   padding-left: 3px;
    }
</style>