<!DOCTYPE html>
<?php include './includes/functions.php'; ?>
<html lang="en">
<title>Camera Test: Cross Browser</title>
<head>    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../_styles/bootstrap_css/bootstrap.css" rel="stylesheet">
    <link href="./stylesheet/css/custom.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../_styles/bootstrap_js/bootstrap.js"></script>
   

</head>



<body>


 <div class="wrapper">
    <div class="container">

         <h1>Registered Users <h1>
          <h4><a href="./index.php"> Form </h4>

          <div class="inner-container">
          <?php
                 /** DISPLAY UPLOADED FILES **/
                 $getUsers = getUsers(); 
                 foreach($getUsers as $row) {
                 $id = $row['id'];
                 $name = $row['name'];
                 $descri = $row['descri'];
          ?>

          <div class="media">
          <div class="media-left">

          <a href="#">
           <img class="media-object" src="./files/<?php echo $id; ?>.jpg" alt="...">
          </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $name; ?></h4>
            
            <p class="descri"> <?php echo $descri; ?></p>
            </div>
          </div>

          <?php } ?>
          </div> <!-- /inner -->



</div> <!-- /container -->
</div> <!-- /wrapper -->
<footer>
    
     
 </script>
 </footer>
</html>
