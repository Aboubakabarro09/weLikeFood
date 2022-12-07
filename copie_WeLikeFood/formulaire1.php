<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">    
<title>welikefood</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="shot.css" defer> -->

<style type="text/css">
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
/*fin caroussel*/

a{
    text-decoration: none;
    color: black;
    font-size: 13px;
    font-family: sans-serif;
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
  margin-left: 250px;
}
.deroulant{ 
display: flex;
align-items: flex-end;
margin-left: 700px;
margin-top: -35px;
position: static; 
}

.licu:hover{
    background-size: 0 100%;
    background: linear-gradient(to top, rgba(0, 255, 255, 0.5) 0%, rgba(0, 255, 255, 0.5)10%, transparent 10.01% );
    text-decoration: none;
}
div.nav{
  margin-left: 160px;
  text-decoration: none;
}
a.lien{
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-family: sans-serif;
}
    </style>
</head>

<body style="max-width:100%;height:auto; min-width: 50%;">
    <div class="container-fluid">
  <header id="section">
 
   &nbsp;
  <div style="display: flex;align-items: center;">
    &nbsp;&nbsp;&nbsp;<a href="accueil_page.php"><img width="100" height="60" src="images/logo.png"></a>
    <input id="rech" type="text" name="rech">
    <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
    <img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
    <img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
    <input type="button" name="connexion" id="connexion" value="connexion">
    &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
  </div><br>

    <!--div de la 2eme ligne-->
<section class="bloc">
    <div class="gg">
      <div class="nav">
        <div class="licu"><a href="http://" class="lien"><p>TOUT &nbsp;&nbsp; </p></a><div class="souligne"></div></div>
   
        <div class="licu"><a href="http://" class="lien"><p>IMAGES &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://" class="lien"><p>VIDEOS &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://" class="lien"><p>CARTES &nbsp;&nbsp;</p></a><div class="souligne"></div></div>
   
         <div class="licu"><a href="http://" class="lien"><p>ACTUALITES &nbsp;&nbsp;</p></a><div class="souligne">
           </div>
         </div>
      </div>
       <div class="deroulant">
         <span>filtre de publication :</span>
            <select name="selecteur" value="selecteur" id="selecteur" style="border-style: none;font-weight: bold;">
                <option value="" selected disabled>tout</option>
                <option value="restaurant">restaurant</option>
                <option value="conseil">conseil</option>
                <option value="recette">recette</option>
                <option value="retour d'experience"> retour d'experience</option>
            </select>
         <span class="cosinus"><img src="images/filtre.png" width="20"></span>
         &nbsp;&nbsp;<a href="publication.php"><button style="text-decoration: none; border: 1px solid gray; font-family: 'roboto';">publier</button></a>
        </div>
    </div>
</section>
  </header>
  </div>
  <!--trait de separation-->
<hr style="width: 100%; height: 1px; background-color:black;">

  <section>
   <div class="swiper mySwiper">

                    <!-- les fleches -->
        <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-right: 0; margin-bottom: 10em;"></div>
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
</section>
 </header>


<?php 
include('connexion.php');
@$id=(int)$_GET['id'];
$sql = "SELECT * FROM publication  WHERE id='$id' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ?>

      <style type="text/css">
          div.jumbotron{
           background: white;
           /* margin:-10%; */
          }

        div.gallery{
          border: 2px solid #008518;
          width: 360px;
          height: 315px;
          border-radius: 30px;
        }

        div.gallery img{
          width: 320px;
          height: 240px;
          margin-top: 38px;
          border-radius: 10px;
        }

        .type{
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #008518;
        font-size: xx-large;
        font-family: sans-serif;
        font-weight: bold;
        }

    .titre{
         color: #3551EC ;
        }
        .descr{
          color:#000000;
        }
        .date{
          color:#596CE5;

        }
        .like_dis{
          margin-top: -179px;
          margin-left: -85px;
        }

    textarea.commente{

      display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          margin-right: 20px;
          /* margin-top:-80px; */
          color: gray;
          border: 3px solid blue;
          border-radius: 20px;
          height: 80px;
          width: 700px;
          padding: 1em;
          /*resize: none;*/
          outline: currentColor;
          font-size: 18px;
          font-weight: 500;
          line-height: 1.5;

        }
          .box{
          display: flex;
          border-radius: 60px;
          border: 5px solid blue;
          background-color: blue;
          width: 70px;
          height: 70px;
          margin-left: 750px;
          margin-top: -70px;

          }
          .container{
            margin-top: 150px;
          }
         



      </style>
      <?php 
      while($rows = mysqli_fetch_assoc($result)) {
    ?>
    <h1 class="type">
    <?=$rows["type"]?>
    </h1>
    <div class="container-fluid text-center" id="statut">
    <div class="row">
      <div class="col-12 col-md-6 col-log-3">
        <div class="jumbotron">
          <div class="gallery"> 
             <a href="#">
                <img style="margin-left: ;" src="<?=$rows['photo']?>">
              </a>
              <div class="like_dis">
               <?php include("action.php");?>
          </div>
          </div>
          
        </div>
      </div>

      <div class="col-12 col-md-6 col-log-3">
        <div class="jumbotron">
            <p class="titre"><?=$rows["titrePublication"]?></p><br>
            <p class="descr"><?=$rows["texte"]?></p><br>
            <p class="date"> publié le <?=$rows["date_publication"]?></p><br>
        </div>
      </div>
        
   </div>
   </div>
<br><br><br>

   <?php
 }
}

mysqli_close($conn);
 ?>

<div class="container" id="line">
    <form name="publication" method="post" action="formulaire1.php" enctype="multipart/form-data">
     <textarea class="commente" name="comment" placeholder="commentaire..." cols="50" rows="4"></textarea>
     <!-- <input type="submit" name=""> -->
      <button type="submit" class="box">
   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
</svg>
</button>
    </form>
    <!-- <h2>Commentaire</h2> -->
        <?php 
include('connexion.php');
//@$id=(int)$_GET['id'];
$sql = "SELECT * FROM commentaire";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
        while($nows = mysqli_fetch_assoc($result)) {
 ?>

    <div>
      <p class=""><?=$nows["id_utilisateur"]?></p>
      <p class=""><?=$nows["contenu"]?></p>
      <p class=""><?=$nows["date_edit"]?></p>
      
    </div>
    <?php 
    }
    }
     ?>


</div>
 


  <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script defer>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 10,
        spaceBetween: 1,
        slidesPerGroup: 5,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
 </body>
 </html>

