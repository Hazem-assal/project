<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>product</title>
        <style>
                /* style background page */


                .body-color {

                        background: url(./img/675px-Flag_of_the_Israeli_Medical_Corps.svg.png);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: right;
                        background-attachment: fixed;
                        height: 100%;
                }

                /* style text  */
                .body-color h1,
                h2 {
                        text-align: center;
                        font-style: italic;
                }

                .body-color h1 {
                        padding-top: 23px;
                        color: white
                }

                .body-color h2 {
                        font-size: 16px;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        color: black;
                }

                /* style section Mercedes */

                .body-color .container1 {
                        display: flex;
                        justify-content: space-between;
                        margin: 20px;
                }

                /* style imges cars */
                .body-color img {
                        width: 250px;
                        height: 200px;
                        border-top-right-radius: 10px;
                        border-top-left-radius: 10px;
                }

                /* style car card */

                .body-color .car {
                        width: 250px;
                        height: 340px;
                        background-color: white;
                        border-top-right-radius: 20px;
                        border-top-left-radius: 20px;
                        box-shadow: 0px 20px 20px 4px rgb(84, 83, 83);
                }

                .body-color .car:hover {

                        box-shadow: none;
                }

                /* style button */
                .body-color button {
                        margin-left: 87px;
                        width: 75px;
                        background-color: red;
                        color: white;
                        border: none;
                        border-radius: 5px;
                }

                .body-color button:active {
                        /* background-color: bisque; */
                        background-color: rgb(249, 178, 178);
                }

                /* style section BMW*/
                .body-color .container2 {

                        display: flex;
                        justify-content: space-between;
                        margin: 20px;
                        align-items: center;
                }

                /* style section KIA */
                .body-color .container3 {
                        display: flex;
                        justify-content: space-between;
                        margin: 20px;
                        align-items: end;
                }

                /* style imge star */
                .body-color .star {
                        width: 75px;
                        height: 25px;
                        margin-left: 85px;
                        background-color: rgba(222, 219, 219, 0.995);
                        border-top-right-radius: 0px;
                        border-top-left-radius: 0px;

                }

                /* style name and price cars */
                .body-color p {
                        text-align: center;
                        margin-top: 0px;
                        font-weight: bolder;
                }

                /* style logo cars */
                .body-color .logo {
                        margin-left: 770px;
                        width: 130px;
                        height: 120px;
                        margin-bottom: 30px;

                }
        </style>

</head>

<body>

        <?php
        include('header.php');
        ?>
        <div class="body-color">
                <h1>Products</h1>
                <br>
                <h2>Our store offers the best types of cars in order to achieve a unique experience
                        in the world of cars</h2>

                <br>
                <br>
                <br>

                <!-- section one(Mercedes) -->

                <!-- img logo  -->

                <img class="logo" src="./img/mercedes-logo.png" alt="" width="0px">

                <br>

                <div class="container1">
                        <!-- car1 -->
                        <div class="car">
                                <img src="./img/car1.png" alt="">
                                <p> Mercedes-Benz </p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>7000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car2 -->
                        <div class="car">
                                <img src="./img/car2.png" alt="">
                                <p>Mercedes-215 </p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>10000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car3 -->
                        <div class="car">
                                <img src="./img/car3.png" alt="">
                                <p>Mercedes-x415</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>5000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car4 -->
                        <div class="car">
                                <img src="./img/car4.png" alt="">
                                <p>Mercedes-x510</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>9000$</p>
                                <button>Buy</button>
                        </div>
                </div>

                <!-- space between section -->

                <br>
                <br>
                <br>

                <!-- section two (BM) -->

                <!-- img logo -->
                <img class="logo" src="./img/bmw-logo.png" alt="">

                <br>
                <div class="container2">
                        <!-- car1 -->
                        <div class="car">
                                <img src="./img/car5.png" alt="">
                                <p>BMW-310</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>7500$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car2 -->
                        <div class="car">
                                <img src="./img/car6.png" alt="">
                                <p>BMW-515</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>6000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car3 -->
                        <div class="car">
                                <img src="./img/car7.png" alt="">
                                <p>BMW-x4</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>5000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car4 -->
                        <div class="car">
                                <img src="./img/car8.png" alt="">
                                <p>BMW-205</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>3500$</p>
                                <button>Buy</button>
                        </div>
                </div>

                <!-- space between section -->

                <br>
                <br>
                <br>

                <!-- section three (KIA) -->

                <!-- img logo -->
                <img class="logo" src="./img/kia-logo.png" alt="">
                <br>

                <div class="container3">
                        <!-- car1 -->
                        <div class="car">
                                <img src="./img/car9.png" alt="">
                                <p>KIA-sportage/2020</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>8000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car2 -->
                        <div class="car">
                                <img src="./img/car10.png" alt="">
                                <p>KIA-sportage/2023</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>5000$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car3 -->
                        <div class="car">
                                <img src="./img/car11.png" alt="">
                                <p>KIA-cerato sport</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>8500$</p>
                                <button>Buy</button>
                        </div>

                        <!-- car4 -->
                        <div class="car">
                                <img src="./img/car12.png" alt="">
                                <p>KIA-optima/2020</p>
                                <img class="star" src="./img/star.jpg" alt="">
                                <p>7000$</p>
                                <button>Buy</button>
                        </div>
                </div>
                <br>

        </div>

        <?php
        include('footer.php');      //////////////////////////////////////// footer ////////////////////////////////
        ?>
</body>

</html>