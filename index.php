<?php
    include "db.php";
    $result = mysqli_query($mysql, "SELECT name FROM help_category WHERE name LIKE('%1.jpg')");
?>
<DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    </main>
    <footer>
<div style = "position: absolute; left: 0%;top:20%; width: 100%; height: 20%; color:black">


</div> 
<table>
        <tr>
        <?php 
        while($name = mysqli_fetch_assoc($result)){
           ?>
  
            <td><?php echo $name['name'];?></td>
            <td><img src = "/img/<?php echo $name['name'];?>" ></img></td> 
            <?php
          }
        ?>
        </tr>
        <tr>
        <?php
        $result = mysqli_query($mysql, "SELECT name FROM help_category WHERE name LIKE('%2.jpg')");
        while($name = mysqli_fetch_assoc($result)){
           ?>

            <td><?php echo $name['name'];?></td>
            <td><img src = "/img/<?php echo $name['name'];?>" ></img></td>
            <?php
          }
        ?>
        </tr>
        
    </table>
 </div>
 <div class = "text" style = "position: absolute; left: 1%;top:20%; width: 40%; height: 10%; color: white"><?php ; ?> </div>
 
    </footer>
  </body>
  </html>