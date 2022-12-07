<?php 
include('connexion.php');

if(isset($_POST['request'])){
    
    $request=$_POST['request'];
    $query="SELECT * FROM publication WHERE type = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);  
    while ($rows= mysqli_fetch_assoc($result)) { 
        ?>

  <div class="gallery" id="gallery"> 
  <a href="formulaire1.php?id=<?=$rows['id'];?>">
     <img style=" width: 219px; height: 200px;" src="<?=$rows['photo']?>">
    <div class="contenant" >
    <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
    </div>
  </a>
  <div class="desc"><p><?=$rows["texte"]."<br> ".$rows["date_publication"]?></p></div>
  </div>
 
<?php 
} 
}
?>
