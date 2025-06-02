<!Doctype Html>
<html>
	<head>
		<title>Stream Videos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<style type="text/css">
body {
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
background: #0b79ea;
}
div {
background: #333333;
color: white;
overflow-y:hidden;
border: 2px solid #35FFFF;
}

			.btn{
				padding: 10px;
				color: #fff;
				background-color: #000;
				width: 120px;
				border: none;
				cursor: pointer;
			}
			.viewbtn{
				padding: 10px;
				color: #fff;
				background-color: #339ed4;
				width: 110px;
				border: none;
				cursor: pointer;
			}
			.downbtn{
			    padding: 10px;
			    color: white;
			    background-color: #FF3333;
			    width: 110px;
			    border: none;
			    cursor: pointer;
                            text-align: center;
			}
		</style>
	</head>
	<body>
<center>
<h1 style="color: #35FFFF; background: #333333; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);">Stream Videos</h1>

<div>
<button onClick="window.location.href=window.location.href">Refresh</button>
<br/>


<?php
				$files = scandir("_cache");
		
				for($i = 2; $i < count($files); $i++){
					$path = "_cache/" . $files[$i];
                                        $path2 = "" . $files[$i];
					echo $files[$i] . " ";?>
<br>
<div>
<video controls onmouseover="this.play()" onmouseout="this.pause();" height="300px" width="338px">
<source src="drive.php?id=<?php echo $path2; ?>&stream=360p" </source>
</video>
</div>
<br/>


<a href="drive.php?id=<?php echo $path2; ?>&stream=360p"><input type="button" class="viewbtn" value="Full-Screen"></a>

<!--
				<a href="<?php echo $path; ?>"><input type="button" class="viewbtn" value="View ID"></a>
-->


<a href="drive.php?id=<?php echo $path2; ?>&stream=360p" download="GD-Stream Video 360p"><button class="viewbtn">Download</button></a>


<select class="downbtn" name="download" onchange="location = this.options[this.selectedIndex].value;">

 <option value="" hidden>Quality</option>
 <option value="drive.php?id=<?php echo $path2; ?>&stream=360p">360p</option>
 <option value="drive.php?id=<?php echo $path2; ?>&stream=480p">480p</option>
 <option value="drive.php?id=<?php echo $path2; ?>&stream=720p">720p</option>
 <option value="drive.php?id=<?php echo $path2; ?>&stream=1080p">1080p</option>
</select>
<br>
</br>
<div>
</div>
					<br/><br/><?php
				}
				if(count($files)<=2){
					echo "No files Uploaded yet!";?><br/><br/><?php
				}
				?>
				
			<p></p>

</div>

<script>
let video = document.querySelector('video');
let isPaused = false; /* Flag for auto-paused video */
let observer = new IntersectionObserver((entries, observer) => { 
  entries.forEach(entry => {
    if(entry.intersectionRatio!=1  && !video.paused){
      video.pause(); isPaused = true;
    }
    else if(isPaused) {video.play(); isPaused=false}
  });
}, {threshold: 1});
observer.observe(video);
</script>
	</body>
</center>
</html>