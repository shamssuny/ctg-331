<!DOCTYPE html>
<html>
<head>
	<title>php FORM</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<h3 class="text-center">Class 5 - FORM</h3>

				<!-- 2 TYPES OF METHOD -->
				<!-- 1. GET -->
				<!-- 2. POST -->

				<?php

					if(isset($_POST['submit'])){

						//UPLOAD FILES
						$tmp_file = $_FILES['image']['tmp_name'];
						$fileExt = explode('.', $_FILES['image']['name']);
						$fileExt = end($fileExt);

						$fileName = uniqid().'-'.time().'.'.$fileExt;
						//move_uploaded_file($tmp_file, "asset/".$fileName);
						print_r($_FILES);
						unlink("asset/63d3e2f7cf67e-1674830583.srt");

						echo "File Uploaded!";
						
						// if($_POST['username'] != '' && $_POST['password'] != ''){

						// 	$name = "user";
						// 	$pass = "1111";

						// 	if($_POST['username'] == $name && $_POST['password'] == $pass)
						// 	{
						// 		echo "You are logged in!";
						// 	}else{
						// 		echo "<p class='alert alert-danger'>Credentials Does not Matched!</p>";

						// 	}


						// }else{
						// 	echo "<p class='alert alert-warning'>Inputs cannot be empty!</p>";
						// }

					}
					

				?>
				
				<form class="form-group" action="" method="POST" enctype="multipart/form-data">
					<label>Username:</label>
					<input class="form-control" type="text" name="username">
					<label>Password:</label>
					<input class="form-control" type="password" name="password">

					<label>Select</label>
					<select name="cars" id="cars" class="form-control">
					  <option value="volvo">Volvo</option>
					  <option value="saab">Saab</option>
					  <option value="mercedes">Mercedes</option>
					  <option value="audi">Audi</option>
					</select>


					<input class="mt-4" type="file" name="image">

					<input class="btn btn-success btn-block mt-4" type="submit" name="submit" value="Register">
				</form>
				
			</div>
		</div>
	</div>


</body>
</html>