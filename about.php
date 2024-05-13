<?php 

	//include header file
	include ('include/header.php');

?>

<style>
	.size{
		padding: 80px 0px;
	}
	/* img{
		width: 650px;
		height: 350px;
	} */
	h2{
		color: #e74c3c;
	}
	.white{
		background-color: white;
	}
	p{
		font-size: 18px;
	}
	.right{
		float: right;
	}
	h1{
		color: white;
	}
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.about{
		background-color: #ff5f6d;
		height: 180px;
		display: flex;
		align-items: center; /* Align vertically */
		justify-content: center;
	}
	.white-bar {
		border-top: 2px solid white; /* Adding underline style */
		width: 100%; /* Adjust underline width */
	}
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

</style>
<div class="about">
	<div class="row">
		<div class="">
			<h1 class="text-center">About Us</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<!-- about us part start-->
<section class="about_us single_about_padding" style="padding-top: 20px;">

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="about_us_img">
					<img src="img/help.jpg" alt="" width="450" height="300">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <h2>About us</h2>
                    <p>We are a non profit foundation and our main objective is to make sure that everything is done to protect vulnerable persons.
                        Our ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient, and reliable way to get life-saving blood, totally Free of cost.</p>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us part end-->
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
<!-- <div class="container-fluid size">
	
	<div class="container">
		<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Vission</h2>
			<hr class="red-bar">
			<p>
				We are a group 
			</p>
			<p>
				We are a group 
			</p>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid white size">
	<div class="container ">
	<div class="container">
		<div class="row ">
		<div class="col-md-6">
			<h2 class="text-center">Our Goal</h2>
			<hr class="red-bar">
			<p>
				We are a group of
			</p>
			<p>
				We are a group of 
			</p>
		</div>
		<div ></div>
	</div>
	</div>		
</div>
</div>
	

	<div class="container-fluid size">
		<div class="container">
		<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Mission</h2>
			<hr class="red-bar">
			<p>
				We are a group 
			</p>
			<p>
				We are a group 
			</p>
		</div>
	</div> -->
	</div>
	</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
