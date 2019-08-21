<html>
<head>
	<style>
body{
	background-image: url("back2.jpg");
	background-size: 120%;
	
}
div.background{
	background-color: #ffffff;
	text-align: center;
	margin:500px;
	margin-left: 600px;
	margin-top: 120px;
	border: 1px  solid black;
	opacity: 0.55;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	width: 300px;
	height: 320px;
	padding-right: 10px;
	padding-left: 10px;
}
div.upper{
	margin-top: 0px;
	font-family: sans-serif;
	font-size: 14px;
	padding-bottom: 0px;
	color:white;

}

input[type='submit'] {
  cursor: pointer;
  width: 50%;
background-color: purple;
color:white;
}
input[type='submit']:hover {
  
  background-image: url("bg.jpg");
}
input[type='text'] {
  
  font-weight: bold;
  font-size: 15px;
}
</style>
</head>
<body>
	<div class="upper">
		<p><h3><span><marquee behavior="scroll" direction="left" scrollamount="15">CAFETARIA ORDERING SYSTEM </marquee></span></h3></p>
		</div>
		<hr>
	<div class="background">
		<p><h1>LOGIN</h1></p>
		<div id="form_log">
		<form action="login.php" id="formm" method="POST">

			Registration no <input name='reg' type="text" value='BL.EN.U4CSE16101' required size="25" style="text-transform:uppercase"></input><br><br>
			Password <br> <input name='pass' type="Password" required size="32"></input><br><br>
			<input type="submit" name='submit'  value="Log in"</input>
		</form>
	</div>
	</div>
</body>
</html>