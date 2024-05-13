<?php 

	//include header file
	include ('include/header.php');

?>

<style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        .header {
            background-color: #ff5f6d; 
            color: #fff; /* White text color */
            padding: 50px 0; /* Padding for better spacing */
            text-align: center;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 18px;
            margin-bottom: 30px;
			color: black;
        }

        /* Card Styles */
        .card {
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 50px auto;
            max-width: 300px; /* Adjusted max-width */
            height: 400px; /* Added height */
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
            color: #333;
        }

        .card p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
            color: #555;
        }

        /* Additional Styles */
        .container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col {
            flex: 1;
            margin: 10px;
            text-align: center;
        }

        .red {
            color: #ff5f6d;
        }

        .img {
            display: block;
            margin: 0 auto;
        }

		.btn {
            background-color: #f9f9f9; /* Set background color */
            border: none; /* Remove border */
            border-radius: 5px; /* Apply border-radius for rectangle shape */
            padding: 10px 20px; /* Add padding */
            color: #333; /* Set text color */
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd; /* Change background color on hover */
        }
    </style>

<img src="img/bg1.jpg" width="100%" style="margin-bottom: 20px;">
<div class="header" style="margin-bottom: 20px;">
    <h1>Donate Blood, Save Life</h1>
    <p>Donate blood, help others.</p>
</div>


<div class="card">
	<img src="img/bg2.jpg" width="50%" style="margin-bottom: 20px;">
    <h2>Search Donors</h2>
    <hr class="white-bar">
    <form action="search.php" method="get" class="search-form">
        <div class="form-group">
            <select name="city" id="city" class="form-control" required>
                <option value="">-- Select City --</option>
                <option value="Bhopal">Bhopal</option>
                <option value="Indore">Indore</option>
                <option value="Jabalpur">Jabalpur</option>
                <option value="Ujjain">Ujjain</option>
            </select>
        </div>
        <div class="form-group">
            <select name="blood_group" id="blood_group" class="form-control">
                <option value="">-- Select Blood Group --</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">Search</button>
        </div>
    </form>
</div>

<!-- About us section -->
<div class="container">
    <div class="col">
        <div class="card">
            <h3 class="text-center red">What we do?</h3>
            <img src="img/innovation.png" alt="Our Vision" class="img" width="168" height="168">
            <p class="text-center">
                We connect blood donors with recipients, without any intermediary such as blood banks, for an efficient and seamless process. 
            </p>
        </div>
    </div>
    
    <div class="col">
        <div class="card">
            <h3 class="text-center red">Our Goal</h3>
            <img src="img/netwotk.png" alt="Our Vision" class="img" width="168" height="168">
            <p class="text-center">
                Blood Link is an innovative approach to address global health. We provide immediate access to blood donors.
            </p>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <h3 class="text-center red">Our Mission</h3>
            <img src="img/search.png" alt="Our Vision" class="img" width="168" height="168">
            <p class="text-center">
                Get to know if the required blood group is available.
            </p>
        </div>
    </div>
</div>

<!-- end aboutus section -->

<?php
//include footer file
include ('include/footer.php');
 ?>
