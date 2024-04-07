<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <br><br><br>
    <a href="admin.php"> Recorde Item</a>
    <!-- <button class="btn_record"><a href="admin.php">recorde Employee </a></button>    -->

    <form action="##" method="post" class="form_add">
        <h1>Infrmation Car</h1>
        <br><br>
        <label for="user" id="lbi">Id_Modul :</label>
        <input type="number" name="id" id="id">
        <br><br>
        <label for="user" id="lnamecar">Name_Car :</label>
        <input type="text" name="namcar" id="namc">

        <br>
        <br>
        <label for="user" id="lcomp">Company:</label>
        <input type="text" name="namcomp" id="namco">
        <br> <br>
        <label for="user" id="lcolor">Color :</label>
        <input type="text" name="color" id="colo">
        <br> <br>

        <input type="submit" name="add" value="Add" id="submit">


    </form>
</body>

</html>

<!-- ------------------------------------------------Add item into database---------------------- -->
<?php
include("config.php");

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name_car = $_POST['namcar'];
    $name_company = $_POST['namcomp'];
    $color = $_POST['color'];

    if (!empty($id) && !empty($name_car) && !empty($name_company)  && !empty($color)) {

        $insert = "INSERT INTO `info_item` (`id`, `name_car`, `name_company`, `color`) VALUES ($id, '$name_car', '$name_company', '$color');";
        mysqli_query($conn, $insert);                   //insert data from form into database

        header("Location: admin.php");
    } else {  //massage using class from bootstrap
        echo '<script> alert(" Please Enter some valid Information")  </script>'; //print massage if data dont add into database

    }
}
?>







<!-- ---------------------------------------css------------------------------ -->



<style>
    * {
        margin: 0px;
        padding: 0px;

    }

    .form_add {
        border: none;
        border-radius: 15px;
        width: 440px;
        height: 435px;
        margin-top: 50px;
        margin-left: 500px;
        padding: 30px;
        background-color: white;
        box-shadow: 0 10px 17px #222;
    }

    .form_add h1 {
        background-color: white;
        color: #EF3333;
        margin-left: 90px;
        font-size: 38px;
        margin-top: 3px;
        font-family: 'Times New Roman', Times, serif;
    }

    .form_add input {
        margin-top: 12px;
        margin-left: 13px;
        height: 32px;
        width: 290px;
        border-radius: 4px;
        background-color: white;
        border: black 1px solid;
    }

    .form_add label {
        margin-left: 5px;
        background-color: white;
        color: black;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .form_add #id {
        margin-left: 35px;
    }

    

    .form_add #submit {
        margin-left: 150px;
        height: 42px;
        width: 160px;
        border: none;
        margin-top: 48px;
        font-size: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: #EF3333;
        color: white;
    }

    .form_add #submit:hover {
        background-color: #222;
        color: white;
    }

    .form_add #id {
        margin-left: 25px;

    }

    .form_add #lcomp {
        margin-left: 22px;

    }
   .form_add #lcolor{
 margin-left: 44px;
   }
    a {
        margin-top: 200px;
        margin-left: 1290px;
        font-size: 27px;
        padding: 10px;
        text-decoration: none;
        color: #EF3333;
        border: 2px solid #EF3333;
        background-color: white;
        width: 50px;
        height: 40px;
        border-radius: 12px;
    }

   a:hover {
        background-color: #222;
        color: white;
        border: none;
    }
</style>



<!-- ---------------------------php &&  msql------------------------>

<!-- <?php
        if (isset($_POST['sub'])) {
            $host = 'localhost:3307';
            $user = 'root';
            $pass = '';
            $db = 'car';
            $con = mysqli_connect($host, $user, $pass, $db);

            // if(!$con){
            //     echo "not connect :"."<br>";
            // }

            $id = $_POST['id'];
            $name_car = $_POST['namcar'];
            $name_company = $_POST['namcomp'];
            $year = $_POST['year'];

            $insert = "INSERT INTO `info_item`(`id`, `name_car`, `name_company`, `year`) VALUES ('$id','$name_car','$name_company','$year')";
            $result = mysqli_query($con, $insert);
        }
        ?> -->