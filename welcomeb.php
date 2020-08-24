<html>
			<body>
				<script type="text/javascript">
					function hide()
					{
						var x=document.getElementById("pid")
						var y=document.getElementById("hide1")
						var z=document.getElementById("hide2")
						if(x.type="password")
						{
							x.type="text";
							y.style.display="block";
							z.style.display="none";
						}
						else
						{
							x.type="password";
							y.style.display="none";
							z.style.display="block";
						}
					}
				</script>


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

		<link rel="stylesheet" href="redblack.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="login-box">
											<h1 id="log">LOGIN</h1>
					<form method="post">

	<div class="user-box">
		<input type='text' name="email" id="uid" required="" /><br>
		<label>	<i class="fa fa-envelope-o"></i> Username</label>
	</div>
	<div class="user-box">
		<input type='password' name="pass" id="pid" required="" >
		<span class="eye" onclick="hide()">
			<i id="hide1" class="fa fa-eye" ></i>
			<i id="hide2" class="fa fa-eye-slash" ></i>
		</span>
		<label>	
			<i class="fa fa-key"></i>
			 Password
			</label>
		</div>

		<div style="display: flex; flex-direction: column">
			<button class="btn btn-primary" >Login </button>
			<a href="signup.php" style="text-align: center">Sign up</a>
		</div>

	</form>
</div>
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
      $pass = $_POST['pass'];
       if(strlen(trim($pass)) < 8)
      {
     echo '<script type="text/JavaScript">  
     window.alert("password should contain 8 characters"); 
     </script>' ;
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
  		echo '<script type="text/JavaScript">  
     window.alert("invalid email format"); 
     </script>' ;
	  }
      else{

      $sql = "SELECT email,password FROM user WHERE email='".$email."'AND password='".$pass."'";

	$result = $conn->query($sql);

		if (!empty($result) && $result->num_rows > 0) {
		
		  while($row = $result->fetch_assoc()) 
		  {
		    header("location: cpage.php");

		  }
		} 
		else
		 {
		 echo '<script type="text/JavaScript">  
     window.alert("Invalid email or password"); 
     </script>' ;
		 }
    }
}
?>