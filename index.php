<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<head>
	<style>
		.containerr {
			max-width: 1300px;
			margin: auto;
			padding-left: 50px;
		}

		.content-wrapper {
			position: relative;
			margin-left: 300px;
			padding-top: 30px;
			margin-right: -200px;
		}

		.header {
			background: radial-gradient(#fff, #ffd6d6);

		}


		#cards {
			margin-top: 15vh;
			display: inline-block;
			justify-content: space-around;
			align-items: center;
			margin-bottom: 20vh;
		}

		.card {
			padding: 0%;
		}

		.row {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			justify-content: space-around;
			margin-right: 200px;
		}

		.col-2 {
			display: inline-block;
		}

		.col-2 img {
			margin-top: -350px;
		}

		.col-2 h1 {
			font-size: 50px;
			line-height: 60px;
			margin-right: 1400px;
		}

		.btn {
			display: inline-block;
			background: #e97ca4;
			color: #fff;
			padding: 8px 30px;
			border-radius: 20px;
			-webkit-transition: transform 0.3s ease-in-out;
		}

		.btn:hover {
			color: white;
			transform: scale(1.05);
		}

		@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		body {
			overflow-x: hidden;
			/* Hide vertical scrollbar */
		}

		.navbar {
			display: flex;
			align-items: center;
			padding: 10px;
		}

		.nav-items {
			color: rgba(0, 0, 0, 0.336);
			transition-duration: 0.5s;
		}

		.nav-items:hover {
			color: rgb(55, 22, 59);
		}




		nav {
			flex: 1;
			text-align: right;
		}

		nav ul {
			list-style-type: none;
			margin-right: 40px;
			margin-top: 0px;
		}

		nav ul li {
			display: inline-block;
			margin-right: 20px;
		}



		.container {
			max-width: 1300px;
			margin: auto;
			padding-left: 25px;
		}

		.navbar .navbar-header .navbar-brand p {
			padding: 0;
		}

		.row {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			justify-content: space-around;

		}

		.col-2 {
			flex-basis: 50%;
			min-width: 300px;
			/*padding: 150px;*/
			padding-left: 150px;
			margin-top: 130px;
		}

		.col-2 img {
			max-width: 100%;
			padding: 0;
			margin-bottom: -300px;
		}

		.col-2 h1 {
			font-size: 50px;
			line-height: 60px;
			margin: 25px 0;
			margin-top: -50px;
		}

		.btn {
			display: inline-block;
			background: #e97ca4;
			color: #fff;
			padding: 8px 30px;
			border-radius: 20px;
		}

		.btn:hover {
			color: white;
			transform: scale(1.05);
		}

		.header {
			background: radial-gradient(#fff, #ffd6d6);
		}

		#cards {
			margin-top: 15vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
			margin-bottom: 20vh;
		}

		.card {
			padding: 0%;
		}


		@media (max-width: 767px) {
			.footer-col {
				width: 50%;
				margin-bottom: 30px;
			}
		}

		@media (max-width: 574px) {
			.footer-col {
				width: 100%;
			}
		}
	</style>

</head>


<div class="header">

	<body class="hold-transition skin-blue layout-top-nav">
		<div class="wrapper" style="background: rgb(240,141,178) !important;     
	   background: linear-gradient(180deg, rgba(240,141,178,1) 33%, rgba(255,255,255,1) 95%) !important;">

			<?php
			include 'includes/navbar.php';
			?>

			<div class="containerr">
				<div class="row">
					<div class="col-2">
						<h1> The Beauty Essentials <br> You Need </h1>
						<p> Show up and steal the show <br> with an extra boost of confidence. </p>
						<a href="category.php?category=desktop-pc" class="btn">Shop Now! </a>
					</div>
					<div class="col-2 img">
						<img src="images/pic9.png">
					</div>
				</div>
			</div>
		</div>
		<div id="cards">
			<div class="card" style="width: 18rem;">
				<img src="https://images.unsplash.com/photo-1594125311687-3b1b3eafa9f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" width="200px" alt="...">
				<div class="card-body">
					<h5 class="card-title">Perfumes</h5>
					<p class="card-text">A fragrance to match your mood.</p>
					<a href="category.php?category=" class="btn">Browse Our Perfumes</a>
				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" class="card-img-top" width="200px" alt="...">
				<div class="card-body">
					<h5 class="card-title">Cosmetics</h5>
					<p class="card-text">Turn into a glamorous you.</p>
					<a href="category.php?category=desktop-pc" class="btn">Browse Cosmetics</a>
				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" class="card-img-top" width="200px" alt="...">
				<div class="card-body">
					<h5 class="card-title">Manicures</h5>
					<p class="card-text">Your manicure speaks to the world for you.</p>
					<a href="category.php?category=laptops" class="btn">Browse Manicures</a>
				</div>
			</div>

		</div>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">

					<?php include 'includes/chat-box.php'; ?>
					<div class="row">
						<div class="col-sm-9">
							<?php
							if (isset($_SESSION['error'])) {
								echo "
	        					<div class='alert alert-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
								unset($_SESSION['error']);
							}
							?>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="images/1.png" alt="First slide">
									</div>
									<div class="item">
										<img src="images/67.png" alt="Second slide">
									</div>
									<div class="item">
										<img src="images/3.png" alt="Third slide">
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="fa fa-angle-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="fa fa-angle-right"></span>
								</a>
							</div>
							<?php
							$month = date('m');
							$conn = $pdo->open();

							try {
								$inc = 3;
								$stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
								$stmt->execute();
								foreach ($stmt as $row) {
									$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
									$inc = ($inc == 3) ? 1 : $inc + 1;
									if ($inc == 1) echo "<div class='row'>";
									echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='" . $image . "' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; " . number_format($row['price'], 2) . "</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
									if ($inc == 3) echo "</div>";
								}
								if ($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
								if ($inc == 2) echo "<div class='col-sm-4'></div></div>";
							} catch (PDOException $e) {
								echo "There is some problem in connection: " . $e->getMessage();
							}

							$pdo->close();

							?>

						</div>
				</section>

			</div>
		</div>

</div>

<?php include 'includes/scripts.php'; ?>


</body>

</html>

</html>