<?php
// include('topbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="header.css">
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <p class="p"><i class="fas fa-store colorful-icon"></i> Istore</p>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li><a href="deal.php">Deals</a></li>
                        <li><a href="signup.php">SignUp</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="search-container">
                    <input type="text" placeholder="Search product">
                    <i class="fas fa-search"></i> <!-- Search icon -->
                    <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>