<?php
$id = NULL;
$full_url = NULL;
if (isset($_POST['id']) and $_POST['id'] != "") {
    $full_url = $_POST['id'];
    $values = explode("v=", $_POST['id']);
    $id = $values[1];
    if ($id != "") {
        $data = file_get_contents("https://www.youtube.com/get_video_info?video_id={$id}");
        parse_str($data, $datos);
        $player_response = json_decode($datos['player_response']);
        $arr = explode(",", $datos['url_encoded_fmt_stream_map']);
    }
}
?>
<html>
    <head>
<title>Descargar Videos de Youtube
</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
}
body{
  background-color:#989898;
}
.row{
  display:flex;
  justify-content:flex-start;
  align-items:stretch;
  flex-wrap:nowrap;
  padding:10px;
}
.cell{
  min-height:75px;
  flex-grow:1;
  flex-basis:100%;
}
body{
  color:#333;
  font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size:14px;
  line-height:1.42857;
}
.btn{
  -moz-user-select:none;
  background-image:none;
  border:1px solid transparent;
  border-radius:4px;
  cursor:pointer;
  display:inline-block;
  font-size:14px;
  font-weight:400;
  line-height:1.42857;
  margin-bottom:5px;
  padding:6px 12px;
  text-align:center;
  vertical-align:middle;
  white-space:nowrap;
  text-decoration:none;
}
.btn:focus{
  outline:thin dotted;
  outline-offset:-2px;
  color:#333;
  text-decoration:none;
}
.btn.active:focus, .btn:active:focus{
  outline:thin dotted;
  outline-offset:-2px;
}
.btn:hover{
  color:#333;
  text-decoration:none;
}
.btn:active{
  background-image:none;
  box-shadow:0 3px 5px rgba(0, 0, 0, 0.125) inset;
  outline:0 none;
}
.btn.active{
  background-image:none;
  box-shadow:0 3px 5px rgba(0, 0, 0, 0.125) inset;
  outline:0 none;
}
.btn-primary{
  background-color:#428bca;
  border-color:#357ebd;
  height:40px;
  color:#fff;
}
.btn-primary:hover{
  background-color:#3071a9;
  border-color:#285e8e;
  color:#fff;
}
.btn-primary:focus{
  background-color:#3071a9;
  border-color:#285e8e;
  color:#fff;
}
.btn-primary:active{
  background-color:#3071a9;
  border-color:#285e8e;
  color:#fff;
  background-image:none;
}
.btn-primary.active, .open > .dropdown-toggle.btn-primary{
  background-color:#3071a9;
  border-color:#285e8e;
  color:#fff;
  background-image:none;
}
.btn-default.active, .open > .dropdown-toggle.btn-default{
  background-color:#e6e6e6;
  border-color:#adadad;
  color:#333;
  background-image:none;
}
#ijyh{
  width:100%;
  margin-top:20px;
  text-align:center;
}
#video_url{
  width:50%;
  height:40px;
  color:#0000ff;
  font-size:20px;
}
#iframe{
  width:560px;
  height:315px;
}
#icbrl{
  width:90%;
  margin-left:5%;
  height:auto;
  min-height:100px;
  background-color:#292929;
  border-radius:5px 5px 5px 5px;
}
#ixsc4{
  text-align:center;
  margin-top:10px;
}
#icc1l{
  padding-top:10px;
}
#ii3rm{
  padding:10px;
  display:inline-block;
  text-align:center;
}
#igmf1{
  text-transform:uppercase;
}
#i9gxs{
  background-color:#fff;
  min-height:100px;
  width:200px;
  border-radius:4px;
  float:left;
  margin:10px;
  color:#537625;
  text-align:center;
  padding:10px;
}
#i4v4l{
  padding:10px;
  color:#ffffff;
  font-size:25px;
  text-align:center;
}
#ireaf{
  color:#ffffff;
  font-size:16px;
}
#iuat4{
  padding:0 10px 0 10px;
  height:3px;
  width:auto;
  min-height:auto;
  opacity:1;
  background-color:#FF0000;
}
.btn.btn-primary{
  background-color:#ff0000;
}
#izutw{
  margin:0 0 14px 0;
  float:left;
}
@media (max-width: 768px){
  .row{
    flex-wrap:wrap;
  }
}
<!–– MENU DESIGN ––> 
/* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}
/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}
/* Current/active navbar link */
.active {
  background-color: #FF0000;
}
/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
    
<!–– MENU ––> 

<div class="navbar">
  <a class="active" target="_blank" href="http://abrahamjuarbe.us"><i class="fa fa-fw fa-home"></i> Inicio</a>
  <a target="_blank" href="http://abrahamjuarbe.us/youtube"><i class="fa fa-fw fa-globe"></i> YouTube</a>
  <a target="_blank" href="https://www.youtube.com/c/AbrahamJuarbeToledo"><i class="fa fa-fw fa-youtube"></i> YouTube</a>
</div>

<!–– DESCRIPTION ––> 
    
<div class="divTable blueTable">
  <div class="divTableBody">
    <div class="divTableRow">
    </div>
  </div>
</div>
<div id="i4v4l">Descargar tu video es muy sencillo, copia la URL, pégala y descarga.
</div>
<form method="POST" enctype="multipart/form-data" action="index.php" onsubmit="return validatebeforesubmit(this)" id="izutw">
</form>
<div class="row" id="iuat4">
</div>
<div id="ijyh">
  <form method='POST' enctype="multipart/form-data" action='index.php' onsubmit="return validatebeforesubmit(this)">
                <input id='video_url' style='width: 50%;height: 40px;color: #0000FF;font-size: 20px; ' autocomplete="on" type='text' name='id' value='<?= $full_url ?>' placeholder="Pegue la URL del video de YouTube aquí" onclick="clearContent()" />
                <input class='btn btn-primary' type='submit' value='DESCARGAR' name='submit'>
            </form>
</div>

<!–– POP UP EMPTY URL ––> 

<script>
  function validatebeforesubmit(thisform) {
  var yout = thisform.id.value;
  if(yout==null || yout == "")
     {
     alert("Ingresa la URL del video de Youtube");
     thisform.id.focus();
     return false;
     }
  return true;
  }   
  </script>
  
<!–– GOOGLE AD 1 ––> 

<center id="ireaf">
  <div class="row">
    <div class="cell" id="ilvhi">
    
    </div>
    
<!–– VIDEO ––> 
    
    <div class="cell">
      <iframe id="iframe" style="width: 560px; height: 315px"
            src="//www.youtube.com/embed/<?= htmlspecialchars($id) ?>"
            data-autoplay-src="//www.youtube.com/embed/<?= htmlspecialchars($id) ?>?autoplay=1"></iframe>
    </div>
    
<!–– GOOGLE AD 2 ––> 

    <div class="cell" id="iqf6s">
       
    </div>
  </div>
</center>

<!–– DOWNLOAD BOX ––> 

<center>
<?php if (isset($arr[0])) { ?>
            <div style='width: 900px; background-color: #FF0000;height:auto; border-radius: 4px;'  align="center";>
                <div style='text-align: center;margin-top: 10px;'><h3 style='padding-top: 10px;color: white;'><?= htmlspecialchars($player_response->videoDetails->title) ?></h3></div>
                <div style='text-align: center;margin-top: 10px;'><img src='https://i.ytimg.com/vi/<?= htmlspecialchars($id) ?>/mqdefault.jpg' alt='Icon'/></div>
                <div style='padding: 10px;display: inline-block;text-align: center'>
                    
<!–– INNECESARIO START ––>
                    <?php
                    foreach ($arr as $item) {
                        parse_str($item, $elemento);
                        $temp = explode(";", $elemento['type']);
                        $extensions = explode("/", $temp[0]);
                        $extension = $extensions[1];
                        switch ($extension) {
                            case '3gpp':
                                $icon = "3gp.PNG";
                                break;
                            case 'mp4':
                                $icon = "mp4.PNG";
                                break;
                            case 'webm':
                                $icon = "webm.PNG";
                                break;
                            case 'x-flv':
                                $icon = "flv.PNG";
                                break;
                        }
                        ?>
<!–– INNECESARIO END ––>
                    
                        <a href="<?= htmlspecialchars($elemento['url']) ?>" target="_blank" style='text-decoration: none;display: inline-block;'>
                            <div style='background-color: #fff;min-height: 80px;width:250px;border-radius: 4px;float: left;margin: 10px;color: #537625;text-align: center;padding: 10px;'>
                                <p><span class="label label-primary pull-center">DESCARGAR</span></p>
                                <h4 style='padding-top: 10px;color: red;'><?= htmlspecialchars($player_response->videoDetails->title . " • " . $elemento['quality'] . " • " . $extension) ?></h4>
                            </div>
                            
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
        <script>
            function return validatebeforesubmit(this) {
                var url = document.getElementById("video_url").value;
                var protomatch = /^(https?|ftp):\/\//; // NB: not '.*'
                var b = url.replace(protomatch, '');
                document.getElementById("video_url").value = b;
            }
            function clearContent() {
                document.getElementById("video_url").value = "";
            }
        </script></center>
        </body>
</html>
