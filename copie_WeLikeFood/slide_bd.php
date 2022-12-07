<?php

include('connexion.php');

$sql = "SELECT * FROM publication ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <!-- <style type="text/css">
     .div_text_scroll {
      font-size: 15px;
      width: 100px;
      height: 50px;
      margin-left: 6px;
      margin-bottom: -8px;
    }
    .img_scroll {
      
      width: 60px;
      height: 50px;
      border-radius: 50%;
      margin-left: 0;
    }
   </style> -->
 </head>
 <body>
<?php 
      while($rows = mysqli_fetch_assoc($result)) {
?>
  <div class="swiper-slide"> 
  <a href="formulaire1.php?id=<?=$rows['id'];?>">
     <img class="img_scroll"> src="<?=$rows['photo']?>">
  </a>  
  <div class="div_text_scroll"><?=$rows["titre"]?></div>
  <div class="div_text_scroll"><?=$rows["date_publication"]?></div>

</div>
   <?php
 }
}

mysqli_close($conn);
?>

        </div>
      </div>
    </div>
</div>
</body>
</html>