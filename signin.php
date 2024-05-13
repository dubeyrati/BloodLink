<?php 

	//include header file
	include ('include/header.php');
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "donatetheblood"; // Replace with your database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);


	if(isset($_POST['SignIn'])){
		if(isset($_POST['email']) && !empty($_POST['email'])){
			$email = $_POST['email'];
		} else{
			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Please fill correct email.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
		}
		if(isset($_POST['password']) && !empty($_POST['password'])){
			$password = $_POST['password'];

			$password = md5($password);
		} else{
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Please fill correct password.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
		}

		if(isset($email) && isset($password)){
			$sql = "SELECT * FROM donor WHERE password = '$password' && email = '$email'";
			$result = mysqli_query($connection, $sql);

			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
					$_SESSION['user_id'] = $row['id'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['safe_life_date'] = $row['savelife'];

					header('Location: user/index.php');
				}
			} else {
				$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Sorry! No records found.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
			}
		}
	}

?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #ff5f6d;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.signin{
		background-color: #ff5f6d;
		height: 180px;
		display: flex;
		align-items: center; /* Align vertically */
		justify-content: center;
	}
	.white-bar {
		border-top: 2px solid white; /* Adding underline style */
		width: 300%; /* Adjust underline width */
	}
	.btn-signin {
		background-color: #ff5f6d; /* Change button color */
		color: white; /* Change text color */
	}
</style>
 <div class="signin">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">

		<?php if(isset($submitError)) echo $submitError;?>
		
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email" required>
					<?php if(isset($emailError)) echo $emailError;?>
				</div>


				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
					<?php if(isset($passwordError)) echo $passwordError;?>
				</div>
				<div class="form-group">
					<button class="btn btn-signin btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
