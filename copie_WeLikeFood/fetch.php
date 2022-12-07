<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="shot.css">
<title></title>
<style>
   div.gallery{
          display: inline-block;
          flex-direction: row;
          align-items: center;
          position: relative;
          margin: 13px;
          border: 1px solid #ccc;
          width: 220px;
          height: 270px;
          border-radius: 10px;
        }
        div.gallery img{
          width: 290px;
          height: 260px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          
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

</style>
    </head>
    <body>
        <!-- filtre par type -->
        <?php include('redirection.php'); ?>
</body>
</html>
