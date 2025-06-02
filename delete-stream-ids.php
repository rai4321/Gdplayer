<!Doctype Html>
<html>
	<head>
		<title>Delete Stream id's</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
			.delbtn{
				padding: 5px;
				color: #fff;
				background-color: red;
				width: 80px;
				border: none;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
<center>
<h1 style="color: #35FFFF; background: #333333; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);">Delete Stream id's</h1>

<div>
<button onClick="window.location.href=window.location.href">Refresh</button>
<br/><br/>

<?php
				$files = scandir("_cache");
		
				for($i = 2; $i < count($files); $i++){
					$path = "_cache/" . $files[$i];
                                        $path2 = "" . $files[$i];
					echo $files[$i] . " ";?>
<br>
<a href="drive.php?id=<?php echo $path2; ?>&stream=360p"><input type="button" class="delbtn" value="View"></a>


	<form action="?" method="POST">
<button style="display: ;" name="delete" class="delbtn" value="<?php echo $files[$i]; ?>">Delete</button></form><br/><br/>


<?php
	}
	if(isset($_POST['delete'])){
		$path = "_cache/" . $_POST['delete'];
		unlink($path);
       // header("location:delete.php");
}
?>
</div>
	</body>
</center>
</html>
