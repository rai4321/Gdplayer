<!DOCTYPE html>
<html>
<title>GD-Video Stream</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #0b79ea;
  min-height: 100%;
 padding-top: 15%;
}

.container {
  max-width: 400px;
  width: 100%;
  background: white;
  padding: 2rem;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
border: 1px solid #333333;
}
.container .title {
  font-size: 1.7rem;
  font-weight: 800;
  border-left: 0.3rem solid;
  padding-left: 0.5rem;
  color: #0b79ea;
  margin-bottom: 1rem;

/*
  text-transform: uppercase;
*/

  word-spacing: 4px;
}

.container .inputBox, input{
  margin-bottom: 1rem;
}

.container .inputBox:last-child {
  margin-bottom: 0;
}

.container .inputBox .form-label {
  display: block;
  font-weight: 500;
  font-size: 0.9rem;
  color: #222;
  margin-bottom: 0.3rem;
}

.container .inputBox .form-control {
  border: 1px solid #eee;
  width: 100%;
  min-height: 40px;
  padding: 1rem;
  font-size: 0.9rem;
  color: #222;
  outline: none;
  transition: 0.3s;
}
.container .inputBox .form-control:focus,
.container .inputBox .form-control:valid {  
border-color: #0b79ea; 
}


       .btn2{
				padding: 7px;
				color: white;
				background-color: #333333;
				width: 100px;
				border: 1px solid silver;
				cursor: pointer;
                                border-radius: 10px;
                                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
font-family: "Roboto", sans-serif;
			} 
.btn2:hover{
     padding: 8px;
     color: white;
    background: #FF3333; 
     }
                        .btn {
                                padding: 5px;
				color: #fff;
				background-color: #000;
                                height: 10px;
				width: 10px;
				cursor: pointer;
                             }
 .btn:hover{
    padding: 8px;
     color: white;
    background: #FF3333; 
     }
</style>
</head>
<body>
<center>
<div class="container">
         <h2 class="title">GD-Video Stream</h2>
        <h5 style="color: green;">Enter google drive video id to get video playback</h5>
<h5 style="color: green;">in different qualities like</h5>
<h5 style="color: green;">360p, 480p, 720p, 1080p.etc</h5>
</div>
<div class="container">
<form class="inputBox" action="form-validator.php" method="GET">

  <input class="form-control"  name="id" type="text" placeholder="Enter Video ID Here"/>
  <br>
<label for="quality">video quality:</label>
  <select class="in" name="stream" >
    <option value="" disabled selected>Auto</option>
    <option value="360p">360p</option>
    <option value="480p">480p</option>
    <option value="720p">720p</option>
    <option value="1080p">1080p</option>
  </select>
<br><br>
  <input class="btn2" type="submit" value="Play" />
<a class="btn" href="stream-videos.php"><i class="fa fa-bars"></i></a>
</form>
</div>
</center>
<br>
</body>
</html>