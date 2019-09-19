<?php	foreach ($_POST as $key => $value) {$$key = $value;} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JYTDownload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
 <center><h2>Descarga Videos de YouTube</h2></center><BR>
  <form action="index.php" method="post" action="">
    <div class="form-group">
      <label for="email">Enlace del Video:</label><BR>
      <input type="text"  class="form-control" name="video_link" placeholder="Ejemplo: https://www.youtube.com/watch?v=C0DPdy98e4c" value="<?php if(isset($video_link)){echo $video_link;}?>">
    </div><BR>
    <button type="submit" class="btn btn-default">DESCARGAR</button>
  </form>
</div>
	<br>

 <!–– TABLA IZQUIERDA ––>
<div><div class="grid-container" style="float:left;width:45%;" background-color: red;>
<?php
    if (isset($_POST['video_link'])) {
        $url = $_POST['video_link'];
        $value = explode("v=", $url);
        $videoId = $value[1];
?>
<div class="thumbnail">
    <div id="videoDiv">
        <center><iframe id="iframe" style="width: 560px; height: 315px"
            src="//www.youtube.com/embed/<?php echo $videoId; ?>"
            data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe></center>
    </div>
</div>
<div id="titleDiv">
   <h2><?php echo $title; ?></h2>
   <p><u>Description</u>: <?php echo $description; ?></p>
 </div>
<?php 
	} 
?>
</div>

 <!–– TABLA DERECHA ––>
 
<div class="container" style="float:right;width:45%;" style="border: 1px solid red;">
	<?php

		if(isset($video_link)){
			https://www.youtube.com/watch?v=bMZo3SBrLUU
			$code = str_replace("https://www.youtube.com/watch?v=","",$video_link);
			
			function get_youtube_title($video_id){
    $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key=alskdfhwueoriwaksjdfnzxcvxzfserwesfasdfs&part=snippet';
    $response = file_get_contents($html);
    $decoded = json_decode($response, true);
    foreach ($decoded['items'] as $items) {
         $title= $items['snippet']['title'];
         return $title;
    }
}
echo $title = get_youtube_title('PQqudiUdGuo');

			$video_info = file_get_contents("https://www.youtube.com/get_video_info?video_id={$code}");
			parse_str($video_info);
			echo "Nombre : ".$title;
			echo "<br>Las descargas disponibles son:<br><br>";
			$videos = explode(',',$url_encoded_fmt_stream_map);

			foreach ($videos as $video){
				parse_str($video,$video_array);
				if(strstr($video_array['type'],';',true) !== false)
					$parsedtype = strstr($video_array['type'],';',true);
				else $parsedtype = $video_array['type'];
				echo "Tipo: {$parsedtype}<br>Calidad: {$video_array['quality']}<br><a target='_blank' href=\"{$video_array['url']}\" download=\"{$title}_{$parsedtype}_{$video_array['quality']}\">{$title}_{$parsedtype}_{$video_array['quality']}</a>";
				echo "<br><br>";
			}
		}

	?>
</div></div></div>

<!–– GOOGLE API ––>

<?php
	$apikey = 'YOUR_API_KEY';
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/videos?id=' . $videoId . '&key=' . $apikey . '&part=snippet';
    
	$ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
        
    curl_close($ch);
        
    $data = json_decode($response);
        
    $value = json_decode(json_encode($data), true);
        
    $title = $value['items'][0]['snippet']['title'];
    $description = $value['items'][0]['snippet']['description'];
?>

</body>
</html>
