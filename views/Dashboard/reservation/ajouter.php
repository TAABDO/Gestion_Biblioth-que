<?php 

include __DIR__.'/../../../config/conection.php';


if(isset($_POST['submit'])){
   
  $d_reservation = $_POST['date_reservation'];
   $TableNumber = $_POST['TableNumber'];
   $Num_client = $_POST['client'];

   $requetAjouter = "INSERT INTO `reservation`(`date_reservation`, `TableNumber`, `client_id`)
   values ($d_reservation,$TableNumber,$Num_client)";
  
   $insert = mysqli_query($connect,$requetAjouter);

}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="../Dashboard.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      a {
  text-decoration: none;
  color: black;
}
    </style>
</head>


<body>


<div class="container ajouter">
	<div class="container second-section ">
		<div class=" row px-4">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<h1>Good Morning!</h1>
				<p>Here's what's happening with your store today.</p>
			</div>
			<div class=" offset-lg-3 col-lg-3 col-md-6 col-sm-12 btns">
				<button><a href="reservation.php"> < Go Back </a></button>
				
			</div>
		</div> 
	</div>
<form class="formajouter" method="POST" >

  <div class="mb-3">
    <label for="exampleInputdelivery_adresse" class="form-label" style="color:white">date_reservation</label>
    <input type="date" name="date_reservation" class="form-control w-50" id="exampleInputdelivery_adresse" placeholder="YYYY/MM/DD">
  </div>
  <div class="mb-3">
    <label for="exampleInputvalue" class="form-label" style="color:white">TableNumber</label>
    <input type="text" name="TableNumber" class="form-control w-50" id="exampleInputvalue" aria-describedby="valueHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class=" mb-3" >
    <label for="exampleInputclient" class="form-label" style="color:white">client_id</label>
    <input type="text" name="client" class="form-control w-50 " id="exampleInputclient" aria-describedby="clientHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <button type="submit" name="submit" class="btn btn-primary">save</button>
</form>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>