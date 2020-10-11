<html>
<head>

<title>e-Library</title>

<link rel = "stylesheet" type = "text/css" href = "css/home.css" />

</head>

<body>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
        <h2>e-LIBRARY SYSTEM</h2>
			<h1>Create Account</h1>

			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
        <h2>e-LIBRARY SYSTEM</h2>
			<h1>Log In</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Log In</button>
			<!-- temp -->
			<a href="admin-dashboard.php">Admin Dashboard</a>
			<a href="user-dashboard.php">User Dashboard</a>
			<!-- temp -->
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, there!</h1>
				<p>Enter your details and sign up to the System</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<?php 
		include("components/footer.php");
?>


<script src="js/home.js"></script>
</body>


</html>