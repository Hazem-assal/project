<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
  
    <button class="btn_add"><a href="db_admin.php">Add item</a></button>   
    <br> <br>
    
    <table  cellspacing="15">
        <tr>
            <th>Id</th>
            <th>name_car</th>
            <th>name_company</th>
            <th>color</th>
            <th colspan="2" align="center">Operation</th>
        </tr>

        <?php
       include("config.php");
       $r=Mysqli_query($conn,'select * from info_item');
       while($data=mysqli_fetch_array($r)){
      
        echo "
        <tr>
       <td>".$data['id']."</td>
       <td>".$data['name_car']."</td>
       <td>".$data['name_company']."</td>
       <td>".$data['color']."</td>
       <td><a href='delet.php ?userid=$data[id]' class='btn_delet'>Delete</a></td>
       <td><a href='update.php ?userid=$data[id] & nc=$data[name_car] & ncom=$data[name_company] & colo=$data[color]' class='btn_updat'>Update</a></td>
       </tr>
          ";
       }
    

        ?>

        
    </table>
   


</body>
</html>
<!-- --------------------------------css table---------------------------- -->
<style>
  table{
    border: 1px solid #EF3333;
    border-radius: 8px;
    box-shadow: 0  17px 10px gray;
    
  }
table{
    margin-top: 5px;
    margin-left: 430px;
    width: 100px;
  background-color: white;

}
table td .btn_delet{
  margin-left: 30px;
  font-size: 23px;
  font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  color: #EF3333;
  text-decoration: none;

}
table td .btn_delet:hover{
  color: black;
}
table td .btn_updat{
  margin-left: 35px;
  font-size: 23px;
  font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  color: black;
  text-decoration: none;
}
table td .btn_updat:hover{
  color: #EF3333;
}
table th {
    padding: 5px;
    font-size: 27px;
    color: white;
    background-color:  #EF3333;
}

</style>
<!-- ------------------------------------------css------------------------ -->
<style>
  .btn_add{
    margin-left: 445px;
    margin-top: 80px;
    font-size: 22px;
    width: 145px;
    height: 50px;
    border: #EF3333 2px solid;
    border-radius: 4px;
    background-color: white;
  }
  .btn_add a{
    text-decoration: none;
    color: #EF3333;
  }
  .btn_add:hover{
    color: white;
    background-color: black;
    border: none;
  }


</style>


























