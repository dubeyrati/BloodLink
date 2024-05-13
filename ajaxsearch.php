<?php 
include ('include/header.php');
  
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "donatetheblood"; // Replace with your database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

		if((isset($_GET['city']) && !empty($_GET['city']))&& (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
			$city = $_GET['city'];
			$blood_group = $_GET['blood_group'];
			$sql = "SELECT * FROM donor WHERE city='$city' AND blood_group='$blood_group'";
		$result = mysqli_query($connection, $sql);

		if(mysqli_num_rows($result)>0){

			while ($row = mysqli_fetch_assoc($result)){
				if($row['savelife'] == '0'){

					echo '
					<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
					    <span class ="name">'.$row['name'].'</span>
						<span>'.$row['city'].'</span>
						<span>'.$row['blood_group'].'</span>
						<span>'.$row['gender'].'</span>
						<span>'.$row['email'].'</span>
						<span>'.$row['contact'].'</span>
						</div>';


				}else{
					$date = $row['savelife'];
					$start = date_create("$date");
							$end = date_create();
							$diff = date_diff($start, $end);

							$diffMonth = $diff->m;

							
							if( $diffMonth >= 3){
								echo '
					<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
					    <span class ="name">'.$row['name'].'</span>
						<span>'.$row['city'].'</span>
						<span>'.$row['blood_group'].'</span>
						<span>'.$row['gender'].'</span>
						<span>'.$row['email'].'</span>
						<span>'.$row['contact'].'</span>
						</div>';
							}
							else{
								echo '
								<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
								<span class ="name">'.$row['name'].'</span>
								<span>'.$row['city'].'</span>
								<span>'.$row['blood_group'].'</span>
								<span>'.$row['gender'].'</span>
								<h4 class = "name text-center"> Donated </h4>
								</div>';
							}

				}
			}

		} else{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			        <strong>Data Not Found.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';
		}
		}
		?>