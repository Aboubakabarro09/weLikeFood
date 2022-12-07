<?php
$con=mysqli_connect('localhost','spcom_userbarro','FM5KPXJGNIQD','spcom_barro');
// $con=mysqli_connect('localhost','root','','principal');
$type=$_POST['type'];
$id=$_POST['id'];
if($type=='like'){
   $sql="UPDATE publication set count_like=count_like+1 WHERE id=$id";
}else{
   $sql="UPDATE publication set count_dislike=count_dislike+1 WHERE id=$id";
}
$res=mysqli_query($con,$sql);
?>