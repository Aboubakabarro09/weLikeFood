<?php
// include('connexion.php');
$con=mysqli_connect('localhost','spcom_userbarro','FM5KPXJGNIQD','spcom_barro');
$id=(int)$_GET['id'];
$sql = "SELECT * FROM publication  WHERE id='$id' ";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {

?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

      .glyphicon{
        top: 15px;
        position: absolute;
      }
      .row{
        margin-left: 20%;
        margin-top: -8px;
        /* width:100%; */
        
      }

    .container{
      width:70%;
      height: 0%;
      margin-bottom: 2em;

    }
    .main_box{margin-top:30px; padding:4%;}
    .mr25{margin-right:25px;}
    </style>
  </head>
  <body>
    
      <?php while($row=mysqli_fetch_assoc($res)){?>

     <div class="container"> 
      <div class="row main_box">
        <div class="col-sm-4 mr25">
          <span id="like_loop_<?php echo $row['id']?>" style="border-radius: 70px; border: 20px solid blue; margin-left:-32px;"><?php echo $row['count_like']?></span>
          <a href="javascript:void(0)" style="color: blue; font-size:30px; align-items: center; margin-left:5px;">
            <span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['id']?>')"></span>
          </a>
        </div>
        <div class="col-sm-4 mr25">
           <span id="dislike_loop_<?php echo $row['id']?>" style="border-radius: 50px; border: 20px solid red; margin-left: 33px; display:flex; margin-bottom:10%"><?php echo $row['count_dislike']?></span>
          <a href="javascript:void(0)" style="color: red; font-size:30px; align-items: center; margin-left:82px;">
            <span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['id']?>')"></span>
          </a>
        </div>
      </div>
          </div>
      <?php 
    }
    }
      mysqli_close($con); 
      ?>

    <script>
    function like_update(id){
      jQuery.ajax({
        url:'update_count.php',
        type:'post',
        data:'type=like&id='+id,
        success:function(result){
          var cur_count=jQuery('#like_loop_'+id).html();
          cur_count++;
          jQuery('#like_loop_'+id).html(cur_count);
      
        }
      });
    } 
    
    function dislike_update(id){
      jQuery.ajax({
        url:'update_count.php',
        type:'post',
        data:'type=dislike&id='+id,
        success:function(result){
          var cur_count=jQuery('#dislike_loop_'+id).html();
          cur_count++;
          jQuery('#dislike_loop_'+id).html(cur_count);
      
        }
      });
    } 
    </script>
  </body>
</html>