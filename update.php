<!-- ------------------------------------------------update item into database---------------------- -->
<?php
include("config.php");
$userid = $_GET['userid'];
$nc = $_GET['nc'];
$ncom = $_GET['ncom'];
$coll = $_GET['colo'];

?>

<?php
include("config.php");

if (isset($_GET['updat'])) {
    $id = $_GET['id'];
    $name_car = $_GET['name_car'];
    $name_company = $_GET['name_company'];
    $color = $_GET['color'];

    $insert = "UPDATE info_item SET name_car = '$name_car', name_company = '$name_company', color = '$color' WHERE info_item.id = $id ";
    $res =  mysqli_query($conn, $insert);
    if ($res) {
        header("Location: admin.php");
    } else {  
        echo '<script> alert("please enter correct information")  </script>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br><br><br><br><br><br><br>

    <form action="" method="get" class="form_add2">
        <h2>Update Details</h2>
        <table cellspacing="20" align="center">
            <tr>
                <td>Id_Modul:</td>
                <td><input type="number" value="<?php echo "$userid" ?>" name="id" required></td>
            </tr>
            <tr>
                <td>Name_Car:</td>
                <td><input type="text" value="<?php echo "$nc" ?>" name="name_car" required></td>
            </tr>

            <tr>
                <td>Company:</td>
                <td><input type="text" value="<?php echo "$ncom" ?>" name="name_company" required></td>
            </tr>

            <tr>
                <td>Color:</td>
                <td><input type="text" value="<?php echo "$coll" ?>" name="color" required></td>
            </tr>

            <tr>
                <td align="center" colspan="2"><input type="submit" id="submit" name="updat" value="Update "></td>
            </tr>

        </table>
    </form>
</body>

</html>


<!-- ---------------------------------------css------------------------------ -->



<style>
    * {
        margin: 0px;
        padding: 0px;

    }

    .form_add2 {
        border: none;
        border-radius: 15px;
        width: 495px;
        height: 462px;
        margin-top: 1px;
        margin-left: 500px;
        padding: 30px;
        background-color: white;
        box-shadow: 0 10px 17px #222;
    }
     .form_add2 h2{
        color: #EF3333;
        text-align: center;
        font-size: 33px;
     }
    .form_add2 h1 {
        background-color: white;
        color: #EF3333;
        margin-left: 90px;
        font-size: 38px;
        margin-top: 3px;
        font-family: 'Times New Roman', Times, serif;
    }

    .form_add2 input {
        margin-top: 12px;
        margin-left: 13px;
        height: 32px;
        width: 290px;
        border-radius: 4px;
        background-color: white;
        border: black 1px solid;
    }

    .form_add2 label {
        margin-left: 5px;
        background-color: white;
        color: black;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .form_add2 #id {
        margin-left: 35px;
    }

    

    .form_add2 #submit {
        margin-left: 5px;
        height: 42px;
        width: 160px;
        border: none;
        margin-top: 28px;
        font-size: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: #EF3333;
        color: white;
    }

    .form_add2 #submit:hover {
        background-color: #222;
        color: white;
    }

    .form_add2 #id {
        margin-left: 25px;

    }

    .form_add2 #lcomp {
        margin-left: 22px;

    }

    .form_add2 a {
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

    .form_add2 a:hover {
        background-color: #222;
        color: white;
    }
</style>