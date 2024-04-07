<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- إضافة عنصر style -->
    <style>
        .footer {
            background-color: rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: space-around;
            height: 255px;
        }
        .footer .logos li a{
            padding-left: 40px;
        }
       
        .footer .logos li p{
            margin-left: 21px;
            font-family:Arial, Helvetica, sans-serif;
        }
        .footer .logos ul li .lor{
            font-size: 14px;
            
        }
        .footer ul li a {
            text-decoration: none;
            color:#FE0000;
            opacity: 0.75;
            /*من اجل الشفافية  */
            font-size: 20px;    
        }

       .logos li a i {
            color: white;
            margin-right: 8px;
        }

       .footer ul {
            color: white;
            list-style: none;
            margin-right: 20px;
            margin-top: 30px;
            font-size: 22px;
            font-weight: bold;
        }

        .footer li {
            margin-top: 10px;
        }

        a:hover {
            color: gray
        }

        .footer .logos ul {
            color: #FE0000;
            font-size: 30px;
        }

        ul li p {
            color: white;
            font-size: 10px;
            width: 400px;
            /* margin-right: 17px; */
            padding-right: 5px;
        }
        .page  {
            color:#FE0000;
            margin-top: 30px;
            font-size: 19px;
        }
        .page .ls{
            font-size: 22px;
            color: white;
            padding-right: 50px;
        }
        .page h3{
            margin-top: 4px;
            padding-top: 3px;
            font-size: 20px;
        }

        .leagle li a{
            color: #FE0000;
        }
        .Contact li a{
            color: #FE0000;
        }
        /* .logos .lgs{
            margin-left: 1px;
        } */
    </style>
    <!-- نهاية عنصر style -->
    <title>Document</title>
</head>

<body>
    <div class="footer">
        <div class="logos">
            <ul>
                <li><a href="#" class="lgs">CARSHOP</a></li>
                <li>
                    <p class="lor">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus eum perferendis dolorem, beatae earum, debitis labore eveniet sit neque explicabo assumenda culpa dolore omnis? Placeat, quo voluptates? Necessitatibus, quam dolores!</p>
                </li>
                <li class="point"> <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <!-- <div class="page">
            <ul class="first"> 
                Page 
                <li><a href="#">Home</a></li>
                <li><a href="#">Cars</a></li>
                <li><a href="#">Part</a></li>
                <li><a href="#">Sales</a></li>
            </ul>
        </div> -->
        <div class="page">
            <p><b class="ls">Services</b></p>
        
            <h3>Product</h3>
            <h3>Help & Support</h3>
            <h3>Pricing</h3>
            <h3>FAQ</h3>
        </div>
        <div class="leagle">
            <ul class="secound">
                Leagle
                <li><a href="#">Privecy</a></li>
                <li><a href="#">Refund policy</a></li>
                <li><a href="#">cookie policy</a></li>
            </ul>
        </div>
        <div class="Contact">
            <ul class="theard">
                Contact
                <li><a href="#">USA</a></li>
                <li><a href="#">Japan</a></li>
                <li><a href="#">Germany</a></li>
            </ul>
        </div>
    </div>
</body>

</html>