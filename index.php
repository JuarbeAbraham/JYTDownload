<?php
$id = NULL;
$full_url = NULL;
if (isset($_POST['id']) and $_POST['id'] != "") {
    $full_url = $_POST['id'];
    $values = explode("v=", $_POST['id']);
    $id = $values[1];
    if ($id != "") {
        $data = file_get_contents("https://www.youtube.com/get_video_info?video_id={$id}");
        parse_str($data);
        $arr = explode(",", $url_encoded_fmt_stream_map);
    }
}
?>

<!–– TITULO VERDE ––> 
<?php
if(isset($_GET['ytlink'])) {
	$id=strip_tags($_GET['ytlink']);
	$id=trim($id);
}
if(!empty($id)) {
	if (strpos($id, 'youtube.com') !== FALSE)
	{
   	$query = parse_url($id, PHP_URL_QUERY);
   	parse_str($query, $params);
	$id = $params['v'];
	} 
	if (strpos($id, 'youtu.be') !== FALSE)
	{
    	$ex = explode('/',$id);
    	$id = end($ex);
	} 
	
eval(str_rot13(gzinflate(str_rot13(base64_decode('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
+F/j9+78=')))));
 if(isset($type)) {
	
	 // FETCHING DATA FROM SERVER
	 $jsonData = @file_get_contents("http://api.youtube6download.top/api/?id=$id");
	 $links = json_decode($jsonData,TRUE);
    } else { $error = "Error Found!"; }
 } 
?>
<!–– TITULO VERDE ––> 

<html>
    <head>
<title>Descargar Videos de Youtube
</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<!–– MENU DISENO ––> 

/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .middle {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

</style>
<body>
    
<!–– MENU ––> 
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://abrahamjuarbe.us" target="_blank">ABRAHAM JUARBE TOLEDO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a target="_blank" href="https://abrahamjuarbe.us">Inicio</a></li>
        <li><a target="_blank" href="https://abrahamjuarbe.us/youtube">YouTube</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!–– DESCRIPCION ––> 
    
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

<!–– POP UP ––> 

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
  
<!–– ANUNCIO 1 ––> 

<center id="ireaf">
  <div class="row">
    <div class="cell" id="ilvhi">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- YouTubeDownloader -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9373812112649041"
     data-ad-slot="9036680368"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    
<!–– VIDEO ––> 
    
    <div class="cell">
      <iframe id="iframe" style="width: 560px; height: 315px"
            src="//www.youtube.com/embed/<?php echo $id ?>"
            data-autoplay-src="//www.youtube.com/embed/<?php echo $id; ?>?autoplay=1"></iframe>
    </div>
    
<!–– ANUNCIO 2 ––> 

    <div class="cell" id="iqf6s">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- YouTubeDownloader -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9373812112649041"
     data-ad-slot="9036680368"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
  </div>
</center>

<!–– DESCARGAS ––> 

<center>
<?php if (isset($arr[0])) { ?>
            <div style='width: 700px; background-color: #FF0000;height:auto; border-radius: 4px;'  align="center";>
                <div style='text-align: center;margin-top: 10px;'><h3 style='padding-top: 10px;'><?= $title ?></h3></div>
                <div style='padding: 10px;display: inline-block;text-align: center'>
                    <?php
                    foreach ($arr as $item) {
                        parse_str($item);
                        $temp = explode(";", $type);
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
                        <a href='<?= $url ?>?title= <?= $title ?>' target="_blank" style='text-decoration: none;display: inline-block;'>
                            <div style='background-color: #fff;min-height: 80px;width:200px;border-radius: 4px;float: left;margin: 10px;color: #537625;text-align: center;padding: 10px;'>
                                <h4><?= $title . " " . $quality . " / " . $extension ?></h4>
                                <img src='<?= $icon ?>' alt='Icon'/>
                                
                                <!–– TITULO VERDE ––> 
                                
                                <?php
if(!empty($error)) { ?>

<div><br />
<div class="alert alert-warning">
  <strong>Warning!</strong> Something went wrong, Possible reasons!</div>
  <br>
  <ul>
	<li>Check Youtube video URL.</li>
	<li>Maybe That video have been deleted.</li>
	<li>Maybe You have entered something else except URL.</li>
  </ul>
</div>
<div>
<?php } else if(!empty($links)) {
echo '<br><h4>'.$ytinfo['title'].'</h4>
      <p><span class="label label-primary pull-center">'.$ytinfo['author_name'].'</span></p>';
} else {
echo '<br /><div class="row" style="background:#fff">
	  <div class="col-sm-4">Any Text/ Paragraph or Advertisement that you want.</div>
      </div>';
}
 ?>
                                <!–– TITULO VERDE ––> 
                                
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
