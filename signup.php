<?php
include('topbar.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up with Video Background</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Basic page styling */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        /* Video background container */
        .video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        }

        /* Form container styling */
        .signup-container {
            position: relative;
            z-index: 2;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            color: white;
            /* background-color: rgba(255, 255, 255, 0.8); Transparent white background
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); */
            border-radius: 10px;
        }

        /* Form title */
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Sign-up button */
        .btn-signup {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-signup:hover {
            background-color: #218838;
        }

        /* Focused input fields */
        .form-control:focus {
            border-color: #28a745;
            box-shadow: none;
        }

        /* Text link */
        .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
include('conn.php');
$message = '';
if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(name,lname,email,password)VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($con,$sql);
    // $stmt = mysqli_prepare($con,$sql);
if($stmt){
    mysqli_stmt_bind_param($stmt,"ssss",$name,$lname,$email,$password);
    if(mysqli_stmt_execute($stmt)){
        $message = "<div class='alert alert-success'>Data inserted successfully!</div>";
    }else{
        $message = "<div class='alert alert-success'>failed!</div>".mysqli_error($stmt);
    }
    mysqli_stmt_close($stmt);
}else{
    echo "prepareing erre".mysqli_error($stmt);
}
mysqli_close($con);
}
?>
<!-- Video Background -->
<video autoplay muted loop class="video-background">
    <source src="vedio.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<!-- Sign-Up Form Container -->
<div class="signup-container">
    <h2>Sign Up</h2>
    <div class="mt-3"><?php echo $message; ?></div>
    <form method="post">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text1" class="form-control" name="name" id="firstName" placeholder="Enter your first name" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text1" class="form-control" name="lname" id="lastName" placeholder="Enter your last name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn-signup">Sign Up</button>
        <a href="#" class="login-link">Already have an account? Log in</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
include('footer.php');
?>