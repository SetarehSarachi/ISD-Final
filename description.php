<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Scoping Sim</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
  </script><!-- Latest compiled and minified CSS -->
  <script language="javascript" type="text/javascript">
function getPath() {
var Form = document.forms['frm_upload'];
var inputName = Form.elements['pfilename'].value;

var imgPath = inputName;
Form.elements['file_src'].value = imgPath;
}

</script>
  <link crossorigin="anonymous" href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity=
  "sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" rel="stylesheet">
  <!-- Optional theme -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> -->
  <!-- Latest compiled and minified JavaScript -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
  </script>
  <link href="css/style_description.css" property="stylesheet" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div id="header">
    <div id="login">
      <p>Hello, [Username]</p>
    </div>


    <div id="headtitle">
      <h1 id="logo"><img alt="Pitt Logo" class="displayed" src="pitt.png"> ScopingSim</h1>
    </div>
  </div>


  <div id="content">
    <div id="nav">
      <ul id="mainmenu">
        <li class="li">
          <a href="description.html" style="background-color:#CCCC99">Create New Project</a>
        </li>


        <li class="li">
          <a href="open_existing.html">Open Existing Project</a>
        </li>

<li class="li" id="logout" style="float:right">
                    <a href="#logout">Logout</a>
                </li>
                <li class="li" id="help" style="float:right">
                    <a href="#help">Help</a>
                </li>
                
      </ul>
    </div>
  </div>
<?php
ini_set('upload_max_filesize', '15M');
ini_set('post_max_size', '15M');
ini_set('max_input_time', 600);
ini_set('max_execution_time', 600);
    
         if(isset($_POST['add'])) {
            
      ini_set('upload_max_filesize', '10M');
      ini_set('post_max_size', '10M');
      ini_set('max_input_time', 300);
      ini_set('max_execution_time', 300);
      $name = $_FILES['file']['name'];
      $temp = $_FILES['file']['tmp_name'];
      move_uploaded_file($temp,"upload/" .$name);
            ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div id="column">
          <div id="descform" style="float: left; margin-top: 20px">
            <form name="frm_upload" action="description.php" method="post" enctype="multipart/form-data" onSubmit="getPath();">
              <p style="margin-top:4%">Enter name of the project :<br>
              <input placeholder=" Project Name" style="margin-top:2%" type="text"></p>


              <p style="margin-top:4%">Enter description of the project :<br>

              <textarea cols="70" id="tex1" name="Comment" placeholder=" Project Description" rows="4"
              style="width:130%; height:80px; box-sizing:border-box; margin-top:2%"></textarea><br></p>


              <p class="align">
              </p>


              <p>Upload the video :</p>
              <input type="file" name="file" id="file" >
              <p></p>
           
          </div>
        </div>

        <br>
        <button class="btn btn-default" id="add" name="add" style=
        "background-color:#0066CB;color:#ffffff;width: 150px;margin-left: 35%;margin-top: -3%;" type=
        "button">Preview</button>
        <a href="index.html"><button class="btn btn-default" id="continue" onclick="next()" style=
        "background-color:#0066CB;color:#ffffff;width: 150px;margin-left: 63%;margin-top: -10%;" type=
        "button">Continue</button></a>
      </div>


      <div class="col-lg-6">
        <div id="dropper" style="margin-right: 20px; float: left; margin-top: -235px">
          <img alt="Drop Video Here" class="img-rounded" height="300" src="images/white.jpg" width=
          "470">
<video class ="droptext" width="300" height="200" controls>
  <source src="upload/<?php echo $name ?>" type="video/mp4">
  </video>
          <p class="droptext" style="margin-top:2%">Video Preview</p>
        </div>
      </div>
       </form>
             <?php
         }
      ?>
    </div>
  </div>
</body>
</html>