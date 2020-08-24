
<html>
	<body>
		<link rel="stylesheet" href="rbwelcome.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<div class="drop">
		<ul class="dmenu"role="menu">
		<i id="mc"class="fa fa-motorcycle"><p style="font-family:sans-serif;font-size: 100%;">MC Service</p></i>

			<li class="hv"><a href="#">Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Help</a>
			<div class=sub>
				<ul>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
		</li>
		</ul>
</div>
         
	<script type="text/javascript" src="custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
  $("#loginpg").click(function(){
    $(".login-box").load("welcome.php");
  });
});
</script>
	<link rel="stylesheet" href="redblack.css">
		<div class="login-box">
			<div>
				<img class="m1">
			</div>
			<h1 id="sign">SIGNUP</h1>
			<form method="post" action="#">
				<div class="user-box">
					<input type='text' name='email' required="" id="uid"/><label>Email</label><br>
				</div>
				<div class="user-box">
					<input type="text" name="user_name" required="" /><label>Username</label><br>
				</div>
				<div class="user-box">
					<input type='password' name="pass" required="" id="pid"/><label>Password</label><br>
				</div>
				<div class="user-box">
					<input type='password' name="cpass" required="" id="pid2"/><label>ConfirmPassword</label><br>
				</div>
				<button name="submit" onclick="show()"> Sign Up </button>
				<a href="welcomeb.php" id="loginpg" >Already user</a>
			</form>
		</div>
		<br>
	</body>
</html>


<?php
	$conn = new mysqli('localhost','root','','userdata');

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	if (!empty($_POST))
	{
      $email = $_POST['email'];
      $user=$_POST['user_name'];
      $pass = $_POST['pass'];
      $cpass=$_POST['cpass'];
      //$email = test_input($_POST["email"]);
      if(strlen(trim($pass)) < 8)
      {
     echo '<script type="text/JavaScript">  
     window.alert("password should contain 8 characters"); 
     </script>' ;
      }
      elseif ($pass!=$cpass) {
      	echo '<script type="text/JavaScript">  
     window.alert("password doesnt match"); 
     </script>' ;
      	
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
  		echo '<script type="text/JavaScript">  
     window.alert("invalid email format"); 
     </script>' ;
	  }
      else{
      $sql = "INSERT INTO user (email,username,password) VALUES ('$email','$user','$pass')";

	  if ($conn->query($sql) === TRUE) {
	  			 echo '<script type="text/JavaScript">  
     window.alert("Account Created Successfully"); 
     </script>' ;
	     header("location:welcome.php");
	   } 
	   else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	   }
	}
	}
?>




