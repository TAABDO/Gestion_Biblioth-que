
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>
   <link rel="stylesheet" href="../../public/auth.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container mt-6" id="Regester">
<div class="imag">
    <img src="../../public/images/backround.png" style="width: 40em; height: 30em;" alt="backgroud">
</div>
<div class="row mt-6">
    <h4> ohh Nice You Are One Of Use</h4>
    <form method="post" action="../../app/controllers/singIn.php">
        
        <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control w-100" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="email">password:</label>
            <input type="password" class="form-control " name="password" id="password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Signin</button>
        

    </form>
</div>

<!-- Add Bootstrap JS and Popper.js CDN links -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>