<!DOCTYPE html>
<html>
<head>
	<title>Clickjacing Tester</title>
	<style>
		*{
			margin: 0;
			padding: 0
		}
		header{
			width: 100%;
			height: 50px;
			background: #d21d1d;
			font-size: 25px;
			border-bottom: 3px solid #961212;
   			color: #fff;
		}
		div.title{
			padding: 7px 0 0 20px;
		}
		input[type="text"]{
			position: absolute;
			top: 0;
			left: 230px;
			height: 40px;
			padding: 5px;
			padding-left: 10px;
			border: none;
			width: 77%;
			background: #d21d1d;
			color: #ddd;
			border-bottom: 3px solid #961212
		}
		input[type="text"]:focus{
			background: #AD1616;
			border-bottom: 3px solid #3b0407;
		}
		input{
			font-size: 20px;
		}
		input[type="submit"]{
			position: absolute;
			top: 0;
			right: 0;
			height: 53px;
			border: none;
			width: 5%;
			border-bottom: 3px solid #aaa
		}
		input[type="submit"]:focus{
			background: #ddd;
			border-bottom: 3px solid #999;
		}
		iframe{
			width: 100%;
			height: 90%;
			position: absolute;
			top: 53px;
			border: none;
		}	
	</style>
</head>
<body>
	<header>
		<div class="title">Clickjacing Tester</div>
		<form method="get" action="Clickjacing.php">
			<input placeholder="Write your url here to test it..." type="text" name="url">
			<input type="submit" value="Go">
		</form>
		<iframe src="<?php @echo $_GET['url']; ?>"></iframe>
	</header>
</body>
</html>