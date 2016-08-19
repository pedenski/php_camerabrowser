<!DOCTYPE html>

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
   

    <!-- webcam JS from https://github.com/jhuckaby/webcamjs -->
    <script src="./stylesheet/js/webcam.js"></script>
    <!-- DISPLAY CAPTURED IMAGE IN DIV @id="myform" -->
    <!-- This must be on top right before camera initialization -->
    <script language="JavaScript">
        //SET CAMERA SIZE
         Webcam.set({
                width: 320,
                height: 240,
                dest_width: 100,
                dest_height: 100,
         });
         //UPON SNAPSHOT WHAT TO DO
         function take_snapshot() {
          Webcam.snap( function(data_uri) {
            document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
            document.getElementById('mydata').value = data_uri;
            document.getElementById('placeholder').style.display ="none";
          } );
        }
    </script>



</head>



<body>


 <div class="wrapper">
    

    <div class="container">


 <h1>Camera | Form <h1>

<h4><a href="./users.php"> Registered Users </h4>


<!--FORM -->
<form id="myform" method="post" action="./includes/upload.php">

<!-- INSERT DATA URI HERE FOR SUBMISSION TO PHP -->
<input id="mydata" type="hidden" name="mydata" value=""/>


<div class="media">
  <div class="media-left">

    <!-- ONCLICK TRIGGER MODAL -->
    <a href="#" data-toggle="modal" data-target="#myModal">
    <!-- DISPLAY IMAGE HERE -->
    <div id="my_result"></div>
    <!-- UPON CAPTURE REMOVE PLACEHOLDER -->
    <div id="placeholder"> </div>
    </a>
  

  </div>
  <div class="media-body">
    <h4 class="media-heading"><input type="text" class="form-control" name="name" id="inputfield" placeholder="name"></h4>
    <textarea  class="form-control" rows="10" name="description" id="inputfield" placeholder="Sample description" ></textarea>
  </div>
</div>
    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
       
</form>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Take a Picture</h4>
      </div>
      <div class="modal-body">
      
        <div class="container">


      <!-- DISPLAY LIVE STREAM/VIEW FROM CAMERA -->
      <div id="my_camera" style="width:320px; height:240px;"></div>
      <!-- INITIALIZE CAMERA UPON ACTIVATION OR SHOW OF MODAL -->
      <script src="./stylesheet/js/activate_camera.js"></script>
      <!-- ACTIVATES FUNCTION take_snapshot() -->
      <a href="javascript:void(take_snapshot())"></a>
        </div>
      





      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


        <!-- ON CLICK RUN FUNCTION take_snapshot() -->
        <button type="button" onclick="take_snapshot()" data-dismiss="modal" class="btn btn-primary">Take Snapshot</button>
      


      </div>
    </div>
  </div>
</div>
</div>
</div> <!-- /wrapper -->
<footer>
    
     
 </script>
 </footer>
</html>
