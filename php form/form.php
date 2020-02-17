<?php

$users = [["username" => "samir" , "password" => "samir166"] ,
		["username" => "melikmemmed" , "password" => "melikmemmed"]
];

foreach ($users as $value) {
  if($_SERVER['REQUEST_METHOD'] == "POST"){

	if(empty($_POST["username"]) && empty($_POST["password"])){
		echo "Melumat daxil edin";
		break;
	}
	

	if(empty($_POST["username"])){
		echo "Username daxil edin";
		break;
	}

	if(empty($_POST["password"])){
		echo "Shifre daxil edin";
		break;
	}


	if($_POST["username"] == $value["username"] && $_POST["password"] == $value["password"]){
		header('Location:profile.php');
	}
	else{
		echo "Melumatlar sehvdir";
		break;
	}

	}
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>
	
	<form action="#" method="POST">
		<input name="username" type="text" placeholder="Username"> <br> <br>
		<input name="password" type="password" placeholder="Password"> <br> <br>
		<input name="submit" type="submit" value="Submit">
	</form>


</body>

</html>
