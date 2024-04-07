<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>

    <section class="first">
        <div class="parg">
            <b>We Have Everything
                <br>Your <b class="car_name">Car</b> Need
            </b>
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit <br>
                Quisquam iure id velit fugiat similique. </p>
            <br>
            <button onclick="changecolorbackground()" >Chang color</button>
        </div>
        <div class="picture">
            <img src="img/mercedes_PNG1861.png" alt="car">
        </div>
    </section>
     <!---------------------------------------second section----------------------------->
     <br>
    <section class="second" id="nav">
        <h1 class="titl">Some Car</h1>
        <h6 class="sub_title">We have all types Cars</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <br><br> <br>
        <div class="typ1_car">
            <!-- <div>
                <img src="./img/a.png" alt="cc" width="380px">
            </div> -->
            <div>
                <img src="./img/b.png" alt="dd" width="380px">
            </div>
            <div>
                <img src="./img/c.png" alt="dd" width="380px">
            </div>
            <div>
                <img src="./img/d.jpg" alt="ss" width="380px">
            </div>
            <div>
                <img src="./img/e.png" alt="aa" width="380px">
            </div>
            
        </div>
        <div class="buy">
            <button>DODG</button>
            <button>KIA</button>
            <button>MRCEDES</button>
            <button>LUXIS</button>
        </div>


    </section>

    <br><br><br><br><br><br>
    <!-- ---------------------------------------------------------contact--------------------------------------- -->
    <section class="three" class="contact">

        <p><b>Subscribe To Newsletter</b></p>
        <div>
            <input type="email" placeholder="Enter Your Email..">
            <button type="submit">SUBSCRIBE</button>
        </div>
        <button id="btnn"><img src="./img/up-row-1-512.png" alt="" width="40px"></button>
    </section>
    <!-- ----------------------------------------------------------about--------------------------------------------------- -->
    <section class="about">
        <div class="about_div">
            <div class="div1">
                <img src="./img/pexels-geancarlo-peruzzolo-14471686 (1).jpg" alt="oooo">
            </div>
            <div class="div2">
                <h1>About Us</h1>
                <br>
                <br>
                <p><b>Cars is important part <br> for comfort</b></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                    elit,<br> Nesciunt amet minus mollitia impedit qui asperiores!</p>
                <button>Learn More</button>      
            </div>
            
        </div>
        
    </section>
    



</body>

</html>


<!-- -----------------------------footer------------------------------------ -->
<?php
include('footer.php');
?>


<!-- ---------------------------------css scroll----------------------------------------------->
<style>
#btnn{
    width: 50px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background-color:#FE0000;
    cursor: pointer;
    bottom: 10px;
    right: 10px;
    margin-left: 1620px;
}
</style>

<!-- ---------------------------------------------home page------------------------------------->

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .first {
        display: flex;
        padding-top: 80px;
        margin-left: 10px;
        justify-content: space-between;
        background: url(./img/675px-Flag_of_the_Israeli_Medical_Corps.svg.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: right;
        height: 60vh;
    }

    .first .parg {
        padding-left: 240px;
        padding-top: 60px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;
    }

    .first .parg b {
        font-size: 43px;
        color: rgb(4, 3, 3);
    }

    .first .parg .car_name {
        color: #FE0000;
    }

    .first .parg p {
        color: rgb(79, 74, 69);
        font-size: 14px;
    }

    .first .parg button {
        background-color: #FE0000;
        width: 138px;
        height: 50px;
        border-radius: 4px;
        font-size: 18px;
        border: none;
    }

    .first .parg #first_button {
      
        color: white;
    }

    .first .picture {
        padding-right: 350px;
        padding-top: 70px;
    }
 /* ------------------------------------second--------------------------- */
 .second .titl {
        padding-bottom: 3px;
        text-align: center;
        font-size: 23px;
        color: #FE0000;
    }

    .second .sub_title {
        padding-bottom: 3px;
        text-align: center;
        font-size: 26px;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
    }

    .second p {
        text-align: center;
        font-size: 26px;
        color: gray;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .second .buy{
        display: flex;
    
    }
    .second .buy button:hover{
     
        color: #FE0000;
       background-color: white;
        border:#FE0000 solid 1px;
       
    }
    .second .buy button{
   color: white;
   background-color: #FE0000;
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 18px;
   border-radius: 8px;
   border: none;
    }

    .second div {
        margin-top: 30px;
        display: flex;
        justify-content: space-around;
        padding: 1px;
    }

    .second {
        margin-top: 90px;
    }

    .second .typ1_car {
        padding-top: 30px;
    }

    .second .typ1_car div {
        display: block;
    }

    .second button {
        width: 80px;
        height: 40px;
        /* margin-left: 40px; */
    }
    .second .typ1_car img:hover{
     width: 400px;
    }
    
    /* -----------------------------contact----------------------------- */
    .three {
        background-color: #FE0000;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: right;
        background-attachment: fixed;
        height: 30vh;
        width: 100%;
    }

    .three div {
        margin-top: 40px;
        margin-left: 600px;
    }

    .three p {
        padding-top: 40px;
        margin-top: 60px;
        font-size: 37px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-left: 590px;
        color: white;
    }

    .three div input {
        margin-top: 15px;
        /* margin-right: -5px; */
        width: 290px;
        height: 42px;
        border-radius: 4px;
        color: black;
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        border: none;
    }

    .three div input::placeholder {
        padding: 5px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 15px;
    }

    .three div button {
        border-radius: 4px;
        width: 121px;
        height: 43px;
        margin-right: 30px;
        background-color: black;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 15px;
        border: none;
    }

    .three div button:hover {
        background-color: white;
        color: black;
        font-size: 20px;
    }


    /* -----------------------------------------------about------------------------------ */
    .about .about_div {
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        padding: 50px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .about .about_div .div1 img {
        margin-top: 40px;
        margin-left: 120px;
        border-radius: 6px;
        width: 460px;
        box-shadow: 0 17px 10px gray;
    }

    .about .about_div .div1 img:hover {
        box-shadow: 0 17px 10px rgb(255, 255, 255);
        width: 400px;
    }

    .about .about_div .div2 {
        margin-right: 150px;
        margin-top: 40px;
    }

    .about .about_div .div2 h1 {
        margin-left: 140px;
        font-size: 40px;
    }

    .about .about_div .div2 p {
        font-size: 20px;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .about .about_div .div2 button {
        margin-top: 80px;
        margin-left: 130px;
        width: 145px;
        height: 40px;
        font-size: 24px;
        color: white;
        background-color: black;
        border-radius: 4px;
    }

    .about .about_div .div2 button:hover {
        background-color: #FE0000;
        color: black;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
</style>



<!-- -------------------------------js scroll--------------------------- -->
<script>
  let btn = document.getElementById('#btnn');
//   window.scroll = function(){
//    if(scrollY >= 400){
//     btn.style.display ='block';
//    }
//    else{
//     btn.style.display = 'none';
//    }
//   }
  btnn.onclick = function(){
    scroll({
        left : 0,
        top : 0 ,
        behavior:"smooth"
    })
  };
</script>

<!-- ------------------------------------js for change color-------------------------- -->
<script>
function changecolorbackground(){
    document.getElementById('nav').style.backgroundColor='rgba(0,0,0,0.4)';
}
</script>

