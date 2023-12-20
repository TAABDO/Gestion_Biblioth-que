

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>
   <link rel="stylesheet" href="../../asset/css/auth.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
<div class="container mt-6" id="Regester">
<div class="imag">
    <img src="../../asset/images/backround2.png" style="width: 40em; height: 30em;" alt="backgroud">
</div>
<div>
<h4>Create Account You must create an account 
    <br>in order to access online content.</h4>

<form method="POST" action="../../app/controllers/signUp.php">
     <div class="form-group">
        <label for="nom">username:</label>
        <input type="text" class="form-control w-100" name="username" id="username" required>
        <span></span>
    </div>
    <div class="form-group">
        <label for="fullname">fullNom:</label>
        <input type="text" class="form-control w-100" name="fullname" id="fullname" required>
        <span></span>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" class="form-control w-100" name="email" id="email" required>
        <span></span>
    </div>
    <div class="form-group">
        <label for="password">password:</label>
        <input type="password" class="form-control w-100" name="password" id="password" required>
        <span></span>
    </div>
    <div class="form-group">
        <label for="phone">phone:</label>
        <input type="tele" class="form-control w-100" name="phone" id="phone" required>
        <span></span>
    </div>

    <button type="submit" name="submit" class="btn btn-primary w-50">Regester</button>

</form>
</div>
   
</div>
</body>
</html>