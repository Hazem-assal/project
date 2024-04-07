<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./cs/css.css">
    <title>Document</title>
</head>
<style>
    body {
        background-image: url(./img/pexels-geancarlo-peruzzolo-14471686\ \(1\).jpg);
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
     
    }
   .all form{
    border: none;
    width: 400px;
    padding-left:20px;
    height: 458px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, 0.4);
   }
    
   .all {
        color: #Eee;
        margin-top: 50px;
     
    }
    .all h1 {
        margin-left: 70px;
        font-weight: 800;
        font-size: 30px;
        margin-bottom: 20px;
        padding-top: 10px;
    }

    .all p {
        width: 600px;
        font-weight: bold;
        line-height: 40px;
        margin-left: 50px;
        font-size: 20px;
    }



    .all ul {
        list-style: none;
        margin-left: 100px
    }

    .all ul li a {
        text-decoration: none;
        color: white;
    }

    .all ul li {
        margin-left: 50px;
        list-style: none;
        margin-left: 120px;
        line-height: 30px;
    }

    .all div button {
        border: none;
        background-color: #EF0000;
        font-size: 22px;
        margin-left: 80px;
        border-radius: 4px;
        color: #Eee;
        margin-top: 40px;
        cursor: pointer;
        height: 40px;
        width: 180px;
    }
    .all div button:hover{
        color: #EF0000;
        background-color: black;
    }

    .all div .map {
        font-size: 20px;
        color: white;
        margin-left: 3px;
        list-style: none;
    }

    .up {
        font-size: 20px;
        margin-left: 100px;

    }
    .all form input{
        border-radius: 4px;
        height: 32px;
        width: 338px;
        margin-top: 5px;
        margin-right: 40px;
        border: none;
        /* border: none;
        position: relative;
        background: transparent;
        border-bottom: 3px solid whitesmoke; */
    }
    .up label{
        font-size: 18px;
        margin-bottom: 20px;
        color: gray;
    }

    /* .all.up input {
        border: 20px;
        width: 250px;
        height: 20px;
        margin-bottom: 20px;
    } */
    .all.up textarea{
        border-radius: 4px;
    }
    /* .all .location{
        padding: 20px;
    } */
    .location ul{
        color:#EF0000;
        font-size: 18px;
        margin-left: 190px;
        list-style: none;
        padding: -10px;
    }
    .location{
        margin-left: 20px;
        margin-top: 12px;
        
    }
   
    .all .location ul li {
        color: white;
        font-size: 18px;
        margin-left: 42px; 
    }
    .all .location a{
        margin-top: 10px;
        margin-left: 20px;
        text-decoration: none;
        color: #Eee;
    }
    .all .location i{
        margin-left: 120px;
        padding-top: 10px;
        font-size: 15px;
    }


</style>

<body>
    <div class="all">
        
        <div class="up">
            <form action="">
            <h1>Contact Us</h1>
                <label for="username">User name</label><br>
                <input type="text"><br> <br>
                <label for="password">password</label><br>
                <input type="password"><br> <br>
                <label for="text ">Send your massege</label><br>
                <textarea name="" id="" cols="45" rows="6"></textarea>
                
                <button>Get Start</button>
                </form>
        </div>

        
        <div class="location">
            <ul>Email</ul>
            <li class="map"><i class="fa-solid fa-envelope"></i> <a href="https://mail.google.com/"> CARSHOP@Gmail.com </a></li>
           <br>
            <ul> Phone</ul>
            <li class="map"><i class="fa-solid fa-phone"></i> <a href="#"> +963915470414 </a></li>
            <br>
            <ul>Location</ul>
            <li class="map"> <a href="https://maps.google.com/"><i class="fa fa-map-marker"> Location</i></a></li>

           
        </div>
       
    </div>
    <br> <br>
</body>

</html>

<?php
include('footer.php');
?>

