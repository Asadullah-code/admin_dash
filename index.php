<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page 2</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>


	<main>
		<div class="container my-5">
			<!-- first main row start-->
			<div class="row">
				<!-- main col4 start -->
				<div class="col-4">
					<div class="card persCard mb-5">
					  <div class="card-body persCardBody">
					    <h5 class="card-title">All about you <img class="dummy-image" src="assets/images/dummy.jpg" alt="Dummy Image"></h5>
					    <h6 class="card-subtitle mb-2 text-body-secondary">Please tell us more about yourself</h6>
					    <form method="post">
					    	<!-- row under form start -->
					    	<div class="row d-flex align-items-center justify-content-start mt-4">
					    		
								<div class="col-lg-6 col-md-12 col-12 mb-3">
									<label for="firstName" class="form-label text-body-secondary">First name</label>
									<input type="text" class="form-control" id="firstName">
								</div>
								<div class="col-lg-6 col-md-12 col-12 mb-3">
									<label for="lastName" class="form-label text-body-secondary">Last name</label>
									<input type="text" class="form-control" id="lastName">
								</div>
								<div class="col-12">
									<label for="exampleInputEmail1" class="form-label text-body-secondary">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								<div class="col-12 mb-3">
									<button id="toggleButton" class="btn btn-secondary dropdown-toggle" type="button">
									More Information
									</button>
									<div id="urlDiv" class="urlDiv py-2 w-100" style="display: none;">
										<label for="url" class="form-label text-body-secondary">URL</label>
										<input type="url" class="form-control" name="url" id="url">
										<a href="#" class="btn btn-sm editBtn">edit</a>
									</div>
								</div>
								<button type="submit" class="btn saveButton mt-1">Save Changes</button>

					    	</div>
					    	<!-- row under form end -->
						</form>
					  </div>
					</div>
					<div class="card persCard">
					  <div class="card-body persCardBody">
					    <h6 class="card-subtitle mb-2 text-body-secondary">Step 02</h6>
					    <h5 class="card-title">Add more things to your profile </h5>
					    <h6 class="card-subtitle mb-2 text-body-secondary">everthing you needis some banners andsome posts!</h6>
					    
							<button type="submit" class="btn saveButton mt-1">Save Changes</button>
					  </div>
					</div>
				</div>
				<!-- main col4 end -->
				<!-- main col8 start -->
				<div class="col-8">				
				</div>
				<!-- main col8 end -->

			</div>
			<!-- first main row end -->
		</div>		
	</main>





	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>