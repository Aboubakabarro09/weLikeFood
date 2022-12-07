<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">		
<title>welikefood</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="carouselScript.js" defer></script>
<link rel="stylesheet" type="text/css" href="shot.css" defer>
<link rel="stylesheet" type="text/css" href="page.css">

<style type="text/css">

html, body {
position: relative;
height: 100%;
}

.overlay {
  margin-left: 10px;
  margin-bottom: -10px;  
  opacity: 0;
  transition: .5s ease;
  opacity:0;
  color: white;
  vertical-align: text-bottom;
  font-size: 11px;
  float: left;
  text-align: left;
  margin-top: 205px;
}

#commentaire {
	
	border-style: solid;
	border-color: lightgray;
	border: solid 1px;
	height: 30px;
	width: 130px;
	text-align: right;
	float: right;
	  background: #f2f2f2;
    border: 1px solid #999;
    bottom: 0;
    color: #36b;
    cursor: pointer;
    display: block;
    height: 28px;
    line-height: 28px;
    min-width: 110px;
    padding: 0 5px;
    position: fixed;
    right: 20px;
    text-align: center;
    z-index: 4;
    font-family:'Roboto',Helvetica,Sans-Serif;
    font-size: 13px;
}

/*caroussel*/
        .swiper {
        width: 100%;
        height:  30%;
        display: flex;
        }

      .swiper-slide {
        
        font-size: 18px;
        background: #fff;
        margin: 5px;
        padding: 15px;
        display: flex;
        border-radius: 50px;   
        text-align: center;
        border: 0.5px solid skyblue;
        width: 170px;
        height: 75px;      
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {  
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;    
       
      }

.div_text_scroll {
      font-size: 10px;
  font-family:'Roboto',Helvetica,Sans-Serif;
      width: 100px;
      height: 50px;
      margin-left: 6px;
      margin-bottom: -8px;
}
.img_scroll {
      width: 40px;
      height: 40px;
      border-radius: 40%;
      margin-left: 0;
}
     /*fin caroussel*/

  
header {
			min-width: 50%;
      max-width: 100%;
}
html,body {
      height: 100%;
      position: relative;
}
head {
  min-width: 1000px;
}

div.gallery{
          display: inline-block;
         flex-direction: row;
         align-items: center;
          margin: 13px;
          border: 1px solid #ccc;
          width: 220px;
          height: auto;
          border-radius: 10px;
          padding: auto;
}
div.gallery img{
          width: 285px;
          height: 260px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          padding: auto;
          
}
div.overlay{
         position: absolute;
          margin-top: -40px;
          color: transparent;
          text-align: center;
          opacity: 1;
          width: 20%;
}
div.gallery :hover .overlay{
          color: #ccc;
          text-decoration: underline;
          width: 209px;
          opacity: 1;
          box-shadow: inset 0 -60px 10px 40px rgba(0, 0, 0, 0.5);
} 
div.desc {
  font-size: 10px;
  text-align: center;
  width: 200px;
  height: 60px;
}

.gallery:hover {
 opacity: 1;
 box-shadow: -5px 5px 5px 4px rgba(0, 0, 0, 0.5);
}
 .contenant:hover .overlay {
  opacity: 1;
}
#rech {
  width: 600px;
  height: 40px;
  border-radius: 20px;    
  margin-left: 20px;      
  box-shadow: 1px 1px 5px lightgray;
  border-style: inherit;
}

#connexion {
        margin-left: 350px;
        font-size: 16px;
}
</style>

</head>

<body style="max-width:100%;height:auto; min-width: 50%;">
  <div class="container-fluid">
  <header id="section">
 
   &nbsp;
  <div style="display: flex;align-items: center;">
    &nbsp;&nbsp;&nbsp;
    <a href="accueil_page.php"><img width="100" height="60" src="images/logo.png"></a>
    <input id="rech" type="text" name="rech">
    <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
    <img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png"> 
    <img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
    <input type="button" name="connexion" id="connexion" value="connexion">
    &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
  </div>
  <br>

	  <!--div de la 2eme ligne-->
<section class="bloc">
    <div class="gg">
      <div class="nav">
        <div class="licu"><a href="http://"><p>TOUT &nbsp;&nbsp; </p></a><div class="souligne"></div></div>
   
        <div class="licu"><a href="http://"><p>IMAGES &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://"><p>VIDEOS &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://"><p>CARTES &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://"><p>ACTUALITES &nbsp;&nbsp;</p></a><div class="souligne"></div>
       </div>
      
       <div class="deroulant">
         <span>filtre de publication :</span>
            <select name="selecteur" value="selecteur" id="selecteur" style="border-style: none;font-weight: bold; font-size:18px;">
                <option value="" selected disabled>tout</option>
                <option value="restaurant">restaurant</option>
                <option value="conseil">conseil</option>
                <option value="recette">recette</option>
                <option value="retour dexperience"> retour d'experience</option>
            </select>
         <span class="cosinus"><img src="images/filtre.png" width="20"></span>
         &nbsp;&nbsp;<a href="publication.php"><button style="text-decoration: none; border: 1px solid gray; font-family: 'roboto';">publier</button></a>
        </div>
    </div>
</section>
	<!--trait de separation-->
  </header>
</div>
<!--trait de separation-->
<hr style="width: 100%; height: 1px; background-color:black; margin-top: -1px;">
	 
<div class="container-fluid">
	 <div class="swiper mySwiper">

                    <!-- les fleches -->
        <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-left: 10px; margin-bottom: 10em;"></div>
        <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold; margin-bottom: 10em;"></div>

      <div class="swiper-wrapper">


<?php

include('connexion.php');

$sql = "SELECT * FROM publication ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ?>

  <!-- recuperation ID pour afficher les elements du carrousel -->
  <?php 
      while($rows = mysqli_fetch_assoc($result)) {
  ?>
  <div class="swiper-slide"> 
   <a href="formulaire1.php?id=<?=$rows['id'];?>">
     <img class="img_scroll" src="<?=$rows['photo'];?>">
   </a>  
   <p class="div_text_scroll" style="line-height: 150%;"><?= $rows["titrePublication"]."<br>"."<b>".$rows["type"]."</b>"; ?></p>
  </div>
   <?php
 }
}
mysqli_close($conn);
?>

<?php ?>
     </div>
    </div>
  </div>
 </header>


	<!--galerie image-->
  <div class="page">
  <?php

include('connexion.php');

//select first post
$sql = "SELECT * FROM publication ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ?>

        <?php 
        while($rows = mysqli_fetch_assoc($result)) {
      ?>
    <div class="gallery" id="gallery" style="display: none">
    <a href="formulaire1.php?id=<?=$rows['id'];?>">
       <img style=" width: 219px; height: 200px;" src="<?=$rows['photo']?>">
      <div class="contenant" >
      <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
      </div>
    </a>
    <div class="desc"><p><?=$rows["texte"]."<br> ".$rows["date_publication"]?></p></div>
    </div>
     <?php
      $lastid= $rows['id'];
      }
 }

mysqli_close($conn);
?>

<div class="load-wrap text-center">
        <button class="btn" style="width:1135px; border: 4px solid green; padding: 10px; font-size: 28px; border-radius: 60px;">voir plus...</button>  
    </div>
  </div>
   

<!-- 
 -->
<!--commentaire-->
<div class="commentaire" id="commentaire">
<a style="margin-top: 5px;" href="#">
	<img style="float: left;border: 0;
    height: 14px;
    margin: 0 5px -4px 0;
    width: 14px;
    display: inline;
    margin-top: 8px;
    " src="images/commentaire.jpg">
<div >commentaire</div>
</a>


</div>

<!--fin commentaire-->

	
<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      $(document).ready(function (){
        $("#selecteur").on('change', function(){
          var value=$(this).val();
          // alert(value);
          $.ajax({
             url: "redirection.php",
            type: "POST",
            data: 'request=' + value,
            // beforeSend: function (){
            //   $(".page").html("<span>patientez...</span>");
            // },
            success:function(data){
              $(".page").html(data);
            }
          });
        });
       });


      $(document).ready(function(){
    $('.gallery').slice(0,10).show()
    $('.btn').on('click',function(){
        $('.gallery:hidden').slice(0,10).slideDown('show')
        if($('.gallery:hidden').length ==0 ){
            $(this).text('Il y a plus d\'images à afficher');
        }
        return false;
    });
    });
    </script>
</body>
</html>


