<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./cs/cs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="first">
        <br><br><br>
        <b class="titl_about">About Us</b>
        <br> <br> <br>
        <div class="serv">
            <p>.. The Service ..</p>

            <div class="all">
                <div class="fu">
                    <br>
                    <ul><i class="fas fa-building"></i> The Company</ul>
                    <br>
                    <li>This company sells modern cars and also. You can communicate with this company by phone or by email. We also have some pages on social media such as Facebook.</li>
                </div>
                <div class="su">
                    <br>
                    <ul><i class="fa fa-automobile"></i>The product </ul>
                 <br>
                    <li>All products are of high quality and are also guaranteed. We import them from the original company and are completely free of any defects</li>
                </div>
                <div class="tu">
                    <br>
                    <ul class=><i class="fa fa-dollar"></i> The Paying off </ul>
                    <br>
                    <li>You can pay through the company's bank account or through electronic payment via PayPal or via Visa, and you will receive your car upon payment.</li>
                </div>
            </div>

        </div>
        <hr>
        <h4 class="head_employ"> .. Employees ..</h4>
        <div class="emp">
            <div class="fe">
                <br>
                <ul><img src="./img/pngwing.com.png" alt=""> The Manager</ul> <br>
                <li>The company's CEO is a graduate of Cambridge University, Faculty of Electrical Engineering. He has a master's degree in alternative energy, marketing, and business administration, and he has a doctorate in resource management</li>

            </div>
            <div class="se">
                <br>
                <ul> <img src="./img/employy.png" alt="">The emplyee </ul>   <br>
                <li>Employees have a bachelors degree and have good morals to deal with customers ethically and well</li>
            </div>
        </div>
    </div>


</body>

</html>

<?php
include('footer.php');
?>

<style>
    body {
        background-image: url(./img/samuele-errico-piccarini-FMbWFDiVRPs-unsplash.jpg);
        background-size: cover;
    }

    h1 {
        color: #eee;
        margin-left: 1800px;
        margin-bottom: 90px;
    }

    .first .titl_about {
        /* margin-top: 60px; */
        color: white;
        padding-left: 760px;
        margin-top: 90px;
        padding-top: 80px;
        font-size: 33px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .first .serv p {
        color: white;
        font-size: 26px;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
    }

    .first  .head_employ {
        color: white;
        font-size: 26px;
        margin-left: 760px;
        padding-top: 20px;
        font-family: 'Times New Roman', Times, serif;
    }

    .first .serv .all {
        margin: 20px;
        padding: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        /* جعل العناصر على سطر واحد */

    }

    .first .serv .fu {
        width: 250px;
        height: 280px;
        background-color: #eee;
        opacity: 0.75;
        border-radius: 4px;
        margin-left: 300px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 30px;
        padding-bottom: 23px;
        padding-left: 10px;
    }
    .first .serv .fu ul{
        color: gray;
    }
    .first .serv .fu i{
        color:black;
    }

    .first .serv .su {
        width: 250px;
        height: 280px;
        background-color: #eee;
        opacity: 0.75;
        border-radius: 4px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 30px;
        padding-bottom: 23px;
        padding-left: 10px;
    }
    .first .serv .su ul{
        color: gray;
    }
    .first .serv .su i{
        color:black;
    }

    .first .serv .tu {
        width: 250px;
        height: 280px;
        background-color: #eee;
        opacity: 0.75;
        border-radius: 4px;
        margin-right: 300px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 30px;
        padding-bottom: 23px;
        padding-left: 10px;
    }
    
    .first .serv .tu ul{
        color: gray;
    }
    .first .serv .tu i{
        color:black;
    }

    h2 {

        margin-left: 200px;
        background-color: #eee;
        opacity: 0.75;
        width: 150px;
        border-radius: 4px;
    }

    hr {
        color: #eee;
        size: 20px;
    }

    .emp {
        color: #eee;
        display: flex;
        margin-bottom: 200px;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 80px;

    }

    /* .emp h2 {
        color: black;
        margin-left: 200px;
        background-color: #eee;
        opacity: 0.75;
        width: 150px;
        border-radius: 4px;
        height: 30px;
    } */

    img {

        width: 20PX;
        height: 20px;

    }


    .fe {
        background-color: #eee;
        opacity: 0.75;
        color: #000;
        border-radius: 4px;
        width: 400px;
        font-weight: bold;
        font-size: 20px;
        margin-left: 300px;
        padding-bottom: 23px;
        padding-left: 10px;
        margin-top: 70px;

    }

    .fe ul{
        color: gray;
    }
    .fe i{
        color:#FE0000;
    }

    .se {
        background-color: #eee;
        opacity: 0.75;
        color: #000;
        border-radius: 4px;
        width: 400px;
        font-size: 20px;
        font-weight: bold;
        margin-right: 300px;
        padding-bottom: 23px;
        padding-left: 10px;
        margin-top: 70px;
    }
    .se ul{
        color: gray;
    }
    .se i{
        color:#FE0000;
    }
</style>